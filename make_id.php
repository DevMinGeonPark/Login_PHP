<?php

//$user = array();
$users = array("id"=>$_POST['id'],"pw"=>$_POST['pw']);
$users2 = array("id"=>$_POST['id'],"pw"=>$_POST['pw']);
$a=json_encode($users);
$b=json_encode($users2);
array($users, $users2)

echo($a.$b);
// $user_account = {"id":$_POST['id'],"pw:":$_POST['pw']};
$userex = json_encode($users);
file_put_contents('UserData/user.json',$userex,FILE_APPEND);
?>
