<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<style type="text/css">
		body
		{
			height: 650px;
			background-color: black;     /* after the password updated background */ 
			background-image: url("images/pw.jpg"); 
			background-size: cover;
			background-repeat:  no-repeat;
		}

		.wrapper 				/*  password reset box property  */ 
		{
			width: 400px;
			height: 400px;
			margin: 100px auto;
			background-color: black;
			opacity: 0.75;
			padding: 15px 15px;
		}
		.form-control 				/* input fields width */
		{
			width: 300px;
		}

		.wrapper input
		{
			background: transparent;
			color: white;
			font-size: 16px;
		}

		.wrapper input[type="submit"] 
		{
			margin-left: 120px;
			border-radius: 10px; 
			background-color: #502f1c;
			color: white;
		}

	</style>
</head>
<body>
	<div class="wrapper"> 		<!-- password reset box  --> 
		<div style="text-align: center;">
		<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console; color: #6df5e3; padding-top: 20px;"> <i>Reset Your Password </i></h1>
		</div>
		<div style="padding-left: 30px;">
			<form action="" method="post">
				<input type="text" name="username" class="form-control" placeholder="User Name" required=""><br>
				<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
				<input type="password" name="password" class="form-control" placeholder="New Password" required=""><br>
				<input class="btn btn-default" type="submit" name="submit" value="Update">
			</form>
		</div>
	</div>
	<?php
		if(isset($_POST['submit']))
		{
			$password = mysqli_real_escape_string($db,$_POST["password"]);
			$password = md5($password);

			if(mysqli_query($db,"UPDATE admin SET password='$password' WHERE username='$_POST[username]' AND email='$_POST[email]' ; "))
			{
				?>
					<script type="text/javascript">
								alert("The Password Updated Successfully.");
								window.location="admin-login.php"
					</script>
				<?php 
			}
		}
	?>
</body>  
</html>