<?php
  session_start(); 
  include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Restaurent Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
 </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Online Restaurent Management System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li class=""><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
      <li><a href="admin/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <ul class="dropdown-menu">
          <li><a href="admin/admin-login.php">Admin-Login</a></li>
          <li><a href="customer/customer-login.php">Customer-Login</a></li>
        </ul>
        </li>
    </div>
</nav>

<div class="container">
  <?php
if(isset($_POST['submit'])){
   }
   $query = "SELECT * from reservation ORDER BY isbn ASC";
    $res = mysqli_query($db, $query);
   

?>


<table class="table" style="margin-top: 20px">
   <tr>
      <th>Id</th>
      <th>Name</th>
      <th>E-mail</th>
      <th>Date</th>
      <th>Time</th>
      <th>Peoples</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <?php
    {
        while($row = mysqli_fetch_assoc($res)){ 

            ?> 
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['peoples']; ?></td>
      <td><a href="admin_edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
      <td><a href="admin_delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php } 
  if(!$res){
      echo "Can't retrieve data " . mysqli_error($db);
      exit;
    }
    if(mysqli_num_rows($res) == 0){
      echo "Empty foods ! Something wrong! check again";
      exit;
    }

    
  ?>
  
  </table>
  <?php } ?>