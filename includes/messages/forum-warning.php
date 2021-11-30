<?php
if (isset($_GET["ferror"])) {
    if ($_GET["ferror"] == "emptyinput") {


        echo "<script>
        alert('Fill in all fields!!');
      </script>";


    }
    else if ($_GET["ferror"] == "none") {
        echo "<script>
        alert('Successfully Post!');
      </script>";
    }
    
    
  
}