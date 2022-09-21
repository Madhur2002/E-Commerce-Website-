<?php


$uname=$_POST['username'];
$upass=$_POST['userpassword'];

session_start();

if($uname=="Madhur" && $upass=="Madhur@1234")
{
    $_SESSION['admin'] = $uname;
    echo "<script>
       alert('Login Successful');
       window.location.href='../admin_navbar.php';
    </script>";
}
else
{
    echo "<script>
       alert('Login Unsuccessful');
       window.location.href='login.php'
    </script>";
}

?>