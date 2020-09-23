<?php
require("view/head.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <div id = "layout">
        <h1><a href="index.php">sign up</a></h1>
      <div>
        <form action="make_id.php" method="post">
          <p><input type="text" name="id" placeholder="Put the ID"></p>
          <p><input type="text" name="pw" placeholder="Put the PW"></p>
          <p><input id = "submit" type="submit" name="" value="finish"></p>
        </form>
      </div>
    </div>
  </body>
</html>
