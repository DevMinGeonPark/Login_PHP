<?php
if (isset($_GET['id'])) {
  $nowid = $_GET['id'];
} else {
  $nowid = "nonid";
}
function print_title()
{
  if (isset($_GET['id'])) {
    echo $_GET['id'];
  }
}
function print_decription() {
  if (isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
  }
}
function print_list() {
  $dlist = scandir('data');
  for ($i=0; $i < count($dlist); $i++) {
    if ($dlist[$i] != '.') {
      if ($dlist[$i] != '..') {
        if ($dlist[$i] != 'home') {
          echo "<li> <a href=\"index.php?id=$dlist[$i]\">$dlist[$i]</a> </li>\n";
        }
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
    <title><?php print_title(); ?></title>
  </head>
  <body>
    <!-- head -->
    <h1><a href="index.php?id=home">WEB</a></h1>
    <div id="grid">
      <!-- index-->
      <div id="olstyle">
        <ol>
          <?php
            print_list();
           ?>
        </ol>
      </div>
      <div id="present">
        <h2>
          <?php
          print_title();
           ?> </h2>
          <?php
          print_decription();
         ?>
         <div id = "laycon">
           <div>
            <p class="titlemar"><strong><a href="create.php">create</a></strong></p>
            <form action="create_process.php" method="post">
              <p class = "putmar">
                <input type="text" name="title" placeholder="Title">
              </p>
              <p>
                <textarea name="description" placeholder="Description"></textarea>
              </p>
              <p>
                <input type="submit">
              </p>
            </form>
          </div>
        </div>
      </div>
  </div>
  </body>
</html>
