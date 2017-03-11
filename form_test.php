<!DOCTYPE HTML>
<html>
<body>
<?php
if(isset($_POST['stream']))
echo $_POST['stream'];
?>

<form method="post" action="form_test.php" >
<br><input type="submit" name="stream" value = "work">
<input type="submit" name="stream" value="play"><br>

</form>

</body>
</html>
