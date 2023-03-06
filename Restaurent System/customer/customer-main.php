

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://kit.fontawesome.com/be43d1e0c7.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <style>


body {
    
}


.header,
.section{     
    overflow-x:hidden;
}


.slideshow { 
                                      
            margin-top: -200px ;            /* can change top margin of slideshow */
            margin-bottom: -200px ;                         /* can change bottom margin of slideshow */          
}

		

ul {
    color: white;
    text-decoration: none;
    font-size: 18px;
}
li a {
    color: white;
    text-decoration: none;
    font-size: 15px;
   
}
.navbar-nav {
      flex-direction: row;
      font-size:100%;
    }

    
#header {
   
    background-color: black;
}

.navbar-brand
{
  font-family: 'Roboto', sans-serif;
  color: White;
  font-size: larger;
 
}


</style>
 
</head>



<body>  
        <div class="container-fluid p-0 ">
        <header id="header">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"> 
                 <i class="fas fa-hamburger fa-3x mx-3"></i>
                Online Restaurent Managemrnt System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <div class="mr-auto"></div>  
                  <ul class="navbar-nav">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><i class="fas fa-home"></i>Home</a></li>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#"><i class="far fa-question-circle"></i>About Us</a></li>
        <ul class="nav navbar-nav">  
            <li class="active"><a href="http://localhost/Restaurent%20System/admin/feedback.php"><i class="far fa-comment-dots"></i></i>Feedback</a></li>
            <li><a href="reservation.php"><i class="fas fa-utensils"></i>Rservation</a></li>
            <li><a href="http://localhost/Restaurent%20System/customer/Shoping/index.php"><i class="fas fa-shopping-cart"></i>Cart</a></li>

            
        
        <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/Restaurent%20System/index.php"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
        
    </div>
</nav>



    
<div class="slideshow">
<img class="mySlides w3-animate-left" src="admin/images/gh.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="admin/images/S2.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="admin/images/R3.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="admin/images/photo-1517248135467-4c7edcad34c4.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="admin/images/up.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="admin/images/R2.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="admin/images/S5.jpg" style="width:100%">

  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<section>
<?php
	include "admin/footer.php";
?>
</section>
</body>
</html>
