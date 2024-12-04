
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
    </div>

<div id="task" >
<h3 > ..list of your tasks:.. </h3>
<?php
   include "connection.php";
   
   $sql = "SELECT * FROM tasks";
   $result = mysqli_query($con,$sql);
   
   while($row = mysqli_fetch_assoc($result)){
    echo "<div id='tasks' style='color: beige; width: 450px; margin-bottom: 10px; margin-left: 90px; font-size: larger; height: 50px; background-color: grey; color: beige; border-radius: 20px; display: flex; align-items: center; justify-content: space-between; padding: 10px;'> 
   
    <div style='flex-grow: 1; padding-left: 10px;'>
        <a style='margin:0px; text-decoration:underline; padding:0px;'href=taskDescription.php?id=".$row['id'].">".$row['title']."</a>  

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
<div id="addTask">
 <a href="add_Task.php">Add Task</a>
<div id="formDiv">

 <form method="POST" action="addTask.php">
   <div id="formRow">
     <p>Task Title: </p>
     <input type="text" placeholder="title" id="title" name="taskTitle" style="    "required> <br>
    <p>Task Description:</p> 
    <textarea name="taskDescription" id="description" placeholder="Description"required></textarea > <br>
<input type="submit" value="save" style=" margin-left: 63px;
    background-color: grey;
    color: beige;">
</div>
</form>
</div>
</div>







</body>
</html>