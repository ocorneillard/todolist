
  <?php
    $contenu = file_get_contents('archives.json');
    $tr = json_decode($contenu,true);

    foreach ($tr as $key => $value) {
      if ($key == 'number') {
       } else {
         echo "<input id=\"$key\" type=\"checkbox\" name=\"$key\" value=\"ok\" checked disabled=\"disabled\">";
         echo "<label for=\"$key\"><span class=\"check\">✓</span> $value</label>";
       }
      }
      if (   isset($_POST['sub']) && !empty($_POST['sub'])   ) {
        $erase = null;
        $erase = json_encode($erase);
        file_put_contents('archives.json',$erase);
        header("LOCATION: index.php");
      }
   ?>
