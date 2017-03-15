<?php
  function make_form($list, $action, $name)
  {
    $form = '<form method = "post" action = '.$action.'>';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = '. $name .' value = '.$option.'>';
    }
    $form.='</form>';
    return $form;

    #return "test_string";
  }

 ?>
