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

            class stream_manager
            {
              public $existing_streams;
              public $active_stream;
              public $active_substream;

              public function __construct($test = TRUE)
              {
                $this->existing_streams = array("work"=> ["standard","bookings","reports"],
                                                "play" => ["dancing","socials","games"],
                                                "Level_Up" => ["Programming","fitness"]);
//get this to default to the zero indexed items.
                $this->active_stream = "work";
                $this->active_substream = "standard";
              }
              public function set_active_stream($stream,$substream = NULL)
              {
                $this->active_stream = $stream;
                if(!is_null($substream))
                {
                  $this->active_substream = $substream;
                }
              }
/*              public function newstream($stream_name)
              {
                if (array_key_exists($stream_name, $this->existing_streams))
                {
                  echo "already exists";
                  #return $streams;
                } else {
                  $this->existing_streams[$stream_name]= array("standard");
              }*/
            }

            //create task
            class task
            {
              public $stream;
              public $substream;
              public $name;
              public $fin;
              public $tags;

              public function __construct($name,$stream,$substream,$tags=array(NULL))
              {
                $this->name = $name;
                $this->fin = FALSE;
                $this->stream = $stream;
                $this->substream = $substream;
                $this->tags = $tags;
                //look up tasks in database to determine task ID Number
                //save task to database
              }
/*              public function tag_add($tag)
              {
                $this->tags[] = $tag;
              }*/
              public function done()
              {
                $this->fin = TRUE;
              }
            }
        ?>
        <br/>
    </body>
</html>
