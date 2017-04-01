<?php
  session_start();
  session_unset();
  //set user name
  $_SESSION['user_name']="Jack";

  //check database for streams
  //test version
  $stream_main = array("work","play");
  $sub_0 = array("admin","programming");
  $sub_1 = array("dance","reading","creative");

  //save list to session variable
  $_SESSION['all_streams'] = array($stream_main,$sub_0,$sub_1);
  header('Location: Database_test.php');
  exit();
 ?>
