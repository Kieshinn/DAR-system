<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {


        echo "<script>
        alert('Fill in all fields!');
      </script>";


    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<script>
        alert('Your Email is invalid!');
      </script>";
    }
    
    else if ($_GET["error"] == "passworddontmatch") {
        echo "<script>
        alert('Your username is already taken!');
      </script>";
    
    }
    else if ($_GET["error"] == "passworddontmatch") {
        echo "<script>
        alert('Your password does'nt match!');
      </script>";
    }
    else if ($_GET["error"] == "none") {
        echo "<script>
        alert('Successfully signed up!');
      </script>";
    }
  
}
