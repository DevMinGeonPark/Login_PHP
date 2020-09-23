<form action="update_process.php" method="post">
  <input type="hidden" name="old_title" value="<?=$_GET['name']?>">
  <p class = "putlayout">
    <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
  </p>
  <p>
    <textarea name="description" placeholder="Description"></textarea>
  </p>
  <p>
    <input type="submit">
  </p>
</form>
