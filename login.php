<?php

$id = $_POST['uname'];
$pw = $_POST['psw'];
$json = file_get_contents('UserData/user.json');
$i = 0;
$jsonArray = json_decode($json,true);
foreach ($jsonArray as $value) {
  print($value['id']."=".$id.'<br>');
  print($value['pw']."=".$pw.'<br>');
  print("-----------------------------<br>");
  if ($value['id']===$id && $value['pw']===$pw) {
    print("suscess");
    break;
  } else if ($i==end($jsonArray)) {
    print("id or pw error");
  }
  else {
    continue;
  }
  $i++;
}
//   if ($value['id']==$id) {
//       header("Location: end.php");
//          // echo "<script>alert(\"suscess\");</script>";
//       // header("Location: index2.php");
//     } else {
//       header("Location: er.php");
//     }
// }
?>
