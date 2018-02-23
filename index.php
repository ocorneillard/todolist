<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
     <link href="https://fonts.googleapis.com/css?family=Crafty+Girls" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <main>
      <section class="section">
        <div class="section--txt">
          <?php
            require 'todo.php';
           ?>
        </div>
      </section>
      <div class="empty">

      </div>
      <aside class="done">
        <?php
         require 'archives.php';
         ?>
      </aside>

      <footer class="todo">
        <?php
          require 'taches.php';
         ?>
      </footer>
    </main>
  </body>
</html>
