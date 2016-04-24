<?php
    class database {
        private $host = defined(DB_HOST) ? DB_HOST : null;
        private $user = defined(DB_USER) ? DB_USER : null;
        private $pass = defined(DB_PASS) ? DB_PASS : null;
        private $name = defined(DB_NAME) ? DB_NAME : null;
        private $handle;
        private $error;

        public function __construct() {
            // set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

            // set options
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try {
                $this->$handle = new PDO($dsn, $this->user, $this->pass, $options);
            }
        }
    }
?>