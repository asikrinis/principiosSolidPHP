<?php 
require_once __DIR__ . "/../services/NotificationService.php";

class SMSService implements NotificationService {
    private $phone;
    public function __construct($phone){
        $this->phone = $phone;
    }

    public function send($message){
        echo "Sending SMS to {$this->phone}: $message <br>";
    }
}
?>