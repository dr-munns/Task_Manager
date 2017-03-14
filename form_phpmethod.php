<?php
  function make_form($list)
  {
    $form = '<form method = "post" action = "set_active.php">';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = "stream" value = '.$option.'>';
    }
    $form.='</form>'
    return $form;
  }


  <form method="post" action="form_test.php" >
  <br><input type="submit" name="stream" value = "work">
  <input type="submit" name="stream" value="play"><br>

  </form>
 ?>
