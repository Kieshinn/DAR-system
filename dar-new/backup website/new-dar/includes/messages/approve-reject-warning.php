<?php

if (isset($_GET["application"])) {
    if ($_GET["application"] == "approve") {

      echo "<script> alert('Successfully approved!');window.location='user.php#application'</script>";
        


    }
    else if ($_GET["application"] == "reject") {
      echo "<script> alert('Successfully rejected!');window.location='user.php#application'</script>";
    }
    
    
  
}