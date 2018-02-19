<?php

function isExist($var){
  if (isset($var)){
    echo $var;
  }
}

if(isset($_POST['submit'])){

$taches = $_POST[]





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
       <input id="taches" placeholder="Completer une tâche" autofocus="" type="text" name="taches">
       <button type="submit" name="submit" class="btn style">Ajouter</button>
     </div><br>

     <form method="POST" action="todo.php">
 </body>
 </html>
