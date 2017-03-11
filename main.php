//for the run-time code!
//include 'filename.php';
<!DOCTYPE HTML>
<html>
    <head>
        <title>Task Manager from Dr M</title>
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
        <table width="100%" border="0">
          <tr>
            <td colspan="2" bgcolor="#b5dcb3">
              <h1>This is Web Page Main title</h1>
            </td>
          </tr>
          <tr valign="top">
            <td bgcolor="#aaa" width="50">
              <b>Main Menu</b><br />
              HTML<br />
              PHP<br />
              PERL...
            </td>
            <td bgcolor="#eee" width="100" height="200">
                Technical and Managerial Tutorials
            </td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#b5dcb3">
              <center>
              Copyright © 2007 Tutorialspoint.com
              </center>
            </td>
          </tr>
        </table>
    </body>
</html>
