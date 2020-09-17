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
        <ol>
          <li><A href="index.php?id=HTML">HTML</a></li>
          <li><A href="index.php?id=CSS">CSS</a></li>
          <li><A href="index.php?id=JavaScript">Java</a>Script</li>
        </ol>
      </div>
      <!-- in -->
      <div id="present">
        <h2> <?php echo $_GET['id']; ?> </h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
  </div>
  </body>
</html>
