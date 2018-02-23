<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <main>
      <section class="section">
        <div class="section--txt">
          <div class="section--txt--grid">
            <div class="section--txt--grid1">
              <form class="fa" action="#" method="post">
              <?php
                require 'todo.php';
               ?>
            </div>
            <div class="section--txt--grid2">
              <button type="submit" name="submit" value="button2">Done</button>
            </form>
            </div>
          </div>

        </div>
      </section>
      <div class="empty">

      </div>
      <aside class="done">
        <form action="#" method="post">
        <?php
         require 'archives.php';
         ?>
         <button type="submit" name="sub" value="mit">
           <i class="fas fa-eraser"></i>
         </button>
       </form>
      </aside>

      <footer class="todo">
        <?php
          require 'taches.php';
         ?>
         <form method="POST" action="#">
           <div class="row">
             <span>
               <input class="balloon" id="galaxy" type="text" placeholder="Complete task" name="tache" />
               <label for="galaxy">to do</label>
               <button class="taches--btn" type="submit" name="submit" value="envoyer" class="button">
                 <i class="fas fa-share-square"></i>
               </button>
             </span>
           </div>
         </form>
      </footer>
    </main>
  </body>
</html>
