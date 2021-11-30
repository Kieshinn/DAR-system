<?php 

// for signup //

if (isset($_POST["signup"])) {
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mname = $_POST["mname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];
    $access = $_POST["access"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputSignup($fname, $lname, $mname, $email, $tel, $username, $password, $rpassword, $access) !== false) {
        header("location:../signup-client.php?error=emptyinput");
        exit();
    }
    
    if (InvalidEmail($email) !== false) {
        header("location:../signup-client.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password, $rpassword) !== false) {
        header("location:../signup-client.php?error=passworddontmatch");
        exit();
    }
    if (uidExists($conn, $username) !== false) {
        header("location:../signup-client.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fname, $lname, $mname, $email, $tel, $username, $password, $access);



}
 else {
     header("location:../../signup-client.php");
     exit();
 }





 