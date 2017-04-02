<?php
  $conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");

  $name = htmlspecialchars($_POST["task_name"]);
  $due = $_POST["due_date"];
  $task_id_num = '10';

  $task_id_find = $conn->query("SELECT COUNT(*) FROM Task_Info");
  $result = $task_id_find->fetch_assoc();
  $task_id_num = $result['COUNT(*)'];


  $SQL = "INSERT INTO Task_Info (name,due,fin,task_id) VALUES ('".
                        $name.
                        "', DATE '"
                        .$due.
                        "',FALSE,$task_id_num)";

  if($conn->query($SQL)===TRUE){
    echo "new task created sucesssfuly";
  }else {
    echo "error:".$SQL."<br>".$conn->error;
  }

  $conn->close();
 ?>
