<?php
require_once("lib/print.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("view/head.php"); ?>
  <body>
    <?php require_once("view/body_top.php") ?>
         <div id = "laycon">
           <div>
             <p class="functionlayout"><strong><a href="create.php?name=<?=$_GET['name'];?>">create</a></strong></p>
              <?php require_once("lib/create_form.php") ?>
            </div>
          <div>
            <?php
            if ($_GET['name'] != 'home') { ?>
              <p class = "functionlayout"><strong><a href="update.php?name=<?=$_GET['name']?>">update</strong><h2></p>
            <?php } ?>
          </div>
      </div>
    </div>
  </body>
</html>
