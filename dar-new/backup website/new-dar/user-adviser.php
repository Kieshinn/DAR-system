


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="adviser.css" />
    <link rel="stylesheet" href="responsive.css" />
    <title>Adviser</title>
</head>

<body>



<?php include 'includes/adviser/nav-adviser.php';
    ?>


    <div class="blocker"></div>
    

    <div id="forum"></div>
        <?php include 'includes/adviser/event.php';
        ?>
    
    <div class="blocker"></div>



    <section>


        <div id="aservices"></div>
        <?php include 'includes/adviser/add-services.php';
    ?>






        <div id="services"></div>
        <?php 
        
        
        include 'includes/adviser/adviser-services.php';
    ?>






        <div id="application"></div>
        <?php include 'includes/adviser/application.php';
    ?>




        <div id="forum"></div>
        <?php include 'includes/adviser/forum.php';
    ?>





        <hr style="margin: auto;" width="90%" />

        <div id="contact"></div>
        <?php include 'includes/index/contact.php';
    ?>



    </section>









    <?php include 'includes/index/footer.php';
    ?>




    



 <!-- script for modal services -->
 <script>
        // Get the modal
        var modala = document.getElementById("myModala");

        // Get the button that opens the modal
        var btna = document.getElementById("myBtna");

        // Get the <span> element that closes the modal
        var spana = document.getElementsByClassName("closea")[0];

        // When the user clicks the button, open the modal 
        btna.onclick = function() {
            modala.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spana.onclick = function() {
            modala.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modala) {
                modala.style.display = "none";
            }
        }
    </script>
  

    <!-- script for modal services -->
    <script>
        // Get the modal
        var modalf = document.getElementById("myModalf");

        // Get the button that opens the modal
        var btnf = document.getElementById("myBtnf");

        // Get the <span> element that closes the modal
        var spanf = document.getElementsByClassName("closef")[0];

        // When the user clicks the button, open the modal 
        btnf.onclick = function () {
            modalf.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanf.onclick = function () {
            modalf.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function (event) {
        //     if (event.target == modalf) {
        //         modalf.style.display = "none";
        //     }
        // }
    </script>
    <!-- script for modal services -->

    <!-- script for modal services -->
 <script>
        // Get the modal
        var modale = document.getElementById("myModale");

        // Get the button that opens the modal
        var btne = document.getElementById("myBtne");

        // Get the <span> element that closes the modal
        var spane = document.getElementsByClassName("closee")[0];

        // When the user clicks the button, open the modal 
        btne.onclick = function() {
            modale.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spane.onclick = function() {
            modale.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == modale) {
        //         modale.style.display = "none";
        //     }
        // }
    </script>

</body>

</html>