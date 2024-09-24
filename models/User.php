<?php
class User {
    private $email;
    private $phone;

    public function __construct($email, $phone){
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }
}
?>