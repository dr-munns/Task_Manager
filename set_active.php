<?php
session_start();

if(isset($_POST['stream']))
{
  echo $_POST['stream'];
  $_SESSION['active_stream']=$_POST['stream'];
}

 ?>
