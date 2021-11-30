<?php
if (isset($_POST["addforum"])) {
    $question = $_POST["question"];
    $answer = $_POST["answer"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputForum($question, $answer) !== false) {
        header("location:../user.php?ferror=emptyinput");
        exit();
    }
    createForum($conn, $question, $answer);
} else {
    header("location:../user.php");
    exit();
}