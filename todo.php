<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List to do</title>
</head>
<body>
    <form class="" action="#" method="post">

      <?php
      $number = 0;
      // récupérer les données JSON venant de taches.php
      $contenu = file_get_contents('todo.json');
      $tr = get_object_vars(json_decode($contenu));
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
        }
       }

       $send_archives = json_encode($contenu_archives);
       file_put_contents('archives.json', $send_archives);
       $send_todo = json_encode($contenu_todo);
       file_put_contents('todo.json', $send_todo);
       header("LOCATION: index.php");
      }

        ?>
        <p>
          <button type="submit" name="submit" value="envoie">Enregistrer</button>
        </p>
    </form>



</body>
</html>
