<?php
require("view/head.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <div id = "layout">
        <h1><a href="index.php">Login</a></h1>
      <div>
        <form action="login.php" method="post">
          <p><input type="text" name="id" placeholder="ID"></p>
          <p><input type="text" name="pw" placeholder="PW"></p>
          <p><input id = "submit" type="submit" name="" value="Login"></p>
        </form>
        <form action="sign_up.php" method="post">
          <p><input id = "submit" type="button" name="" value="sign up" onclick="window.location.href='/sign_up.php'"></p>
        </form>
      </div>
    </div>
  </body>
</html>
