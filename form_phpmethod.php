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
  function make_form_newtask()
  {
    return '<form method = "post" action = "new_task_send.php">
      new task name: <br>
      <input type = "text" name = "task_name">
      due date: <br>
      <input type = "date" name = "due_date">
      <input type = "submit" value = "create task">
    </form>';
  }
  function make_form_task($id_no)
  //should this be a string?
  {
    return '<form method = "post" action = "task.php">
      <input type = "submit" name = '.$id_no.' value = done>
    </form>';
  }
 ?>
