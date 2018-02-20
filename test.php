<?php



if(isset($_POST['submit'])){
  $contenu = file_get_contents('todo.json');
  $contenu = get_object_vars(json_decode($contenu));

  // Changement d'array
  $contenu['number'] = $contenu['number'] +1 ;
  $tache = filter_var($_POST['tache'], FILTER_SANITIZE_STRING);
  $tache = trim($tache);
  $contenu['tache'.$contenu['number']] = $tache;

  if (empty($tache) || !isset($tache)) {
    $veriftaches = "pok";
  } else {
    $veriftaches = "ok";
  }

  if ($veriftaches == "ok") {


    // Envoyer donné vers JSON
    $var = json_encode($contenu);
    file_put_contents('todo.json', $var);
  }
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

   <form class="" action="#" method="post">

     <?php
     // récupérer les données JSON venant de taches.php
     $contenu = file_get_contents('todo.json');
     $tr = get_object_vars(json_decode($contenu));
     echo $tr['number'];
     foreach ($tr as $key => $value) {
       if ($key == 'number') {
       } else {
         echo "<li><input type=\"checkbox\" name=\"$key\" value=\"ok\"> $value </li>";
       }
     }

     if (isset($_POST['submit'])) {
      foreach ($tr as $key => $value) {
       if ($_POST[$key] != $_POST['ok']) {
           // $contenu['tache'.$contenu['number']] = $tache;
           $contenu_archives[$key] = $value;
       } else {
         $contenu_todo[$key] = $value;
         $number = $number + 1;
         echo "NUMBER";
       }
      }

      $send_archives = json_encode($contenu_archives);
      file_put_contents('archives.json', $send_archives);
      $send_todo = json_encode($contenu_todo);
      file_put_contents('todo.json', $send_todo);
      header("LOCATION: test.php");
     }

       ?>
       <p>
         <button type="submit" name="submit" value="envoie">Enregistrer</button>
       </p>
   </form>


     <div class="add">
       <form method="POST" action="#">
         <input id="taches" placeholder="Completer une tâche" autofocus="" type="text" name="tache">
         <button type="submit" name="submit" value="envoyer" class="btn style">Ajouter</button>
      </form>
     </div>
 </body>
 </html>
