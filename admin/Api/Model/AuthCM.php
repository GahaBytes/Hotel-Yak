<?php
class AuthCM extends DatabaseConfig 
{
    protected function validdatePassword($email_Address)
   {
     $fetchStmt  $this->integrate()->prepare('SELECT `password` FROM `Hotel` WHERE `emailAddress`)  VALUES (?,?);');
   }
     if(!$fetchStmt->execute([$email_Address, $password]));
          header("Location: ./../../Auth/login.php?msg=server_error");
          exit();
   }
     // Verifying User Existence
     if ($fetchStmt->rowcount() > 0 ) {

        //Fetch Data Database

        $record = $fetchStmt->fetch(PDO::FETCH_ASSOC);
        $hashedPwd = $record["password"];
        $isPwdvarified = password_verify($password, $hashedPwd);
        if ($isPwdvarified) {
          return true;
        }else{
          return false;
        }
      }else{
        header("Location:./../../Auth/Login.php?msg=User_Not_Found");
        exist();
      }
      
      protected function initiateSession(email_address) {

      }
      
    
