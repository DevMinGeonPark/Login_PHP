<?php

$id = $_POST['id'];
$pw = $_POST['pw'];
$count = file_get_contents('UserData/user.json');

foreach ($count as $key => $value) {
  if ($key==$id) {
    if ($value==$pw) {
      echo "Success Login";
      header('Location: /end.php');
    }
  }
}

?>
