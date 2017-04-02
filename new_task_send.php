<?php
  session_start();
  //pull streams
  $stream = $_SESSION['active_stream'];
  $substream = $_SESSION['active_substream'];
  $conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");

  $name = htmlspecialchars($_POST["task_name"]);
  $due = $_POST["due_date"];
  $task_id_num = '10';

  $task_id_find = $conn->query("SELECT MAX(task_id) AS MaxID FROM Task_Info");
  $result = $task_id_find->fetch_assoc();
  $task_id_num = $result['MaxID']+1;

  if(isset($stream) and isset($substream)){
    $SQL = "INSERT INTO Task_Info (name,due,fin,task_id,stream,substream) VALUES ('".
                          $name.
                          "', DATE '".
                          $due.
                          "',FALSE,$task_id_num'".
                          $stream.
                          "','".
                          $substream.
                          "')";    
  }else{
    $SQL = "INSERT INTO Task_Info (name,due,fin,task_id) VALUES ('".
                          $name.
                          "', DATE '"
                          .$due.
                          "',FALSE,$task_id_num)";
  }
  $conn->query($SQL);

  $conn->close();
  header('Location: interface.php');
  exit();
 ?>
