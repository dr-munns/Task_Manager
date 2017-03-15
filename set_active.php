<?php
    session_start();

    if(isset($_POST['stream']))
    {
      #echo $_POST['stream'];
      $_SESSION['active_stream']=$_POST['active_stream'];
    }
    header('Location: interface.php');
    exit();
 ?>
