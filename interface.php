<?php
  session_start();
  //pull streams
  $streams_all = $_SESSION['streams'];
  //var_dump($streams_all);
  //$streams = $streams_all[0];
  //$sub_1 = $streams_all[1];
  //$sub_2 = $streams_all[2];
  include_once "form_phpmethod.php";

 ?>
<!DOCTYPE HTML>
  <html>
    <body>
        <form method="post" action="set_active.php" >
        <br><input type="submit" name="stream" value = "work">
        <input type="submit" name="stream" value="play"><br>

        </form>
        <?php
        echo make_form(array($streams_all[0]));

         ?>
    </body>
  </html>
