<?php
  session_start();
  //pull streams
  $streams_all = $_SESSION['all_streams'];
  //var_dump($streams_all);
  //$streams = $streams_all[0];
  //$sub_1 = $streams_all[1];
  //$sub_2 = $streams_all[2];
  include "form_phpmethod.php";

  if(isset($_SESSION['active_stream']))
  {
    $active_stream = $_SESSION['active_stream'];
    //find the key for the substream (of the active stream )
    //array from the array of all streams
    $stream_number = array_search($active_stream,$streams_all[0])+1;
    $substream_list = $streams_all[$stream_number];
    if(isset($_SESSION['active_substream']))
    {
      $active_substream = $_SESSION['active_substream'];

    }
  }


 ?>
<!DOCTYPE HTML>
  <html>
    <body>

        <?php
        echo "pick stream";
        echo make_form($streams_all[0],$action = "set_active.php");
        if(isset($active_stream))
        {
          echo "active stream is:".$active_stream.'<br>';
          echo "pick substream:";
          var_dump($substream_list);
          #echo make_form()
        }

         ?>
    </body>
  </html>
