<?php
  //connect to database
  $conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");
  if(isset($_POST))
  {
    //post key is the id number of the event
    $id_no= array_keys($_POST)[0];
    // post value is the process to be executed.
    //here it is mark the task as finished.
    if($_POST[$id_no]='done'){
      $SQL = "UPDATE Task_Info SET fin = TRUE WHERE task_id = ".$id_no;
    }
    $conn->query($SQL);
  }

  $conn->close();
  header('Location: interface.php');
  exit();
 ?>
