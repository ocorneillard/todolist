<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h2>Listing des tâches a effectuer cette semaine.</h2>
    </header>


    <?php
      require 'todo.php';
     ?>

     <?php
      require 'archives.php';
      ?>

      <?php
        require 'taches.php';
       ?>
  </body>
</html>
