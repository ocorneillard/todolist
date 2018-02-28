      <?php
      // récupérer les données JSON venant de taches.php
      $contenu = file_get_contents('todo.json');
      $tr = json_decode($contenu, true);
      foreach ($tr as $key => $value) {
        if ($key == 'number') {
        } else {
          echo "<input id=\"$key\" type=\"checkbox\" name=\"$key\" value=\"ok\">";
          echo "<label for=\"$key\"><span class=\"check\">✓</span> $value</label>";

          }
      }
      $contenu_archives = json_decode(file_get_contents('archives.json'),true);
      if (isset($_POST['submit'])) {
       foreach ($tr as $key => $value) {
        if (isset($_POST[$key])) {
            // $contenu['tache'.$contenu['number']] = $tache;
            $contenu_archives[$key] = $value;
            $contenu_archives = array_slice($contenu_archives, -5);
        } else {
          $contenu_todo[$key] = $value;
        }
       }

       $send_archives = json_encode($contenu_archives);
       file_put_contents('archives.json', $send_archives);
       $send_todo = json_encode($contenu_todo);
       file_put_contents('todo.json', $send_todo);
       header("LOCATION: index.php");
      }


        ?>
