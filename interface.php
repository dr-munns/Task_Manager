<?php
  session_start();
  //pull streams
  $streams_all = $_SESSION['all_streams'];

  include "form_phpmethod.php";

 ?>
<!DOCTYPE HTML>
  <html>
    <body>
        <?php

        echo make_form($streams_all[0],"set_active.php");
        if(isset($_SESSION['active_stream'])){
          echo "active stream is ". $_SESSION['active_stream'].'<br>';
          $active_stream_no = array_search(
            $_SESSION['active_stream'],$streams_all[0])+1;

            echo make_form_substream($streams_all[$active_stream_no],"set_active.php");
        }

        if(isset($_SESSION['active_substream'])){
          #$active_substream = $_SESSION['active_substream'];
          echo "active substream is ". $_SESSION['active_substream'].'<br>';
          /*echo make_form_newtask();/*/
        }



         ?>
    </body>
  </html>
