<?php
  file_put_contents('data/'.$_GET['title'],$_GET['description']);
  echo "<p> title : ".$_GET['title']."</p>";
  echo "<p> description : ".$_GET['description']."</p>";
 ?>







<!-- <!doctype html>
<html>
  <body>
    <form action="form.php" method="post">
      <p><input type="text" name="title" placeholder="Title"></p>
      <p><textarea name="description"></textarea></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html> -->
