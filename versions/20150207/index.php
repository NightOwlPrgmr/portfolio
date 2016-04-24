<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>-->
<!--
########################
## Site: portfolio    ##
## File: index.php    ##
## Date: Feb. 7, 2015 ##
########################
-->
<html class="no-js" lang="en">
<!--<![endif]-->
	<head>
		<title>Christopher Mathis | Portfolio</title>
		<!-- page meta data -->
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Responsive and mobile friendly meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="An online portfolio to showcase my work, tell you about myself and history, and to give a point of contact.">
    	<meta name="author" content="Christopher Mathis">

		<!-- external css styles -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="all">

		<!-- custom fonts -->
	    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" media="all">
	    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" type="text/css" media="all">
	    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
		
		<!-- js external scripts -->
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>

		<!-- custom jquery -->
		<script type="text/javascript">
			// remove class if JS is enabled
			$("html").removeClass("no-js");

			// document.ready functions
			$(function() {
				// collapse the navbar on scroll
				$(window).scroll(function() {
				    if ($(".navbar").offset().top > 50) {
				        $(".navbar-fixed-top").addClass("top-nav-collapse");
				    } else {
				        $(".navbar-fixed-top").removeClass("top-nav-collapse");
				    }
				});

				// page scrolling - requires jQuery easing plugin
			    $('a.page-scroll').bind('click', function(event) {
			        var $anchor = $(this);
			        $('html, body').stop().animate({
			            scrollTop: $($anchor.attr('href')).offset().top
			        }, 1500, 'easeInOutExpo');
			        event.preventDefault();
			    });

			    // closes the responsive menu on menu item click
				$('.navbar-collapse ul li a').click(function() {
				    $('.navbar-toggle:visible').click();
				});
			}); // end document.ready functions
		</script>
	</head>
	<!-- view port begins -->
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!-- navigation -->
	    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <i class="fa fa-bars"></i>
	                </button> <!-- end a.navbar-toggle -->
	                <a class="navbar-brand page-scroll" href="#page-top">
	                    <i class="fa fa-play-circle"></i>  <span class="light">My</span> Portfolio
	                </a> <!-- end a.page-scroll -->
	            </div> <!-- end .navbar-header

	            <!-- nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	                <ul class="nav navbar-nav">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#about">About</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#showcase">Showcase</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#contact">Contact</a>
	                    </li>
	                </ul> <!-- end ul.navbar-nav -->
	            </div> <!-- end .navbar-collapse -->
	        </div> <!-- end .container -->     
	    </nav> <!-- end nav -->

	    <!-- header -->
	    <header class="intro">
	        <div class="intro-body">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                        <h1 class="brand-heading">Christopher Mathis</h1>
	                        <p class="intro-text">An experienced Web Developer<br>Constant skill building</p>
	                        <a href="#about" class="btn btn-circle page-scroll">
	                            <i class="fa fa-angle-double-down animated"></i>
	                        </a> <!-- end a.page-scroll -->
	                    </div> <!-- end .col-md-8 -->
	                </div> <!-- end .row -->
	            </div> <!-- end .container -->
	        </div> <!-- end .intro-body -->
	    </header> <!-- end header -->

	    <!-- about section -->
	    <section id="about" class="container content-section text-center">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2">
	                <h2>About Me</h2>
	                <p>I'm a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
	                <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
	                <p>I include full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
	            </div> <!-- end .col-lg-8 -->
	        </div> <!-- end .row -->
	    </section> <!-- end #about -->

	    <!-- showcase section -->
	    <section id="showcase" class="content-section text-center">
	        <div class="showcase-section">
	            <div class="container">
	                <div class="col-lg-8 col-lg-offset-2">
						<hr class="showcase-divider">

						<div class="row showcase">
							<div class="col-md-7">
								<h2 class="showcase-heading">First showcase heading. <span class="text-muted">It'll blow your mind.</span></h2>
								<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
								<div class="skillset">
									PHP <span class="badge"><i class="fa fa-check-square"></i></span>
									jQuery <span class="badge"><i class="fa fa-check-square"></i></span>
									HTML5 <span class="badge"><i class="fa fa-check-square"></i></span>
									CSS3 <span class="badge"><i class="fa fa-check-square"></i></span>
									SQL <span class="badge"><i class="fa fa-check-square"></i></span>
								</div>
							</div> <!-- end .col-md-7 -->
							<div class="col-md-5">
								<img class="showcase-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
							</div> <!-- end .col-md-5 -->
						</div> <!-- end .row .showcase -->

						<hr class="showcase-divider">

						<div class="row showcase">
							<div class="col-md-5">
								<img class="showcase-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
							</div> <!-- end .col-md-5 -->
							<div class="col-md-7">
								<h2 class="showcase-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
								<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
								<div class="skillset">
									PHP <span class="badge"><i class="fa fa-check-square"></i></span>
									jQuery <span class="badge"><i class="fa fa-check-square"></i></span>
									HTML5 <span class="badge"><i class="fa fa-check-square"></i></span>
									CSS3 <span class="badge"><i class="fa fa-check-square"></i></span>
									SQL <span class="badge"><i class="fa fa-check-square"></i></span>
								</div>
							</div> <!-- end .col-md-7 -->
						</div> <!-- end .row .showcase -->

						<hr class="showcase-divider">

						<div class="row showcase">
							<div class="col-md-7">
								<h2 class="showcase-heading">And lastly, this one - the pixel perfect one! <span class="text-muted">Checkmate.</span></h2>
								<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
								<div class="skillset">
									PHP <span class="badge"><i class="fa fa-check-square"></i></span>
									jQuery <span class="badge"><i class="fa fa-check-square"></i></span>
									HTML5 <span class="badge"><i class="fa fa-check-square"></i></span>
									CSS3 <span class="badge"><i class="fa fa-check-square"></i></span>
									SQL <span class="badge"><i class="fa fa-check-square"></i></span>
								</div>
							</div> <!-- end .col-md-7 -->
							<div class="col-md-5">
								<img class="showcase-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
							</div> <!-- end .col-md-5 -->
						</div> <!-- end .row .showcase -->

						<hr class="showcase-divider">
	                </div> <!-- end .col-lg-8 -->
	            </div> <!-- end .container -->
	        </div> <!-- end .showcase-section -->
	    </section> <!-- end #showcase -->

	    <!-- contact section -->
	    <section id="contact" class="container content-section text-center">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2">
	                <h2>Contact Me</h2>
	                <p>Feel free to email me to request my resume or more details, offer an interview, or to just say hello!</p>
	                <p><a href="javascript:void(0)" class="clickable" data-toggle="modal" data-target="#contact-modal">Send me your feedback</a></p>
	                <ul class="list-inline banner-social-buttons">
	                    <li>
	                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
	                        <i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
	                    </li>
	                    <li>
	                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg">
	                        <i class="fa fa-stack-exchange fa-fw"></i> <span class="network-name">Stack Overflow</span></a>
	                    </li>
	                    <li>
	                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg">
	                        <i class="fa fa-linkedin-square fa-fw"></i> <span class="network-name">Linked In</span></a>
	                    </li>
	                </ul> <!-- end ul.list-inline -->
	            </div> <!-- end .col-lg-8 -->
	        </div> <!-- end .row -->
	    </section> <!-- end #contact -->

	    <!-- footer -->
	    <footer>
	        <div class="container text-center">
	            <p>Copyright &copy; Christopher Mathis' Portfolio 2015</p>
	        </div> <!-- end .container -->
	    </footer> <!-- end footer -->

		<!-- contact me modal -->
		<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="contactLabel">Contact Me</h4>
					</div> <!-- end .modal-header -->
					<div class="modal-body">
						<form id="contactForm" class="form-horizontal">
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div> <!-- end .col-sm-10 -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div> <!-- end .col-sm-10 -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<label for="phone" class="col-sm-2 control-label">Phone</label>
								<div class="col-sm-10">
									<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone">
								</div> <!-- end .col-sm-10 -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-10">
									<textarea id="message" name="message" class="form-control" rows="3" placeholder="Message"></textarea>
								</div> <!-- end .col-sm-10 -->
							</div> <!-- end .form-group -->
						</form> <!-- end form #contactForm -->
					</div> <!-- end .modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary">Send</button>
					</div> <!-- end .modal-footer -->
				</div> <!-- end .modal-content -->
			</div> <!-- end .modal-dialog -->
		</div> <!-- end #contact-modal -->
	</body> <!-- end body -->
</html> <!-- end html -->