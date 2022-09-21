<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f15fbc3514.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
   session_start();
   $count = 0;
   if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
   }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand text-dark" href="/ecommerce-website"><i class="fa-solid fa-globe"></i> AllInOne.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/ecommerce-website"><i class="fa-solid fa-house-user"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php"><i class="fa-solid fa-phone"></i> Conatct Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-bag-shopping"></i>
                    Shop</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Mens</a>
                        <a class="dropdown-item" href="#">Womens</a>
                        <a class="dropdown-item" href="#">Kids</a>
                        <a class="dropdown-item" href="#">Electronics</a>
                        <a class="dropdown-item" href="#">Home</a>
                        <a class="dropdown-item" href="#">Beauty Products</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="viewCart.php" class="nav-link font-weight-bold text-white text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i> My
                        Cart(<?php echo $count; ?>)</a>
                </li>

            </ul>
            <div class="row">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                </form>
                
                  <a href="#" class="btn btn-outline-white ml-2 text-white font-weight-bold"><i class="fa-solid fa-user"></i> Hello,
                <?php 
                if(isset($_SESSION['user'])){
                echo $_SESSION['user'];
                echo"
                <a href='partials/logout-user.php' class='btn btn-outline-white ml-2 text-white font-weight-bold'><i class='fa-solid fa-arrow-right-to-bracket'></i> Logout</a>";
                }
                else{
                  echo "user";
                  echo"
                  <a href='partials/login-user.php' class='btn btn-outline-white ml-2 text-white font-weight-bold'><i class='fa-solid fa-arrow-right-to-bracket'></i> Login</a>
                  <a href='partials/signup.php' class='btn btn-outline-white mx-2 text-white font-weight-bold'><i class='fa-solid fa-user-plus'></i> Sign Up</a>";
                }
                ?>
                </a>
                  <!-- <a href="partials/login-user.php" class="btn btn-outline-white ml-2 text-white font-weight-bold"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a> -->
                  
                          
            </div>

        </div>
  </nav>
  <?php
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '
    <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>Success!</strong> You are successfully registered. Pls <strong>Login</strong> To Continue.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }
  ?>
</body>

</html>