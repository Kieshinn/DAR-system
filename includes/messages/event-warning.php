<?php
if (isset($_GET["eerror"])) {
    if ($_GET["eerror"] == "emptyinput") {


        echo "<script>
        alert('Fill in all fields!!');
      </script>";


    }
    else if ($_GET["eerror"] == "none") {
        echo "<script>
        alert('Successfully Post!');
      </script>";
    }
    
    
  
}