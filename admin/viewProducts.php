<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f15fbc3514.js" crossorigin="anonymous"></script>
    <link href="https://codepen.io/ricardpanades/pen/WvJxGv" rel="stylesheet" />
    <title>Document</title>
    <style>
            .parent
            {
                width:250px;
                height:350px;
                border-radius:12px;
                position:relative;
                box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.4);

            }
            .currency
            {
                color:#46734;
                font-size:18px;
            }
            .details
            {
                font-weight:1000;
                color:#eee;
            }
            .myimg
            {
                width:100%;
                height:200px;
            }
            .bd-rad-12
            {
                border-top-left-radius:12px ;
                border-top-right-radius:12px ;
            }
            .action-buttons
            {
                position:absolute;
                bottom:10px;
                right:5px;
                
            }
            .mybtn
            {
                font-size:10px;
            }
    </style>
</head>

<body>

</body>

</html>
<?php
include 'dbconnect.php';
$sql = "SELECT * FROM `products`";
$result = mysqli_query($conn,$sql);
echo "<div class=' d-flex justify-content-start flex-wrap '>";
while($row=mysqli_fetch_assoc($result)){
    $pid = $row['product_id'];
    $name = $row['product_name'];
    $desc = $row['product_desc'];
    $price = $row['product_price'];
    $imsrc  = $row['imlocation'];
    // $product_category = $row['product_category'];
    echo "
    <div class='bg-info parent mt-4 mx-3 '>
        
    <div class='bd-rad-12 d-flex align-items-center justify-content-around bg-warning'>
        <h3 class='text-dark'>$name</h3>
        <h3 class='text-danger'><span class='currency'><i class='fa-solid fa-indian-rupee-sign'></i></span>$price</h3>
    </div>

    <img src='$imsrc' class='myimg'>

    <p class='mb-0 text-center details'> $desc </p>

    <div class='action-buttons'>                  
           <a href='deletepdt.php?pid=$pid'>
            <button class='mybtn btn btn-danger'> <i class='fa fa-trash'> </i>  </button>
            </a>
        
    </div>

</div>
        ";
}
echo "</div>";


// <div class="col-md-4 my-2">
// <div class="card" style="width: 18rem;">
// <img src="https://source.unsplash.com/random/?' .$cat. ',coding" alt="Card image cap">
// <div class="card-body">
//   <h5 class="card-title"><a href="thread.php?catid=' .$id. '">' .$cat. '</a></h5>
//   <p class="card-text">' .substr($desc,0,90). '....</p>
//   <a href="thread.php?catid=' .$id. '" class="btn btn-primary">Read More</a>
// </div>
// </div>
// </div>





?>