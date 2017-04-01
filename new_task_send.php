<?php
  $conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");
  Var_dump($_POST);
  $name = htmlspecialchars($_POST["task_name"]);
  $due = htmlspecialchars($_POST["due date"]);
  $task_id_num = '10';
  echo $name.$due;

  $SQL = "INSERT INTO Task_Info (name,due,fin,task_id) VALUES ($name, DATE $due,FALSE,$task_id_num)";

  if($conn->query($SQL)===TRUE){
    echo "new task created sucesssfuly";
  }else {
    echo "error:".$SQL."<br>".$conn->error;
  }

  $conn->close();
 ?>
