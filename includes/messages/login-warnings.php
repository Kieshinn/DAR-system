<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {


        echo "<script>
        alert('Fill in all fields!');
      </script>";


    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<script>
        alert('Incorrect username or password!');
      </script>";
    }
    else if ($_GET["error"] == "none") {
      echo "<script>
      alert('Successfully Login!');
    </script>";
  }
    
    
  
}
