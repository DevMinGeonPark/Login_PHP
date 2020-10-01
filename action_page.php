<?php
$user = [];
$user['id'] = $_POST['uname'];
$user['pw'] = $_POST['psw'];
$inp = file_get_contents('UserData/user.json');
$tempArray = json_decode($inp,true);
array_push($tempArray, $user);
$jsonData = json_encode($tempArray);
file_put_contents('UserData/user.json', $jsonData);
header("Location: index2.php");

?>
