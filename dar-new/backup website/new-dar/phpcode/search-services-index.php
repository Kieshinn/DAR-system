<?php 

if (isset($_POST['reset'])) {

    header("location:../index.php");
    exit();
    
    } 

if (isset($_POST['servicesearch'])) {
 

                    
$subject = $_POST['servicename'];




if ($subject == "") {
    
    header("location:../index.php?searchservice=emptyinput");
    exit();

} else if ($subject != "") {

    header("location:../index.php?searchservice=$subject");
    exit();
   
}

} 