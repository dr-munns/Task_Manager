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
            echo "connection all good"."<br>";
          }

          $SQL_idnum = "SELECT COUNT(*) FROM Task_Info";

          $task_id = $conn->query($SQL_idnum);
          $result = $task_id->fetch_assoc();
          var_dump ($result);
          $task_id_num = $task_id->fetch_assoc()['COUNT(*)'];
          echo "<br>"."task num:".$task_id_num;


          $SQL = "INSERT INTO Task_Info (name,due,fin) VALUES ('test', DATE '2017-06-1',FALSE)";
          echo $SQL;
          if($conn->query($SQL)===TRUE){
            echo "new record created sucesssfuly";
          }else {
            echo "error:".$SQL."<br>".$conn->error;
          }
          $conn->close();
         ?>
       </body>
     </html>
