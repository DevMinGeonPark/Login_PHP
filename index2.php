<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
  require("view/head.php");
  ?>
    <body>
      <h1 style="text-align:center">Login</h1>
      <form action="login.php" method="post">
        <?php require("input.php");
              require("container.php");
        ?>
    </form>
    </body>
  </html>
