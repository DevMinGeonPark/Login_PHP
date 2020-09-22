<?php
function print_title()
{
  if (isset($_GET['id'])) {
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_decription() {
  if (isset($_GET['id'])) {
    echo file_get_contentS("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
function print_list() {
  $dlist = scandir('data');
  for ($i=0; $i < count($dlist); $i++) {
    if ($dlist[$i] != '.') {
      if ($dlist[$i] != '..') {
        echo "<li> <a href=\"index.php?id=$dlist[$i]\">$dlist[$i]</a> </li>\n";
      }
    }
  }
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>web</title>
  </head>
  <body>
    <!-- head -->
    <h1><a href="index.php">WEB</a></h1>
    <div id="grid">
      <!-- index-->
      <div id="olstyle">
        <ol>
          <?php
            print_list();
           ?>
        </ol>
        <a href="create.php">create</a>
      </div>
      <!-- in -->
      <div id="present">
        <h2>
          <?php
          print_title();
           ?> </h2>
          <?php
          print_decription();
         ?>
      </div>
  </div>
  </body>
</html>
