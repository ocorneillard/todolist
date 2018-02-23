
  <?php
    $contenu = file_get_contents('archives.json');
    $tr = json_decode($contenu,true);

    foreach ($tr as $key => $value) {
      if ($key == 'number') {
       } else {
        echo "<p><s><input type=\"checkbox\" checked=\"checked\"> $value </s></p>";
       }
      }
      if (   isset($_POST['sub']) && !empty($_POST['sub'])   ) {
        $erase = "";
        $erase = json_encode($erase);
        file_put_contents('archives.json',$erase);
        header("LOCATION: index.php");
      }
   ?>
