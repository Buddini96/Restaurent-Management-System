<?php
include "navbar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" type="text/css" href="alert.css">
  <link rel="stylesheet" media="screen and (min-width: 900px)" href="widescreen.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="style1.css">
    <script src="https://kit.fontawesome.com/be43d1e0c7.js" crossorigin="anonymous"></script>
</head>
<body> 


   <header>
         
      <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Online Restaurent mangement System</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
     <div class="mr-auto"></div>
       <ul class="navbar-nav">
         <li class="nav-item active ">
           <a class="nav-link active" href="Home.php">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="menu.php">Menu</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="gallery.php">Gallery</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="admin-login.php">Admin Login</a>
           </li>
         <li class="nav-item">
           <a class="nav-link active" href="customer-login.php"> Customer Login</a>
           </li>
       <ul class="nav nav-pills">
     <li class="nav-item">
       <a class="nav-link active" href="Reservation.php ">Book a Table</a>
     </li>
       </ul>
     </div>
     </div>
     </div>
   </nav>
      

    
      </div>
    
   </header>
   <article>
   
   <section id="img">   <!-- Background image included -->
		<div  class="sec_img"><br>
    <div id="title" style="color: #ffffff; text-align: center; font-size: 50px;"><i><br><marquee width = "100%">When you are here you're family</marquee></i></div>
         <div class="top">
			 	<font face="MATURASC" style="text-align: center; font-size: 30px; word-spacing: 15px;"><h1>WELCOME TO HungryManiya </h1></font>
			 	<h1 style="text-align: center; font-size: 27px;">Opens at: 09:00 AM</h1>
			 	<h1 style="text-align: center; font-size: 27px">Closes at: 10:00 PM</h1>
			 	<div id="tt" align="center">
		 	</div>
         </div>
        </div>
    </div>
    </div>
</article>


  <footer>
  <div class="container-fluid p-0 text-center">
          <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1>HungryManiya</h1>
                <p class="text-muted"></p>Speak with the Taste.. Now that yours Taste...Have grown up.</p>
                <h4>CONTACT INFORMATION</h4>
                <div class=" platform row">
                    <div class="col-md-2 col-md-4 text right">
                        <div class="phone shadow-lg">
                          <div class="d-flex flex-row justify-content-center">
                            <i class="fas fa-phone-volume fa-3x py-2 pr-3 "></i>
                            <div class="text text-left">
                              <h3 class="pt-1 m-0">Phone</h3>
                              <p class="p-0 m-0">0768861459</p>  
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-4 text-left">
                            <div class="Address shadow-lg">
                          <div class="d-flex flex-row justify-content-center">
                            <i class="far fa-address-card fa-3x py-2 pr-3"></i>
                            <div class="text text-left">
                              <h3 class="pt-1 m-0">Address</h3>
                              <p class="p-0 m-0">72/A,kingsley road,colombo7</p>  
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-4 text-center">
                        <div class="E-mail shadow-lg">
                      <div class="d-flex flex-row justify-content-center">
                        <i class="far fa-envelope fa-3x py-2 pr-3"></i>
                        <div class="text text-left">
                          <h3 class="pt-1 m-0">E-mail</h3>
                          <p class="p-0 m-0">hungrymaniya.com</p>  
                        </div>
                      </div>
                    </div>
                    <br>
                        <div class="col-md-6 col-sm-12 text center"></div>
                    <div class="col-md-6 col-sm-12 text left"></div>
                </div>
                <p class="pt-4 text-muted">
                    <div class="container-fluid p-0 text-center">
                        <div class="row">
                          <div class="col-md-12 col-sm-12">
                              
                            <h4 class="text-light text-muted">SHARE THE TASTE</h4>
                              <p class="text-muted Let us be social"></p>

                              <br>
                              <div class="column">
                                <a href="http://facebook.com" target="blank" class="fa fa-facebook"></a>
                                <a href="http://instagram.com" target="blank" class="fa fa-instagram"></a>
                                <a href="http://twitter.com" target="blank" class="fa fa-twitter"></a>
                                <a href="http://youtube.com" target="blank" class="fa fa-youtube"></a>
                                </div>
</br>
                            
               
            </div>
   

          </div>   
        </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>