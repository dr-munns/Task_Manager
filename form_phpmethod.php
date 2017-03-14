<?php
  function make_form($list)
  {
    $form = '<form method = "post" action = "set_active.php">';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = "stream" value = '.$option.'>';
    }
    $form.='</form>';
    return $form;
    #return "test_string";
  }

 ?>
