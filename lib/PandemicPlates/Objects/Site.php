<?php

namespace PandemicPlates\Objects;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Site {
    /**
     * @return string get site root directory
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param string set site root directory
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    /**
     * Configure the database
     * @param $host
     * @param $user
     * @param $password
     */
    public function dbConfigure($host, $user, $password) {
        $this->dbHost = $host;
        $this->dbUser = $user;
        $this->dbPassword = $password;
    }

    /**
    * Configure the mailer
    * @param $username
    * @param $password
    */
    public function mailerConfigure($username, $password) {
        //builds our mailer object
        self::$mailer = new PHPMailer(true);
        self::$mailer->isSMTP();
        self::$mailer->SMTPAuth = true;
        self::$mailer->SMTPSecure = 'ssl';
        self::$mailer->Host = 'smtp.gmail.com';
        self::$mailer->Port = '465';

        //set username and password with given params
        self::$mailer->Username = $username;
        //self::$emailUsername = $username;
        self::$mailer->Password = $password;
        //self::$emailPassword = $password;
    }

    /**
    * Send an email through the mailer
    * @param $message
    */
    /*
    public function sendEmail($isHtml=false, $from, $to, $subject, $message) {
        //if mailer is null see if we can reconnect with user/password
        if(self::$mailer === null) {
            // if((self::$emailUsername !== null) && (self::$emailPassword !== null)){
            //     self::mailerConfigure(self::$emailUsername, self::$emailPassword);
            // } else {
            //     die("Could not send email, mailer not configured properly");
            // }
            die("Could not send email, mailer not configured properly");

        } else {
            self::$mailer->isHTML($isHtml);
            self::$mailer->SetFrom($from);
            foreach ($to as $addressTo) {
                self::$mailer->AddAddress($addressTo);
            }

            self::$mailer->Subject = $subject;
            self::$mailer->Body = $message;

            if(!self::$mailer->Send()) {
                echo "Error: " . $mailer->ErrorInfo;
            }
        }
    }
    */

    /**
     * Database connection function
     * @return PDO object that connects to the database
     */
    function pdo() {
        // This ensures we only create the PDO object once
        if(self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            self::$pdo = new \PDO($this->dbHost,
                $this->dbUser,
                $this->dbPassword);

            //Following line may need to be commented out in prod
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            // If we can't connect we die!
            die("Unable to select database" . $e);
        }

        return self::$pdo;
    }

    private static $pdo = null; // The PDO object
    private $dbHost = null;     // Database host name
    private $dbUser = null;     // Database user name
    private $dbPassword = null; // Database password
    private $root = '';         // Site root
    private static $mailer = null;      // Mailer for email
    //private $emailUsername = null;      // username used for mailer
    //private $emailPassword = null;      // password for email mailer
}
