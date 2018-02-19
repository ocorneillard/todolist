<?php



if(isset($_POST['submit'])){
$taches = $_POST["taches"] ;
}





 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Taches</title>
 </head>
 <body>
     <div class="add">
       <form method="POST" action="taches.php">
         <input id="taches" placeholder="Completer une tâche" autofocus="" type="text" name="taches">
         <button type="submit" name="submit" value="envoyer" class="btn style">Ajouter</button>
      </form>
     </div>
 </body>
 </html>
