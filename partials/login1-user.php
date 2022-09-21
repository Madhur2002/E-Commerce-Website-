<?php
if(isset($_POST['submit'])){
$Name = $_POST['name'];
$Password = $_POST['password'];
$Conn=mysqli_connect('localhost','root','','ecommerce_website');
$sql = "SELECT * FROM `tbluser` WHERE (username='$Name' OR email='$Name') AND password='$Password'";
$result = mysqli_query($Conn,$sql);
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['user'] = $Name;
    echo"
        <script>
        alert('Login Successful!');
        window.location.href='../index.php';
        </script>
        ";
}
else{
    echo"
        <script>
        alert('Invalid Credentials! Pls Enter valid username and password OR Signup if you don't have an account');
        window.location.href='login.php';
        </script>
        ";
}
}
?>