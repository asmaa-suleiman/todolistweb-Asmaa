<?php



$con = mysqli_connect("localhost:3308", "username", "password", "todolist");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>