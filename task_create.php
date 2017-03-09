<!DOCTYPE HTML>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
      <br>

        <?php
            echo "Hello, this will hold the modules for creating tasks and projects.";
            echo "\n version 0";

            // connect to SQL Server

            //- check connection and DB structure

            // Load current streams, substreams and tags
            //$current_streams = SELECT DISTINCT stream FROM task_info;
            //For $stream in $current_streams:

            //##test version
            $current_streams = array("work"=> ["standard","bookings","reports"],
                                "play" => ["dancing","socials","games"],
                                "Level_Up" => ["Programming","fitness"]);
            print_r($current_streams);
            $tags = ["admin","email"];
            echo "\n";

            //create stream
            /*function new_stream($streams,$stream_name)
            {
              if (bool array_key_exists(string $stream_name, array $streams)) {
                echo "already exists";
              } else {
                $streams[$stream_name]= array();
              }
            }
            // newstream test
            new_stream($$current_streams, "BOB");
            */
            var_dump($current_streams);
            print_r($tags);
            //create substream

            //create task





        ?>
        <br/>
    </body>
</html>
