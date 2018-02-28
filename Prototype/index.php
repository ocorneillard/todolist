<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
    <title></title>
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
