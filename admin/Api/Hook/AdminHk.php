<?php
include './../Auto/AutoLoader.php';
if(!isset($_POST["Registration"])) {
    echo"Opps Something Went Wrong !";
} else {
    echo"<pre>";
    print_r($_POST);
    echo "<pre>";
     
    //Data collection
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    echo"full Name: $full_name <br>";
    echo"email: $email <br>";
    echo "password: $password";

    $addAdmin = new AdminCO(null, $fullname, $email, $password);
    $addAdmin->introduceAdmin();

    header("Location: ./../../Auth/register.php?msg=success");
}
