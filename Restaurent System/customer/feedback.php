<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style1.css" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<meta charset="utf-8">
	<meta name="viewport"  content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
    	body
    	{
    		background-image: url(images/book1.jpg);
    	}
    	.wrapper        /* transparent color area */
    	{	
    		padding: 10px;
    		margin: -20px auto;
    		width: 900px;
    		height: 603px;
    		background-color: black;
    		opacity: 0.8;
    		color: white;
    	}

    	.form-control 		/* comment section properties */
    	{
    		height: 50px;
    		width: 60%;
    	}

    	.wrapper input[type="submit"]  	/* submit button */
    	{	
    		   border: 0;
    		   margin: auto 25%;
			   width: 100px;
			   display: block;
			   padding: 10px;
			   border-radius: 10px;
			   padding: 8px 4px;
			   background-color: none;
			   border: 2px solid #19B5FE;
			   outline: none;
			   transition: 0.35s;
			   color: black;
			   font-size: 18px;
			   cursor: pointer;
			   text-align: center;
    	}

    	.wrapper input[type="submit"] 		/* comment button */
    	{
    		background: #87D37C; 
    	}

    	.scroll			/* scroll the comment section */
    	{
    		width: 100%;
    		height: 350px;
    		overflow: auto;
    	}

    </style>
</head>
<body>
	<div class="wrapper">
		<div style="margin-top: 25px;">
			<h4><i>If you have any suggesions or questions please comment below.</i></h4>
			<form style="" action="" method="post">	
				<input class="form-control" type="text" name="comment" placeholder="Write Something ..." required=""; style="font-size: 17px;"><br>
				<input class="btn btn-default" type="submit" name="submit" value="Comment">
			</form>
		
	
<br><br>
	<div class="scroll">
		<?php
			if (isset($_POST['submit'])) 
			{
				if(isset($_SESSION['login_user']))
				{
					$sql="INSERT INTO `comments` VALUES('', 'Admin','$_POST[comment]');";		/* Comments send to the database */
					if(mysqli_query($db,$sql))
					{
						$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";	/* makes decending order of comments */ 
						$res=mysqli_query($db,$q);

						echo "<table class='table table-bordered'>";
						while ($row=mysqli_fetch_assoc($res)) 
						{
							echo "<tr>";
								echo "<td>"; echo $row['username'];  echo "</td>";
								echo "<td>"; echo $row['comment'];  echo "</td>";		/* create comments table */
							echo "</tr>";
						}
					}
				}

				else
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
						$res=mysqli_query($db,$q);

						echo "<table class='table table-bordered'>";
						while ($row=mysqli_fetch_assoc($res)) 
						{
							echo "<tr>";
								echo "<td>"; echo $row['username'];  echo "</td>";
								echo "<td>"; echo $row['comment'];  echo "</td>";
							echo "</tr>";
						}

					?>
						<script type="text/javascript">
							alert("Please Login to comment there...!");
						</script>
					<?php
				}
			}
		?>	
	</div>
	</div>
	</div>
</body>
</html>