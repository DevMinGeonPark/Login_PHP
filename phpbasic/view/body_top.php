<?php urlcontrol(); ?>

<h1><a href="index.php?name=home">WEB</a></h1>
<div id="grid">
  <div id="olstyle">
    <ol>
      <?php
        print_list();
       ?>
    </ol>
  </div>
  <div id="present">
    <h2>
      <?php
      print_title();
       ?>
    </h2>
      <?php
      print_decription();
     ?>
