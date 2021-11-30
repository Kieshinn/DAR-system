<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="client.css" />
    <link rel="stylesheet" href="responsive.css" />

    <title>Client</title>
</head>

<body>



    <?php include 'includes/client/nav-client.php';
    ?>

    <div class="blocker"></div>
    <header>

        <?php include 'includes/index/bimg.php';
        ?>

    </header>

    <div class="blocker"></div>



    <section>
        <div id="application"></div>
        <?php include 'includes/client/add-application.php';
    ?>







        <div id="services"></div>
        <?php include 'includes/client/all-services-client.php';
    ?>













        <div id="applicationapp"></div>
        <?php include 'includes/client/client-application.php';
    ?>





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







   


</body>

</html>