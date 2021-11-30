<?php

function emptyInputSignup($fname, $lname, $mname, $email, $tel, $username, $password, $rpassword, $access) {
    $result;
    if (empty($fname)|| empty($lname)|| empty($mname)|| empty($email)|| empty($tel)|| empty($username) || empty($password)|| empty($rpassword)|| empty($access)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $result = true;
        
    } 
    
    else {
        $result = false;
    }
    
    return $result;
    
}

function pwdMatch($password, $rpassword) {
    
    $result;
    if ($password !== $rpassword) {
        
        $result = true;
        
    } 
    
    else {
        $result = false;
    }
    
    return $result;
    
}
function uidExists($conn, $username) {
    
    $sql = "SELECT * FROM users WHERE useruid = ?;"; 
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup-client.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $username);
    
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } 
    else {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $mname, $email, $tel, $username, $password, $access) {
    
    $sql = "INSERT INTO users (userfname, userlname, usermname, useremail, usertel, useruid, userpwd, useraccess) VALUES (?, ?, ?, ?, ?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup-client.php?error=stmtfailed");
        exit();
    }
    
    
    mysqli_stmt_bind_param($stmt, "ssssssss", $fname, $lname, $mname, $email, $tel, $username, $password, $access);
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../login.php?error=none");
        exit();
}








function emptyInputLogin($username, $password) {
    
    $result;
    if (empty($username) || empty($password)) {
        
        $result = true;
        
    }
    
    else {
        $result = false;
    }
    
    return $result;
    
}



function loginUser($conn, $username, $password) {
    $uidExists = uidExists($conn, $username);
    
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
   if($uidExists["userpwd"] != $password) {
        header("location: ../login.php?error=wronglogin");
        exit();
   }
    else if ($uidExists["userpwd"] === $password) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["userfname"] = $uidExists["userfname"];
        $_SESSION["userlname"] = $uidExists["userlname"];
        $_SESSION["usermname"] = $uidExists["usermname"];
        $_SESSION["useremail"] = $uidExists["useremail"];
        $_SESSION["usertel"] = $uidExists["usertel"];
        $_SESSION["useruid"] = $uidExists["useruid"];
        $_SESSION["userpwd"] = $uidExists["userpwd"];
        $_SESSION["useraccess"] = $uidExists["useraccess"];
         header("location: ../user.php");
        exit();
    }
}








function emptyInputForum($question, $answer) {
    $result;
    if (empty($question) || empty($answer)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createForum($conn, $question, $answer) {
    
    $sql = "INSERT INTO forum (question, answer) VALUES (?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user.php?error=stmtfailed");
        exit();
    }
    
    
    mysqli_stmt_bind_param($stmt, "ss", $question, $answer);
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../user.php?ferror=none");
        exit();
}






function emptyInputEvent($subject, $content) {
    $result;
    if (empty($subject) || empty($content)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createEvent($conn, $subject, $content) {
    
    $sql = "INSERT INTO event (subject, content) VALUES (?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user.php?error=stmtfailed");
        exit();
    }
    
    
    mysqli_stmt_bind_param($stmt, "ss", $subject, $content);
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../user.php?eerror=none");
        exit();
}
