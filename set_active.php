<?php
  session_start();

  if(isset($_POST['stream']))
  {
    #echo $_POST['stream'];
    $_SESSION['active_stream']=$_POST['stream'];
  }
  if(isset($_POST['substream']))
  {
    #echo $_POST['stream'];
    $_SESSION['active_substream']=$_POST['substream'];
  }

  header('Location: interface.php');
  exit();
 ?>
