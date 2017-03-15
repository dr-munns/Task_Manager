<?php
  function make_form_stream($list, $action)
  {
    $form = '<form method = "post" action = '.$action.'>';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = "active_stream" value = '.$option.'>';
    }
    $form.='</form>';
    return $form;

    #return "test_string";
  }

 ?>
