

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
          <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> LOUOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<section>       

<div class="container">


<table class="table" style="margin-top: 20px">
   <tr>
      <th>Id</th>
      <th>prouct_name</th>
      <th>prouct_price</th>
      <th>prouct_image</th>
      
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost","root","","restaurent");
    if ($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
    }
    $sql = "SELECT  id, product_name, product_price, product_image  from kidstb ";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while($row = $result-> fetch_assoc()){ 
            echo "<tr><td>". $row["id"] ."</td><td>". $row["product_name"] ."</td><td>". $row["product_price"] ."</td><td>". $row["product_image"] ."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 result";
}

$conn-> close();
      
?> 
</table>
</body>
</html>
    