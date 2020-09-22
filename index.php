<?php
$nowid = $_GET['id'];
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
    <link rel="stylesheet" href="style.css?after">
    <title><?php print_title() ?></title>
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
      <!-- in -->
      <div id="present">
        <h2>
          <?php
          print_title();
           ?>
        </h2>
          <?php
          print_decription();
         ?>
         <div id = "laycon">
           <div>
             <p class="titlemar"><strong><a href="create.php?id=<?php echo $nowid ?>">create</a></strong></p>
          </div>
          <div>
            <?php
              if (isset($_GET['id'])) { ?>
                <p class = "titlemar"><strong><a href="update.php?id=<?=$_GET['id'];?>">update</a></strong></p>
            <?php } ?>
            <form action="update.php" method="post">
            </form>
          </div>
        </div>
      </div>
  </div>
  </body>
</html>
