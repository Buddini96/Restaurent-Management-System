<?php
	include "connection.php";
	include "navbar.php"; 		/* session included in navbar.php */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
	<link rel="stylesheet" type="text/css" href="style.css" >
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<meta name="viewport"  content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/be43d1e0c7.js" crossorigin="anonymous"></script>



    <style type="text/css">
    	section 
    	{
    		margin-top: -20px;
    </style>
</head>


	<body>
			<section id="sec2">
				<div class="log_img">
					<br><br><br><br>			<!-- Space of Login box and navbar -->
					<div class="box1">
						<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console; color: #e4fb70; padding: 27px 15px;">Restaurent Management System </h1>
						<h1 style="text-align: center; font-size: 25px; color: white;">Admin Login </h1><br>

						<form name="login" action="" method="post">
							<div class="login">
							<input type="text" name="username" placeholder="User Name" required=""> <br><br>
							<input type="password" name="password" placeholder="Password" required=""> <br><br><br>
							<input class="btn btn-default" type="submit" name="submit" value="Login">

							</div>
						</form>
							<p style="color: white; padding-left: 15px;">
								<br>
								<a style="color: red;" href="update_password.php"><b>Forgot Password...?</b></a> &nbsp; &nbsp; &nbsp; &nbsp; Are you new member..? &nbsp; &nbsp; &nbsp; &nbsp;<a style="color: yellow;" href="registration.php">Sign Up </a>
							</p>
					</div>
			
			<?php 

				if(isset($_POST['submit']))
				{
					$count=0;			/* match the user name and password with database */
					$username = mysqli_real_escape_string($db,$_POST["username"]);
					$password = mysqli_real_escape_string($db,$_POST["password"]);
					$password = md5($password);

					$res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$username' && password='$password' ;");

					$row=mysqli_fetch_assoc($res); 	/* Take username and password */ 

					$count=mysqli_num_rows($res);

					if($count==0)         /* Check entered value has not  found within DB */
					{
						?>
							<!--
							<script type="text/javascript">
								alert("The username and password doesn't match.");
							</script>
						-->
						<div class="alert alert-danger" style="width: 600px; margin-left: 360px; background-color: #de1313; color: white; margin-bottom: -60px; margin: -50px auto;">					<!-- makes square shape alert message -->
							<strong><center>You entered invalid user name or password.</center></strong>
						</div>
						<?php 
					}
					else
					{
						/*------------------------------------if user name and password matches----------------------------*/

						$_SESSION['login_user']=$_POST['username'];    /* for loggin session 	*/
						$_SESSION['pic']= $row['pic'];

						?>
							<script type="text/javascript">
								window.location="add.php" 		/* after logged user is here  */
							</script>
						<?php 
					}
				}

			?>
			
				</div>		<!-- log-img div close -->
				
			</section>
	</body>
</html> 