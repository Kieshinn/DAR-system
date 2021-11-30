<!DOCTYPE html>

<head>
	<title>Adviser - Sign up</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="registration.css" />
	<link rel="stylesheet" href="responsive.css" />

</head>

<body>
	<img src="assets/images/banner.jpg" style="width:100%">
	<div class="container">

		<div class="form-wrapper">
			<form action="phpcode/signupa.inc.php" method="post">




				<div class="row">
					<div class="col-25">
						<label>First Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="fname" placeholder="Your Name" autocomplete="off" />
					</div>
				</div>



				<div class="row">
					<div class="col-25">
						<label>Last Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="lname" placeholder="Your Last Name" autocomplete="off" />
					</div>
				</div>




				<div class="row">
					<div class="col-25">
						<label>Middle Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="mname" placeholder="Your Middle Name" autocomplete="off" />
					</div>
				</div>




				<div class="row">
					<div class="col-25">
						<label>E-mail</label>
					</div>
					<div class="col-75">
						<input type="email" name="email" placeholder="sample@host.com" autocomplete="off" />
					</div>
				</div>


				<div class="row">
					<div class="col-25">
						<label>Cellphone No.</label>
					</div>
					<div class="col-75">
						<input type="text" id="telephone" name="tel" placeholder="09123123123" maxlength="11" onkeypress="return restrictAlphabets(event)" autocomplete="off" />
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Username</label>
					</div>
					<div class="col-75">
						<input type="text" name="username" placeholder="Your Username" autocomplete="off" />
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Password</label>
					</div>
					<div class="col-75">
						<input type="password" name="password" placeholder="Password" autocomplete="off" />
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Repeat Password</label>
					</div>
					<div class="col-75">
						<input type="password" name="rpassword" placeholder="Repeat you password" autocomplete="off" />
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Position</label>
					</div>
					<div class="col-75">
						<select name="access">
							<option value="ADVISER">Adviser</option>
						</select>
					</div>
				</div>


				<br />
				<div class="row">

					<input type="submit" name="signup" value="Signup">
				</div>
			</form>
		</div>
	</div>



	<?php
	include 'includes/messages/signup-warnings.php';
	?>
	<?php
	include 'includes/registration/rfooter.php';
	?>


</body>

</html>