<?php
  function make_form($list, $action)
  {
    $form = '<form method = "post" action = '.$action.'>';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = "submit" value = '.$option.'>';
    }
    $form.='</form>';
    return $form;

    #return "test_string";
  }

 ?>
