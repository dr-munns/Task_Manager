<!DOCTYPE HTML>
  <html>
    <body>
        <?php
          echo "this is the database test";

          $servername = "localhost";
          $username = "tm";
          $password = "77ML5KFe";
          $dbname = "Task_Manager";

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error){
            echo "connoction failed:" . $conn->connect_error;
          }else{
            echo "all good";
          }

          $SQL_idnum = "SELECT COUNT(task_id) FROM Task_Info";

          $task_id = $conn->query($SQL_idnum);
          echo $task_id;


          $SQL = "INSERT INTO Task_Info (name,due,fin) VALUES ('test', DATE '2017-06-1',FALSE)";
          echo $SQL;
          if($conn->query($SQL)===TRUE){
            echo "new record created sucesssfuly";
          }else {
            echo "error:".$SQL."<br>".$conn->error;
          }

         ?>
       </body>
     </html>
