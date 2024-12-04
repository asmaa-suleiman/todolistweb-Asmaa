<?php
include ("connection.php");
$email  =$_POST['txtEmail'];
$password  =$_POST['txtPassword'];


$sql = "INSERT INTO members(email, pass) VALUES
         ('$email', '$password')";

mysqli_query($con,$sql) ;


header("Location:main.php");







?>