<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Main cart</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

 <style>
        @import url("https://fonts.googleapis.com/css?family=Acme|Lobster|Patua+One|Rubik|Sniglet");
* {
  box-sizing: border-box;
}

/* Section Team */

.section-4 .container h1 {
  font-size: 6vmin;
  padding-top: 14vmin;
}

.section-4 .team {
  padding: 10vmin 4vmin;
}

.section-4 .card {
  width: 22em;
  margin-top: 10vmin;
}

.section-4 .card .card-text {
  padding: 0.5em;
}

.section-4 .card-body > a {
  font-size: 1.5em;
}

.section-4 .carousel-item {
  padding-left: 3rem;
}

.border-radius {
  border-radius: 340px;
  width: 60%;
}

    </style>
<body>
 
    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a href="index.php" class="navbar-brand">
              <h3 class="px-5">
                  <i class="fas fa-shopping-basket"></i> Menu 
              </h3>
          </a>
          <button class="navbar-toggler"
              type="button"
                  data-toggle="collapse"
                  data-target = "#navbarNavAltMarkup"
                  aria-controls="navbarNavAltMarkup"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
          >
              <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="mr-auto"></div>
              <div class="navbar-nav">
                  <a href="cart.php" class="nav-item nav-link active">
                      <h5 class="px-5 cart">
                          <i class="fas fa-shopping-cart"></i> Cart
                      
                          
                      </h5>
                  </a>
              </div>
          </div>
  
      </nav>
  

    <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">When you are here..You are Family!</h1><br>
        <p class="text-secondary">HungryManiya</p>
      </div> 
      <div class="team row p-0 m-0">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/3.jpg" class="img-fluid " alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Main dishes</h3>
                  <p class="card-text">
                  HungryManiya Menu Special  <br>
                    We know your taste !               
                  </p>
                  <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/main_dishes/index.php" class="text-secondary text-decoration-none">Main Dishes</a>
                  
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="./assets/1.jpg" class="img-fluid " alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Pizza</h3>
                        <p class="card-text">
                        HungryManiya Menu Special  <br>
                      We know your taste !  
                        </p>
                        <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/pizza/index.php" class="text-secondary text-decoration-none">Pizza</a>
                        
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="./assets/b.jpg" class="img-fluid " alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Appetizers</h3>
                        <p class="card-text">
                        HungryManiya Menu Special  <br>
                    We know your taste !  
                        </p>
                        <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/appetizers/index.php" class="text-secondary text-decoration-none">Appetizers</a>
                        
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/11.jpg" class="img-fluid " alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Drinks</h3>
                  <p class="card-text">
                  HungryManiya Menu Special  <br>
                    We know your taste ! 
                  </p>
                  <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/drinks/index.php" class="text-secondary text-decoration-none">Drinks</a>
                  
                </div>
              </div>
        </div>
      </div>

      <div class="team row p-0">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/kid1.jpg" class="img-fluid " alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Kids Special</h3>
                  <p class="card-text">
                  HungryManiya Menu Special  <br>
                    We know your taste ! 
                  </p>
                  <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/Kids%20special/index.php" class="text-secondary text-decoration-none">Kids special</a>
                  
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="./assets/2.jpg" class="img-fluid " alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Desserts</h3>
                        <p class="card-text">
                        HungryManiya Menu Special  <br>
                    We know your taste ! 
                        </p>
                        <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/desserts/index.php" class="text-secondary text-decoration-none">Desserts</a>
                        
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="./assets/5.jpg" class="img-fluid " alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Desserts</h3>
                        <p class="card-text">
                        HungryManiya Menu Special  <br>
                    We know your taste ! 
                        </p>
                        <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/desserts/index.php" class="text-secondary text-decoration-none">Desserts</a>
                        
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/a.jpg" class="img-fluid " alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Pizza</h3>
                  <p class="card-text">
                  HungryManiya Menu Special  <br>
                    We know your taste ! 
                  </p>
                  <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/pizza/index.php" class="text-secondary text-decoration-none">Pizza</a>
                  
                </div>
              </div>
        </div>
      </div>
      <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/t4.jpg" class="img-fluid " alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Today's Special</h3>
                  <p class="card-text">
                  HungryManiya Menu Special  <br>
                    We know your taste !               
                  </p>
                  <a href="http://localhost/Restaurent%20System/customer/Shopping_cart/todays%20special/index.php" class="text-secondary text-decoration-none">Today's Special</a>
                  
                </div>
              </div>
        </div>
    </section>
  </main>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>