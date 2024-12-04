<?php
include("connection.php"); 


    $task_id = $_POST['task_id'];

   
    $sql = "DELETE FROM tasks WHERE id = '$task_id'";
    mysqli_query($con,$sql);
header("Location:main.php");
    ?>