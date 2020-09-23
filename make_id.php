<?php
$user_account->id = $_POST['id'];
$user_account->pw = $_POST['pw'];
$user = json_encode($user_account);
$userarr = [json_decode(file_get_contents("UserData/user.json"),true)];
array_push(file_put_contents('UserData/user.json',$user,FILE_APPEND)); // put the data in josn
header('Location: /index.php');
 ?>
