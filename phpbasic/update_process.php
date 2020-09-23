<?php
  rename('contents/'.$_POST['old_title'],'contents/'.$_POST['title']);
  file_put_contents('contents/'.$_POST['title'], $_POST['description']);
  header('Location: /index.php?name='.$_POST['title']);
?>
