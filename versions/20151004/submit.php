<?php
##################################################
##	Processes form data and sends email	##
##	Created by: Chris Mathis on 5/13/15	##
##################################################
$error = false;
$name = $email = $phone = $message = null;

(isset($_REQUEST) && !empty($_REQUEST) ? $data = $_REQUEST : $error = true);
 unset($_REQUEST);

# validate requests
if ($error === false) {
	(isset($data["name"])    && !empty($data["name"])    ? $name    = $data["name"]    : $name    = null);
	(isset($data["email"])   && !empty($data["email"])   ? $email   = $data["email"]   : $email   = null);
	(isset($data["phone"])   && !empty($data["phone"])   ? $phone   = $data["phone"]   : $phone   = null);
	(isset($data["message"]) && !empty($data["message"]) ? $message = $data["message"] : $message = null);
	 unset($data);

	# validate name
	if ($name !== null) {
		if (!preg_match("/^[a-zA-Z0-9\_]{2,20}/", $name)) {
  			$error = true;
  			$output["error"] = "Please enter a valid name";
  			$output["field"] = "#name";
  		}
	} else { 
		$error = true; 
		$output["error"] = "Please enter your name";
		$output["field"] = "#name";
	}

	# validate email
	if ($error === false && $email !== null) {
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)) {
			$error = true;
  			$output["error"] = "Please enter a valid email";
  			$output["field"] = "#email";
		}
	} else { 
		$error = true; 
		$output["error"] = "Please enter your email";
		$output["field"] = "#email";
	}

	# validate phone
	if ($error === false && $phone !== null) {
		if (!preg_match("/^[0-9\_]{7,20}/", $phone)) {
			$error = true;
  			$output["error"] = "Please enter a valid phone number";
  			$output["field"] = "#phone";
		}
	}

	# validate message
	if ($error === false && $message === null) {
		$error = true;
  		$output["error"] = "Please enter a message";
  		$output["field"] = "#message";
	} else { $message = wordwrap($message, 70, "\r\n"); }

	if ($error === false) { 
		# build email
		$to = "webmaster@mathisportfolio.pcriot.com";
		$cc = "mathisdac@gmail.com";
		$subject = "Contact Alert";
		
		$body = "A message has been sent on my portfolio from: " . $name . "\r\n";
		if ($phone !== null) { $body .= "Phone: " . $phone . "\r\n\r\n"; } else { $body .= "\r\n"; }
		$body .= $message;
		
		$headers = "From: " . $name . " <" . $email . ">\r\n";
		$headers .= "Cc: " . $cc . "\r\n";
		
		if (function_exists('mail')) {
			if (@mail($to, $subject, $body, $headers)) {
				$output["data"] = "Thank you, your email has been received!";
				$output["dtls"] = $to . " " . $headers;
			} else { $output["error"] = "We're sory, there was an issue sending the email."; }
		} else { $output["error"] = "Server does not allow emailing"; }
	}
}

unset($name, $email, $phone, $message, $error, $to, $cc, $subject, $body, $headers);
echo json_encode($output);
?>