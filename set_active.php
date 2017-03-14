<?php
session_start();

if(isset($_POST['stream']))
{
  echo $_POST['stream'];
  $_SESSION['stream']=$_POST['stream'];
}

 ?>
