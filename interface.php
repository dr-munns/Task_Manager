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
      <br>
      <?php
        foreach($streams_all[0] as $stream)
        {
          <input type = "submit" name = "stream" value = $stream>
        }
      ?>
      <br>
      </form>
    </body>
  </html>
