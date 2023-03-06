
<html>
<head>
<title>updation</title>
</head>
<body>
    <center>
    <h1>upadtion</h1>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter ID"/><br/>
        <input type="text" name="food_name" placeholder="Enter Food-name"/><br/>
        <input type="text" name="description" placeholder="Enter Description"/><br/>
        <input type="text" name="category" placeholder="Enter Category"/><br/>
        <input type="text" name="price" placeholder="Enter Price"/><br/>
        <input type="file" name="image" placeholder="Enter image"/><br/>

        <input type="submit" name="update" value="Update Data"/>


    </form>
    </center>
</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'restaurent');

if(isset($_POST['update']))
  {
      $id = $_POST['id'];

      $query = "UPDATE 'add_food' SET food_name='$_POST[food_name]',description='$_POST[description]',category='$_POST[category]',price='$_POST[price]',image='$_POST[image]' where id='$_POST[id]'";
      $query_run = mysqli_query($connection,$query);

      if($query_run)
      {
          echo '<script type="text/javascript"> alert("Data Updated")</script>';
      }
      else{
        echo '<script type="text/javascript"> alert("Data not Updated")</script>';

      }
  }

?>
