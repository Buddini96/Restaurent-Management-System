<?php
  session_start();  
  include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Book Shop Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/be43d1e0c7.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    
  function getAll($db){
    $query = "SELECT * from restaurent ORDER BY id DESC";
    $res = mysqli_query($db, $query);
    if(!$res){
      echo "Can't retrieve data " . mysqli_error($db);
      exit;
    }
    return $res;
  }

  </script>

<style>
 body{
  padding: 0;
  margin: 0;
      
 }
section{
    background: url(admin/images/bg.jpg) no-repeat;display:block;
    background-position: center;
    background-size: cover;
    height: 100vh;
    transition: all .5s;
    margin: 0;
    color: black;
      padding: 0;
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
       <li ><a href="admin.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
       <li><a href="add.php"><span class="fas fa-qrcode"></span> DASHBOARD</a></li>
          <li><a href="http://localhost/Restaurent%20System/index.php"><span class="glyphicon glyphicon-log-out"></span> LOUOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
  } else {
    echo "Empty query!";
    exit;
  }

  if(!isset($id)){
    echo "Empty id! check again!";
    exit;
  }

  // get food data
  $query = "SELECT * FROM add_food WHERE id = '$id'";
  $res = mysqli_query($db, $query);
  if(!$res){
    echo "Can't retrieve data " . mysqli_error($db);
    exit;
  }
  $row = mysqli_fetch_assoc($res);

?>

<div class="container">
  <h2>Add Foods</h2>
  <hr>

  <form class="form-horizontal" action="edit.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="id">Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id"  name="id" value="<?php echo $row['id'];?>" readOnly="true">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="book_title">Food name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="food_name" value="<?php echo $row['food_name'];?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="author">Description:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['description'];?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="catogery">Category:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="category" name="category" value="<?php echo $row['category'];?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="price">Price:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price'];?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="image">Upload a Photo:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image" name="image"  >
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="Save Change">Save Change</button>
      <button type="reset" class="btn btn-primary" name="reset">Cancle</button>
    </div>
  </div>
</form>
<br>
<a href="view.php" class="btn btn-success">Confirm</a>
</div>
 
</body>
</html>