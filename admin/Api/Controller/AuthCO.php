<?php

class AuthCO extends AuthCM
{
    private $emailAddress;
    private $password;

    public function __construct($emailAddress, $password){
    $this->emailAddress = $emailAddress;
    $this->password = $password;
}
public function initiateLogins()
{
    if($this->isEmptyInputs == true){
       
    }
}
private function isEmptyInputs()
{
    if(empty($this->emailAddress) || empty($this->password)){
        return true;
    }else{
        return false;
    }
    }
   }
