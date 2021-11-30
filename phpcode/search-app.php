<?php 

if (isset($_POST['reset'])) {

    header("location:../user.php");
    exit();
    
    } 

if (isset($_POST['appsearch'])) {


                    
$subject = $_POST['appname'];




if ($subject == "") {
    
    header("location:../user.php?searchapp=emptyinput");
    exit();

} else if ($subject != "") {

    header("location:../user.php?searchapp=$subject");
    exit();
   
}

} 