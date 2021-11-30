<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
    <title>DAR</title>
</head>

<body>


    <?php include 'includes/index/index-nav.php';
    ?>

    <div class="blocker"></div>
    <header>

        <?php include 'includes/index/bimg.php';
        ?>

    </header>

    <div class="blocker"></div>



    <section>



        <div id="about"></div>
        <?php include 'includes/index/about.php';
        ?>



        <div id="services"></div>
        <?php 
        
        
        include 'includes/index/all-services.php';
        ?>




        <hr style="margin: auto;" width="90%" />

        

        <div id="event"></div>
        <?php include 'includes/index/all-event.php';
        ?>



<hr style="margin: auto;" width="90%" />

        <div id="forum"></div>
        <?php include 'includes/index/all-forum.php';
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
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


</body>

</html>