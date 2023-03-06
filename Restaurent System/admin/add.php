
<?php
    
      $db = mysqli_connect("localhost","root","","restaurent");
      if ($db-> connect_error) {
        die("Connection failed:". $db-> connect_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    
    <title>side menu bar</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/be43d1e0c7.js"></script>
    <script type="text/javascript">
    $query = "SELECT * from add_food ORDER BY name DESC";
    $res = mysqli_query($db, $query);
     if(!$res){
      echo "Can't retrieve data " . mysqli_error($db);
      exit;
    }
    return $res;
  }

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

section{
    background: url(images/bg.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
    transition: all .5s;
}

.book 					/* new book enter box */
		{
			width: 400px;
			margin: 0px auto; 
		}

		.form-control 		/* new book input fields changes  */
		{
			background-color: #211919;
			color: white;
			font-size: 17px;
			height: 28px;
			width: 300px;
			margin-left: 50px;
			border-radius: 10px;
		}

        .btn-default   /* add button  */
		{
			background-color: #9791dc;
			color: black;
			border-radius: 10px;
			width: 80px;
		}

		.boxn  			/*  add book box */
		{
			width: 400px;
			height: 400px;
			background-color: black;
			margin: auto;
			opacity: 0.6;
            border-radius: 18px;
            
        }
        
        .box1 input[type="submit"]        /* Login Button */
    {             
    margin: auto 38%;
    width: 110px;
    padding: 10px;
    border-radius: 10px;
    outline: 0px;
    background-color: #0c6996;
    border: 2px solid #00000a;
    color: aliceblue;
    font-size: 18px;
    }

    </style>

<script>

function startDictation() {

  if (window.hasOwnProperty('webkitSpeechRecognition')) {

    var recognition = new webkitSpeechRecognition();

    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.lang = "si-LK";  			// "en-US"	"si-LK"
    recognition.start();

    recognition.onresult = function (e) {
      document.getElementById('transcript').value = e.results[0][0].transcript;
      recognition.stop();
    };
    recognition.onerror = function(e) {
      recognition.stop();
    }
  }
}


 function startDictation2() {

  if (window.hasOwnProperty('webkitSpeechRecognition')) {

    var recognition = new webkitSpeechRecognition();

    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.lang = "si-LK";
    recognition.start();

    recognition.onresult = function (e) {
      document.getElementById('transcript2').value = e.results[0][0].transcript;
      recognition.stop();
    };
    recognition.onerror = function(e) {
      recognition.stop();
    }
  }
}

function startDictation3() {

  if (window.hasOwnProperty('webkitSpeechRecognition')) {

    var recognition = new webkitSpeechRecognition();

    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.lang = "si-LK";
    recognition.start();

    recognition.onresult = function (e) {
      document.getElementById('transcript3').value = e.results[0][0].transcript;
      recognition.stop();
    };
    recognition.onerror = function(e) {
      recognition.stop();
    }
  }
}

function startDictation4() {

  if (window.hasOwnProperty('webkitSpeechRecognition')) {

    var recognition = new webkitSpeechRecognition();

    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.lang = "si-LK";
    recognition.start();

    recognition.onresult = function (e) {
      document.getElementById('transcript4').value = e.results[0][0].transcript;
      recognition.stop();
    };
    recognition.onerror = function(e) {
      recognition.stop();
    }
  }
}

</script>

<script src="jquery-3.4.1.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script>
  $(document).ready(function(){
      $('#datepicker').datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true
      });
  })
</script>
<script>
  $(document).ready(function(){
      $('#datepicker2').datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true
      });
  })
</script>

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
  <li><a href="http://localhost/Restaurent%20System/admin/add.php"><i class="fas fa-hamburger"></i>Add foods</a></li>
  <li><a href="view.php"><i class="fas fa-edit"></i>View menus</a></li>
  <li><a href="http://localhost/Restaurent%20System/admin/view/resview.php"><i class="fas fa-utensils"></i>Rservation list</a></li>
  <li><a href="http://localhost/Restaurent%20System/admin/view/cartview.php"><i class="fas fa-cart-plus"></i>Cart list</a></li>
  <li><a href="http://localhost/Restaurent%20System/admin/view/feedback.php"><i class="fa fa-commenting" aria-hidden="true"></i>Feedback</a></li>
  <li><a href="http://localhost/Restaurent%20System/admin/view/loginview.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login-list</a></li>
  <li><a href="http://localhost/Restaurent%20System/index.php"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
  </ul>
</div>

<?php
if(isset($_POST['submit'])){ 

   // $id = $_POST['id'] ;
   $product_name = $_POST['product_name'] ;
   $product_price = $_POST['product_price'] ;
   $product_image = $_POST['product_image'] ;
   
   $query ="INSERT INTO producttb (product_name, product_price, product_image ) VALUES ('".$product_name."','".$product_price."','".$product_image."')";
   //$query = 'INSERT INTO producttb (product_name,product_price,   $query ="INSERT INTO feedback (product_name, product_price, product_image ) VALUES ()'

    $res = mysqli_query($db, $query);

    
  }
  
?>

<section>
<div class="container" style="text-align: center;">

			  	<h2 style="color: black;  font-family: Lucida Console; text-align: center; padding-top: 150px;"><b></b></h2>

				  	<div class="boxn"><br><br>
                      <h1 style="text-align: center; font-family: 'Roboto' , sans-serif; font-size: 25px; font-weight: bolder; color: white;"><i>Add New Foods </i></h1><br>
				  	<form class="book"  action="add.php" method="post"> 
                      <input type="text" name="product_name" id="transcript" class="form-control" placeholder="food Name" required=""><br><br>
                      <input type="text" name="product_price" id="transcript" class="form-control" placeholder="Description" required=""><br><br>
                      <input type="file" name="product_image" class="form-control" placeholder="upload a photo" required=""><br><br> 
                      <button class="btn btn-default" type="submit" name="submit"><b>Add</b></button>
                          
				  	</form>
</section>
    
</body>
</html>