<?php
session_start();
include "connection.php";
$email  =$_POST['txtEmail'];
$password  =$_POST['txtPassword'];

$sql = "SELECT * FROM members WHERE email='$email' AND pass='$password'";
$result = mysqli_query ($con,$sql);

if(mysqli_num_rows($result)>0){
    $_SESSION['user'] = $email;
    header("location:main.php");
}
else{
    header("location:login.php?error=1");

}
