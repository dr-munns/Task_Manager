<?php
  $conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");
  if(isset($_POST['done']))
  {
    echo $_POST['done'];
    $SQL = "UPDATE Task_Info SET fin = TRUE WHERE task_id = $_POST['done']";
  }

  $conn->query($SQL);

  $conn->close();
  //header('Location: interface.php');
  //exit();
 ?>
