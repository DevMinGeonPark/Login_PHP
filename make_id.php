<?php
$user_account->id = $_POST['id'];
$user_account->pw = $_POST['pw'];
$user = json_encode($user);
array_push(file_put_contents('UserData/user.json',$user,FILE_APPEND)); // put the data in josn
header('Location: /index.php');
 ?>
