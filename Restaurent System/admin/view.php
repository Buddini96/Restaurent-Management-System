<?php
     session_start();
     include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>view</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/be43d1e0c7.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    
 </script>
 <style>
 body{
  padding: 0;
  margin: 0;
      
 }
section{

}

#img {
  display:block;

}

nav{

}
</style>
</head>
<body> 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <ul>
      <div class="navbar-brand" >Online Restaurent Management System </div>
      
    </div>
  </ul>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li ><a href="http://localhost/Restaurent%20System/index.php#"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
       <li><a href="add.php"><span class="fas fa-qrcode"></span> DASHBOARD</a></li>
          <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> LOUOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<section>       

<div class="container">
  <?php
if(isset($_POST['submit'])){
   }
   $query = "SELECT * from add_food ORDER BY id ASC";
    $res = mysqli_query($db, $query);
   
    function getcatName($db, $id){
      $query = "SELECT id FROM add_food WHERE id = '$id'";
      $res = mysqli_query($db, $query);
  
      $row = mysqli_fetch_assoc($res);
      return $row['Food_name'];
      
    }
    
?>


<table class="table" style="margin-top: 20px">
   <tr>
      <th>Id</th>
      <th>Food_name</th>
      <th>Description</th>
      <th>Category</th>
      <th>Price</th>
      <th>image</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <?php
    {
      while($row = mysqli_fetch_assoc($res)){ 

    ?> 
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['food_name']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['image']; ?></td>
       <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
      
    </tr>
      <?php  }
  if(!$res){
    echo "Can't retrieve data " . mysqli_error($db);
    exit;
  }
  if(mysqli_num_rows($res) == 0){
    echo " Something wrong! check again";
    exit;
  }

  
?>

</table>

<?php } ?>
</section>