<!DOCTYPE HTML>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>

        <?php
            echo "Hello, this will hold the modules for creating tasks and projects";

            // connect to SQL SoapServer

            //- check connection and DB structure

            // Load current streams, substreams and tags
            //$current_streams = SELECT DISTINCT stream FROM task_info;
            //For $stream in $current_streams:

            //##test version
            $current_streams = ["work"=> ["bookings","reports"],
                                "play" => ["dancing","socials","games"],
                                "Level_Up" => ["Programming","fitness"]]
            echo $current_streams


            //yowza!

            //create stream


            //create substream

            //create task





        ?>

    </body>
</html>
