<?php
if (isset($_POST["submit"])) {
  if (isset($_POST["test"])) {

    $var = json_encode($_POST['test']);
    file_put_contents('todo.json', $var);

    // $test = ['todo' => $_POST["test"] ];
    // $url = "todo.json";
    // $jsontest = json_encode($test) ;
    // file_put_contents('todo.json',$url);


  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <input type="text" name="test" value="">
      <input type="submit" name="submit" value="envoyer">
    </form>
  </body>
</html>
