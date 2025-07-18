<?php

class AdminCO extends AdminCM
{


    private $userId;
    private $fullname;
    private $email;
    private $password;
    private $status;

    public function __construct($userId, $fullname, $email, $password)
    {
        $this->userId = $userId;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
        $this->status = "Active";
    }
    public function introduceAdmin()
    {
        if ($this->isEmptyInputs() == true) {
            header("Location: ./../../Auth/register.php?msg=empty");
        }
       if ($this->isUserAlreadyExist( $this->Email) == true) {
        header("Location:./../../Auth/Register.php?msg=already_exists");
       }
       $this->appendAadmin($this->fullname, $this->email, $this->password, $this->status);
    }
       private function isEmptyInput():
    {
        if (empty($this->userId) || empty($this->fullname) || empty($this->email) || empty($this->password)) {
            return true;
    }else{
            return false;

            }

        }
       }
