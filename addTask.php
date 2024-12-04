<?php
include ("connection.php");
$title = $_POST['taskTitle'];
$description = $_POST['taskDescription'];


$sql = "INSERT INTO tasks(title, descript,done) VALUES
         ('$title', '$description','0')";

mysqli_query($con,$sql) ;


header("Location:main.php");







?>