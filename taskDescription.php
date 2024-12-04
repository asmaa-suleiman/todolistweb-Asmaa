<?php
session_start();
if(!isset($_SESSION['user']))
header("location:login.php?error=2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="mainPagecss.css">
</head>
<body>
    <div id="barDiv">

      <h2>TO DO LIST</h2>
      <div id="addTaskMain" 

>
<a  style="margin-left:0px"href="add_Task.php">Add Task</a>

</div>
    </div>

<div id="task" >
<h3 > ..Task Description:.. </h3>
<?php
   include "connection.php";
   $taskID = $_GET['id'];
   $sql = "SELECT * FROM tasks where id='$taskID'";
   $result = mysqli_query($con,$sql);
   
   while($row = mysqli_fetch_assoc($result)){
    echo "<div id='tasks' style='color: beige; width: 450px; margin-bottom: 10px; margin-left: 90px; font-size: larger; height: auto; background-color: grey; color: beige; border-radius: 20px; display: flex; align-items: center; justify-content: space-between; padding: 10px;'> 
   
          
        
   
         
    <div style='flex-grow: 1; padding-left: 10px;'>
     <strong>Title:</strong><a style='margin:0px; padding:0px; font-size: large;
'href=taskDescription.php?id=".$row['id'].">".$row['title']."</a>  <br>
    <strong>Description:</strong>".$row['descript']."
      </div>
       <form action='delete.php' method='POST' style='margin-right: 10px;' >
                                <a style='margin-left:0px' href=edit_task.php?id=".$row['id']."><img src='icon.png' width=30px ></a>
 
       <input type='hidden' name='task_id' value='".$row['id']."'>
        <button type='submit' name='delete' 
        id=".$row['id']."  
        style='border-radius: 100px; background-color: beige; height: 30px; width: 30px; border-color: beige;' >
           
        </button>
    </form> 
</div>";
   }
   ?>

</div>

