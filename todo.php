

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
      // récupérer les données JSON venant de taches.php

      $contenu = file_get_contents('todo.json');
      /* Les données sont récupérées sous forme de tableau (true) */
      $tr = json_decode($contenu);
      print_r($tr);
      // foreach ($tr as $key => $value) {
      //   echo "<li><input type=\"checkbox\" name=\"tache\"> $value </li>";
      // }

        ?>
        <p>
          <button type="submit" name="submit" class="btn style">Enregistrer</button>
        </p>
    </form>
      <label>A faire.</label>



</body>
</html>
