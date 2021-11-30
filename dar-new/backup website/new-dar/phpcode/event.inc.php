<?php
if (isset($_POST["addevent"])) {
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputEvent($subject, $content) !== false) {
        header("location:../user.php?eerror=emptyinput");
        exit();
    }
    createEvent($conn, $subject, $content);
} else {
    header("location:../user.php");
    exit();
}