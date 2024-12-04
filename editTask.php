<?php
include ("connection.php");
$title = $_POST['taskTitle'];
$description = $_POST['taskDescription'];
$taskID = $_POST['taskID'];


$sql = "UPDATE  tasks
         SET title='$title', descript='$description', done='0'
         where id='$taskID'";
mysqli_query($con,$sql) ;


header("Location:main.php");


    
?>

