<?php
  $conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");
  if(isset($_POST['done']))
  {
    $id_no = $_POST['done'];
    $SQL = "UPDATE Task_Info SET fin = TRUE WHERE task_id = ".$id_no;
    echo $SQL;
  }

  $conn->query($SQL);

  $conn->close();
  //header('Location: interface.php');
  //exit();
 ?>
