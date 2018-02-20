<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
      $contenu = file_get_contents('archives.json');
      $tr = get_object_vars(json_decode($contenu));

      foreach ($tr as $key => $value) {
        if ($key == 'number') {
        } else {
          echo "<li><s><input type=\"checkbox\" checked=\"checked\"> $value </s></li>";
        }
      }
      ?>
    </p>

  </body>
</html>
