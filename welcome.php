<?php
  session_start();
  //tidy up
  session_unset();
  //set user name
  //--> change to insert username and password
  $_SESSION['user_name']="Jack";

  //--> connect to database

  //check database for streams
  //test version
  $stream_main = array("work","play");
  $sub_0 = array("admin","programming");
  $sub_1 = array("dance","reading","creative");

  //save list to session variable
  $_SESSION['all_streams'] = array($stream_main,$sub_0,$sub_1);
  //--> seriallise database connection

  //direct user to the main interface
  header('Location: interface.php');
  exit();
 ?>
