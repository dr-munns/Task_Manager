<?php
  session_start();
  //pull streams
  $streams_all = $_SESSION['streams'];
  //$streams = $streams_all[0];
  //$sub_1 = $streams_all[1];
  //$sub_2 = $streams_all[2];
 ?>
<!DOCTYPE HTML>
  <html>
    <body>
      <form method="post" action="set_active.php" >
      <br><input type="submit" name="stream" value = "work">
      <input type="submit" name="stream" value="play"><br>

      </form>
    </body>
  </html>
