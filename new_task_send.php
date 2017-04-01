<?php
  $conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");

  $name = htmlspecialchars($_POST["task name"]);
  echo $_POST["due date"];
  $due = htmlspecialchars($_POST["due date"]);
  $task_id_num = '10';

  $SQL = "INSERT INTO Task_Info (name,due,fin,task_id) VALUES ($name, DATE $due,FALSE,$task_id_num)";

  if($conn->query($SQL)===TRUE){
    echo "new task created sucesssfuly";
  }else {
    echo "error:".$SQL."<br>".$conn->error;
  }

  $conn->close();
 ?>
