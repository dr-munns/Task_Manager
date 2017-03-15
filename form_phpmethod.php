<?php
  function make_form_stream($list, $action, $name="active_stream")
  {
    $form = '<form method = "post" action = '.$action.'>';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = "stream" value = '.$option.'>';
    }
    $form.='</form>';
    return $form;

    #return "test_string";
  }

 ?>
