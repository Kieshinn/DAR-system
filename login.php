<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="responsive.css" />
    <title>DAR Login</title>
    
</head>

<body>
    <div class="container">

        
            <div class="col-100">
                <img src="assets/images/webdev.png" width="100%">
            </div>
       <form action="phpcode/login.inc.php" method="post">
        <div class="wrapper">
            <p style="font-size:13px;">Sign in to your acoount</p>
            <div class="row">
                
                <div class="col-40">
                    
                    <input type="text" name="username" placeholder="Username" />
                </div>
                <div class="col-60">
                    <p>Welcome to SAIS-Davao online portal. This portal serves as an access for the SAIS-Davao Students
                        to
                        view
                        grades, class schedules, examination schedules and other school curricular activities.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="col-60">
                    <p>In order to protect your online account, logout and quit you web browser when you are done
                        accessing
                        the
                        service offered by this portal</p>
                </div>
            </div>




            <div class="row">
                <div class="col-40">
                    <input type="submit" name="login" value="Login">
                </div>
                <div class="col-60">

                    <p>Having problem with your login, don't hesitate to contact our IT support staff at (08) 226-3783
                        or
                        email
                        us at email@gmail.com.</p>
                        <p><a href="index.php" style="color: orange; text-decoration:none;">BACK</a></p>
                   
                </div>
            </div>
        </div>
        </form>

    </div>

    <?php 
        include 'includes/messages/login-warnings.php';
    ?>
</body>

</html>