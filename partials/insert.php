<?php
$Conn=mysqli_connect('localhost','root','','ecommerce_website');
if(isset($_POST['submit'])){
    
    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_number = $_POST['number'];

    
    $Dup_Email = mysqli_query($Conn,"SELECT * FROM `tbluser` WHERE email='$_email'");
    $Dup_username = mysqli_query($Conn,"SELECT * FROM `tbluser` WHERE username='$_name'");
    if(mysqli_num_rows($Dup_Email)){
        echo"
        <script>
        alert('This Email is already in use');
        window.location.href='signup.php'
        </script>
        ";
    }
    if(mysqli_num_rows($Dup_username)){
        echo"
        <script>
        alert('This Username is already in use');
        window.location.href='signup.php'
        </script>
        ";
    }
    else{
        $sql = "INSERT INTO `tbluser`(`username`, `email`, `password`, `number`) VALUES ('$_name','$_email ','$_password','$_number')";
        $result = mysqli_query($Conn,$sql);
        header('location:/ecommerce-website/index.php?signupsuccess=true');
    }
}
?>