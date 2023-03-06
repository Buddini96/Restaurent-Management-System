<?php
	include ("connection.php");
	include ("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport"  content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style type="text/css">
    	section 
    	{
    		margin-top: -20px;
    	}
    </style>

     <script type="text/javascript">  // To first letter convert to upper case in username
	jQuery.noConflict();
	jQuery(document).ready(function($) {
	    $('.form-control1').keyup(function(event) {
	        var textBox = event.target;
	        var start = textBox.selectionStart;
	        var end = textBox.selectionEnd;
	        textBox.value = textBox.value.charAt(0).toUpperCase() + textBox.value.slice(1).toLowerCase();
	        textBox.setSelectionRange(start, end); 
	    });
	});
	</script>

	<script type="text/javascript">  			// To verify entered email 
		function validateEmail(value) {
	  var input = document.createElement('input');

	  input.type = 'email';
	  input.required = true;
	  input.value = value;

	  return typeof input.checkValidity === 'function' ? input.checkValidity() : /\S+@\S+\.\S+/.test(value);
	}
	</script>

</head>
	<body>
		
			<section>
				<div class="reg_img">
					<br>
					<div class="box2">
						<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console; color: #ffff00; padding-top: 10px;">Restaurent Management System </h1><br>
						<h1 style="text-align: center; font-size: 25px; color: #ccffff;"><i>New Admin Registration </i></h1>

						<form name="Registration" action="" method="post"> 
							<br><br>
							<div class="Login">
							<input class="form-control" type="text" name="firstname" placeholder="First Name" required=""> <br><br>
							<input class="form-control" type="text" name="lastname" placeholder="Last Name" required=""> <br><br>
							<input class="form-control1" type="text" name="username" placeholder="Username" required=""> <br><br><br>
							<input class="form-control" type="password" name="password" placeholder="Password" pattern=".{5,}" title="Enter five or more characters" required=""> <br><br>
							<input class="form-control" type="email" name="email" placeholder="me@example.com" required=""> <br><br>
							<input class="form-control" type="text" name="contact" placeholder="Phone No" pattern=".{10}" title="Enter a correct phone number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required=""> <br><br><br>
							<input class="btn btn-default" type="submit" name="submit" value="Sign Up"></div>
						</form>
							
					</div>
				</div>
			</section>  

			<?php

				if (isset($_POST['submit'])) 
				{
					$count=0;
					$sql="SELECT username, password from `admin`";		/* not allowed to enter same type user name */
					$res=mysqli_query($db,$sql);

					while($row=mysqli_fetch_assoc($res))
					{
						if($row['username']==$_POST['username'])
						{
							$count=$count+1;
						}

						if($row['password']==md5($_POST['password']))
						{
							$count=$count+1;
						}
					}
					if($count==0)								/* Registration details enter into the data base */ 
						{
							$firstname = mysqli_real_escape_string($db,$_POST["firstname"]);
							$lastname = mysqli_real_escape_string($db,$_POST["lastname"]);
							$username = mysqli_real_escape_string($db,$_POST["username"]);
							$password = mysqli_real_escape_string($db,$_POST["password"]);
							$password = md5($password); 		/* 	Password encriptiobn with md5  */ 
							$email = mysqli_real_escape_string($db,$_POST["email"]);
							$contact = mysqli_real_escape_string($db,$_POST["contact"]);

							mysqli_query($db,"INSERT INTO `admin` VALUES('', '$firstname', '$lastname', '$username', '$password', '$email', '$contact ', 'profile.jpg');");
								

							?>
								<script type="text/javascript">
									alert("Registration successful");
									window.location="admin-login.php"
								</script>
							<?php
						}
					else
						{

							?>
								<script type="text/javascript">
									alert("The username or password already exist.");
								</script>
							<?php

						}

		}

	?>
	
	</body>
</html> 