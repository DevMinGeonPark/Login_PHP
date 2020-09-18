<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>web</title>
  </head>
  <body>
    <!-- head -->
    <h1><a href="index.php?id=Index">WEB</a></h1>
    <div id="grid">
      <!-- index-->
      <div id="olstyle">
        <?php
         ?>
      </div>
      <!-- in -->
      <div id="present">
        <h2> <?php echo $_GET['id']; ?> </h2>
        <?php
        echo file_get_contentS("data/".$_GET['id']);
         ?>
      </div>
  </div>
  </body>
</html>
