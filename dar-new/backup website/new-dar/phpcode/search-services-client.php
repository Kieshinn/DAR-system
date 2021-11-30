<?php 

if (isset($_POST['reset'])) {

    header("location:../user.php");
    exit();
    
    } 

if (isset($_POST['servicesearch'])) {


                    
$subject = $_POST['servicename'];

 


if ($subject == "") {
    
    header("location:../user.php?searchservice=emptyinput");
    exit();

} else if ($subject != "") {

    header("location:../user.php?searchservice=$subject");
    exit();
   
}

} 