<?php
  session_start();  
  include "connection.php";
?>
<?php
	$id = $_GET['id'];

	 function getAll($db){
    $query = "SELECT * from add_food ORDER BY id DESC";
    $res = mysqli_query($db, $query);
    if(!$res){
      echo "Can't retrieve data " . mysqli_error($db);
      exit;
    }
    return $res;
  }
	

	$query = "DELETE FROM add_food WHERE id = '$id'";
	$res = mysqli_query($db, $query);
	if(!$res){
		echo "delete data unsuccessfully " . mysqli_error($db);
		exit;
	}
	header("Location: view.php");
?>