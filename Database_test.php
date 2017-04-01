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
          /*$conn = new mysqli("localhost", "tm", "77ML5KFe", "Task_Manager");*/
          if ($conn->connect_error){
            echo "connoction failed:" . $conn->connect_error;
          }else{
            echo "connection all good"."<br>";
          }

          $task_id = $conn->query("SELECT COUNT(*) FROM Task_Info");
          $result = $task_id->fetch_assoc();
          $task_id_num = $result['COUNT(*)'];

          $SQL = "INSERT INTO Task_Info (name,due,fin,task_id) VALUES ('test', DATE '2017-06-1',FALSE,$task_id_num)";

          if($conn->query($SQL)===TRUE){
            echo "new record created sucesssfuly";
          }else {
            echo "error:".$SQL."<br>".$conn->error;
          }
          $conn->close();
         ?>
       </body>
     </html>
