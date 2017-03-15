<?php
  session_start();
  //pull streams
  $streams_all = $_SESSION['all_streams'];
  //var_dump($streams_all);
  //$streams = $streams_all[0];
  //$sub_1 = $streams_all[1];
  //$sub_2 = $streams_all[2];
  include "form_phpmethod.php";

 ?>
<!DOCTYPE HTML>
  <html>
    <body>
        <?php
        if(isset($_SESSION['active_stream'])){
          echo "active stream is ". $_SESSION['active_stream'].'<br>';
        }

        echo make_form($streams_all[0],"set_active.php",'stream');

         ?>
    </body>
  </html>
