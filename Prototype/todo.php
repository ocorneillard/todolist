
    <form class="fa" action="#" method="post">
      <h3>Tâches à effectuer</h3>

      <?php
      $number = 0;
      // récupérer les données JSON venant de taches.php
      $contenu = file_get_contents('todo.json');
      $tr = json_decode($contenu, true);
      foreach ($tr as $key => $value) {
        if ($key == 'number') {
        } else {
          echo "<p><input type=\"checkbox\" name=\"$key\" value=\"ok\"> $value</p>";
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
        <p>
          <button type="submit" name="submit" value="button2">Enregistrer</button>
        </p>
    </form>
