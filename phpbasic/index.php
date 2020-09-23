<?php
require("lib/print.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("view/head.php"); ?>
  <body>
    <?php require_once("view/body_top.php") ?>
         <div id = "laycon">
           <div>
            <p class="functionlayout"><strong><a href="create.php?name=<?=$_GET['name'];?>">create</a></strong></p>
           </div>
           <div>
            <?php
              if ($_GET['name'] != 'home') { ?>
                <p class = "functionlayout"><strong><a href="update.php?name=<?=$_GET['name'];?>">update</a></strong></p>
            <?php } ?>
          </div>
        </div>
      </div> <!-- div tag close -->
  </div>
  </body>
</html>
