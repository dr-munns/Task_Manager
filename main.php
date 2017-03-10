//for the run-time code!
//include 'filename.php';
<!DOCTYPE HTML>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>

        <?php
            include "TM_classes.php";
            echo "hello world, this is the run-time environment!";
            $test = new task("thing","bob","fanny");
            echo $test->name."<br>";
            $test_stream = new stream_manager();
            var_dump($test_stream->existing_streams);
            echo "<br>";

        ?>

    </body>
</html>
