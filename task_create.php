<!DOCTYPE HTML>
<html>
    <head>
        <title>Task Creation</title>
    </head>
    <body>
      <br>

        <?php
            echo "Hello, this will hold the modules for creating tasks and projects.";
            echo "<br>version 0<br>";

            // connect to SQL Server
            //- check connection and DB structure
            // Load current streams, substreams and tags
            //$current_streams = SELECT DISTINCT stream FROM task_info;
            //For $stream in $current_streams:
            //  SELECT DISTINCT substream FROM task_info;
            //##test version
            $current_streams = array("work"=> ["standard","bookings","reports"],
                                "play" => ["dancing","socials","games"],
                                "Level_Up" => ["Programming","fitness"]);
            echo "starting streams <br>";
            print_r($current_streams);
            $tags = ["admin","email"];

            //create stream
            function new_stream(&$streams,$stream_name)
            {
              if (array_key_exists($stream_name, $streams)) {
                echo "already exists";
                #return $streams;
              } else {
                $streams[$stream_name]= array("standard");
                #return $streams;
              }
            }
            // newstream test
            new_stream($current_streams, "BOB");
            echo "<br>new set of streams<br>";

            print_r($current_streams);
            #print_r($tags);
            //create substream

            //create task





        ?>
        <br/>
    </body>
</html>
