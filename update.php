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
    <link rel="stylesheet" href="style.css?ater">
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
         <div id = "laycon">
           <div>
            <p class="titlemar"><strong><a href="create.php">create</a></strong></p>
            <form action="create_process.php" method="post">
              <p class = "putmar">
                <input type="text" name="title" value="Title">
              </p>
              <p>
                <textarea name="description" placeholder="Description"></textarea>
              </p>
              <p>
                <input type="submit">
              </p>
            </form>
          </div>
          <div>
            <?php
              if (isset($_GET['id'])) { ?>
                <p class = "titlemar"><strong><a href="update.php?id=<?=$_GET['id']?>">update</a></strong></p>
            <?php } ?>
            <form action="create_process.php" method="post">
              <p class = "putmar">
                <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
              </p>
              <p>
                <textarea name="description" placeholder="Description"></textarea>
              </p>
              <p>
                <input type="submit">
              </p>
          </div>
        </div>
      </div>
  </div>
  </body>
</html>
