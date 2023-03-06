<?php 
  session_start();
  include "index.php";
  include "cart.php";
 

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    
    <title>side menu bar</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/be43d1e0c7.js"></script>
    <script type="text/javascript">
   

  </script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Tangerine');

        .srch
		{
			padding-left: 1085px;
        }
        
body{
    font-family: 'Roboto' , sans-serif;
  } 

  *{
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;
  }

  .sidebar{
      position: fixed;
      left: -250px;
      width: 250px;
      height: 100%;
      background: #042331;
      transition: all .5s ease;
  }

  .sidebar header{
      font-size: 22px;
      color: white;
      text-align: center;
      line-height: 70px;
      background: #063146;
      user-select: none;
  }

  .sidebar ul a{
      display: block;
      height: 100%;
      width: 100%;
      line-height: 65px;
      font-size: 20px;
      color: white;
      padding-left: 40px;
      box-sizing: border-box;
      border-top: 1px solid rgba(255,255,255,.1);
      border-bottom: 1px solid black;
      transition: .4s;
  }

  ul li:hover a{
      padding-left: 50px;  
  }

  .sidebar ul a i{
      margin-right: 16px;
  }

  #check{
      display: none;  
  }

  label #btn, label #cancel{
      position: absolute;
      cursor: pointer;
      background: #042331;
      border-radius: 3px;
  }

  label #btn{
      left: 40px;
      top: 25px;
      font-size: 35px;
      color: white;
      padding: 6px 12px;
      transition: all .5s;
  }

  label #cancel{
      z-index: 1111;
      left: -195px;
      top: 17px;
      font-size: 30px;
      color: #0a5275;
      padding: 4px 9px;
      transition: all .5s ease;
  }

  #check:checked ~ .sidebar{
      left: 0;
  } 

  #check:checked ~ label #btn{
    left: 250px;
    opacity: 0;
    pointer-events: none;
} 

#check:checked ~ label #cancel{
    left: 195px;
}

#check:checked ~ section{
    margin-left: 250px;
}

.section{
    background: url(customer/images/b.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
    transition: all .5s;
}

    </style>



</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

<div class="sidebar">
  <header>Open</header>
  <ul>
  <li><a href="add.php"><i class="fas fa-hamburger"></i>Main Dishes</a></li>
  <li><a href="view.php"><i class="fas fa-edit"></i>View menus</a></li>
  <li><a href="reservation.php"><i class="fas fa-utensils"></i>Rservation list</a></li>
  <li><a href=""><i class="fas fa-cart-plus"></i>Cart list</a></li>
  <li><a href="http://localhost/Restaurent%20System/cushome.php"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
  </ul>
</div>

<section>

<?php require_once ("php/header.php"); ?>
<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>
        </div>
</div>
</section>
    
</body>
</html>