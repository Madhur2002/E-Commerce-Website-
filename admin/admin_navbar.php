<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f15fbc3514.js" crossorigin="anonymous"></script>
    <style>

      body{
        background-image: url("bgimg-2.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}
?>


<body>
<nav class="navbar navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand text-dark"><h1>Admin Pannel</h1></a>
    <span>
    <i class="fa-solid fa-user"></i>
    Hello <?php echo $_SESSION['admin']; ?>   |
    <i class="fa-solid fa-arrow-right-from-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-dark">Logout |</a>
    <a href="" class="text-decoration-none text-dark">Userpanel</a>
    </span>
  </div>
</nav>

<div>
  <h2 class="text-center">Our Tables</h2>
</div>
<div class="col-md-6 bg-dark text-center m-auto">
  <a href="uploadproducts-form.php" class="text-white text-decoration-none fs-4 fw-bold mr-3">Add Produts | </a>
  <a href="" class="text-white text-decoration-none fs-4 fw-bold mr-3">Users | </a>
  <a href="viewproducts-2.php" class="text-white text-decoration-none fs-4 fw-bold">View Your Products</a>
</div>
</body>
</html>