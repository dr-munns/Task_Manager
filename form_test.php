<?php
session_start();
 ?>

<!DOCTYPE HTML>
<html>
  <body>
    <?php
      include TM_classes.php;

      if(!isset($_SESSION["streams"]))
      /*{
        $streams = new stream_manager();
        $_SESSION["streams"]= serialize($streams);
        echo "new stream manager created";
      }*/
      if(isset($_POST['stream']))
      {
        echo "<br>post fuction<br>";
        echo $_POST['stream'];
        $_SESSION['stream']=$_POST['stream'];
        echo $SESSION['stream'];
        /*
        if(isset($_SESSION["streams"]))
        {
          $streams = unserialize($_SESSION["streams"]);
          $streams->set_active_stream($_POST['stream']);
          echo "session object version";
          echo $streams->active_stream;
          $_SESSION["streams"]= serialize($streams);
        }*/
      }

    ?>

<form method="post" action="form_test.php" >
<br><input type="submit" name="stream" value = "work">
<input type="submit" name="stream" value="play"><br>

</form>

</body>
</html>
