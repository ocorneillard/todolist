
      <?php
      $contenu = file_get_contents('archives.json');
      $tr = json_decode($contenu,true);

      foreach ($tr as $key => $value) {
        if ($key == 'number') {
        } else {
          echo "<li><s><input type=\"checkbox\" checked=\"checked\"> $value </s></li>";
        }
      }
      if (   isset($_POST['sub']) && !empty($_POST['sub'])   ) {
        $erase = "";
        $erase = json_encode($erase);
        file_put_contents('archives.json',$erase);
        header("LOCATION: index.php");
      }
      ?>
  <form class="" action="#" method="post">
    <input type="submit" name="sub" value="Effacer">
  </form>
