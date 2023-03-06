<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customerin Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<style type="text/css">
		.srch
		{
			padding-left: 73%;				/* student search bar */ 
		}

		body 
		{
 			font-family: "Lato", sans-serif;
  			transition: background-color .5s;
		}

		.sidenav { 						/*  side navigation changes  */
		  height: 100%;
		  margin-top: 60px;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #222;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		}
  
		.sidenav a {
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		}

		.sidenav a:hover {
		  color: #f1f1f1;
		}

		.sidenav .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

		#mainm {
		  transition: margin-left .5s;
		  padding: 16px;
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}

		.img-circle
		{
			margin-left: 20px;
		}

		.h:hover
		{
			color: white;
			width: 300px;
			height: 50px;
			background-color: #2a97e0;
		}

	</style>

	</style>
</head>
<body style="background-color: #efeba0;">

	
	<!--________________________________________Search bar____________________________________-->

	<div class="container">
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input style="background-color: white; color: black;" class="form-control" type="text" name="search" placeholder="customer Username" required="">				<!-- search input field  -->
				<button style="background-color: #2a97e0;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			
		</form>

		<form class="navbar-form" method="post" name="form1"> 		
				
				<input class="form-control" type="text" name="username" placeholder="Enter Username" required="">				<!-- search input field  -->
				<button style="background-color: #f90606;" type="submit" name="submit1" class="btn btn-default"><b>Remove</b>	
				</button>
				
		</form>

	</div>

	<h2><center> REGISTERED Customer </center> </h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT id,firstname,lastname,username,email,contact FROM `customer` where username like '%$_POST[search]%' ");			/* query for search btn to search */

			if(mysqli_num_rows($q)==0)		/* data will not be found after searching */
			{
				echo "</br></br></br>";
				echo "<h2><b><i><center>";
				echo "Sorry..! No customer found with that user name. Try search again.";
				echo "</center></i></b></h2>";
			}
			else
			{
				echo "<table class='table table-bordered table-hover' >";	/* if the btn is pressed search within created table */
				echo "<tr style='background-color: #2a97e0;'>";

					//Table header
					echo "<th>";	echo "ID";	echo "</th>";
					echo "<th>";	echo "First Name";	echo "</th>";
					echo "<th>";	echo "Last Name";	echo "</th>";
					echo "<th>";	echo "Username";	echo "</th>";
					echo "<th>";	echo "Email";	echo "</th>";
					echo "<th>";	echo "Contact";	echo "</th>";
					
				echo "</tr>";

				while($row=mysqli_fetch_assoc($q))
				{
					echo "<tr>";
					echo "<th>"; echo $row['id']; echo "</th>";
					echo "<th>"; echo $row['firstname']; echo "</th>";
					echo "<th>"; echo $row['lastname']; echo "</th>";
					echo "<th>"; echo $row['username']; echo "</th>";
					echo "<th>"; echo $row['email']; echo "</th>";
					echo "<th>"; echo $row['contact']; echo "</th>";


					echo "</tr>";
				}
				echo "</table>";
			}
		}

		else 		/* if the search button is not pressed */
		{
				$res=mysqli_query($db,"SELECT id,firstname,lastname,username,email,contact FROM `customer` ;");			/* created table */	

				echo "<table class='table table-bordered table-hover' >";
				echo "<tr style='background-color: #2a97e0;'>";
					//Table header
					echo "<th>";	echo "ID";	echo "</th>";
					echo "<th>";	echo "First Name";	echo "</th>";
					echo "<th>";	echo "Last Name";	echo "</th>";
					echo "<th>";	echo "Username";	echo "</th>";
					echo "<th>";	echo "Email";	echo "</th>";
					echo "<th>";	echo "Contact";	echo "</th>";
				echo "</tr>";

				while($row=mysqli_fetch_assoc($res))
				{
					echo "<tr>";
					echo "<th>"; echo $row['id']; echo "</th>";
					echo "<th>"; echo $row['firstname']; echo "</th>";
					echo "<th>"; echo $row['lastname']; echo "</th>";
					echo "<th>"; echo $row['username']; echo "</th>";
					echo "<th>"; echo $row['email']; echo "</th>";
					echo "<th>"; echo $row['contact']; echo "</th>";

					echo "</tr>";
				}
				echo "</table>";
		}

	/* --------------------------------------- Delete button  -------------------------------------------------*/

		if (isset($_POST['submit1']))  
			{
				if(isset($_SESSION['login_user']))
				{
					mysqli_query($db,"DELETE from `customer` where username = '$_POST[username]' ;"); 		/*		Delete query   */

					?>
						<script type="text/javascript">
							alert("Removed Successfully.");
						</script>
					<?php
				}
				else
				{
					?>
						<script type="text/javascript">
								alert("Please Login First.");
						</script>
					<?php
				}
			}

	?>
</div>
</body>
</html>
