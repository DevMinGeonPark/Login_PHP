<?php
function urlcontrol()
{
  if (isset($_GET['name'])==false){
    header('Location: /index.php?name=home');
  }
}
function print_title()
{
  if (isset($_GET['name'])) {
    echo $_GET['name'];
  }
}
function print_decription() {
  if (isset($_GET['name'])) {
    echo file_get_contents("contents/".$_GET['name']);
  }
}
function print_list() {
  $dlist = scandir('contents');
  for ($i=0; $i < count($dlist); $i++) {
    if ($dlist[$i] != '.' && $dlist[$i] != '..' && $dlist[$i] != 'home' ) {
          echo "<li> <a href=\"index.php?name=$dlist[$i]\">$dlist[$i]</a> </li>\n";
    }
  }
}
 ?>
