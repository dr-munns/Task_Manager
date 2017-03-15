<?php
  function make_form($list, $action)
  {
    $form = '<form method = "post" action = '.$action.'>';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = "stream" value = '.$option.'>';
    }
    $form.='</form>';
    return $form;
  }
  function make_form_substream($list, $action)
  {
    $form = '<form method = "post" action = '.$action.'>';
    foreach($list as $option)
    {
      $form.='<input type = "submit" name = "substream" value = '.$option.'>';
    }
    $form.='</form>';
    return $form;
  }
 ?>
