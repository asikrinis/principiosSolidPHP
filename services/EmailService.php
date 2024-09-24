<?php 
require_once __DIR__ . "/../services/NotificationService.php";

class EmailService implements NotificationService {
    private $email;
    public function __construct($email) {
        $this->email = $email;
    }

    public function send($message){
        echo "Sending email to {$this->email}: $message <br>";
    }
}

?>