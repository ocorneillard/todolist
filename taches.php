<?php
if(isset($_POST['submit'])){
  $contenu = file_get_contents('todo.json');
  $contenu = json_decode($contenu,true);
  $contenu['number'] = $contenu['number'] +1 ;
  $tache = filter_var($_POST['tache'], FILTER_SANITIZE_STRING);
  $tache = trim($tache);
  $contenu['tache'.$contenu['number']] = $tache;

    if (empty($tache) && !isset($tache)) {
      $veriftaches = "pok";
    } else {
      $veriftaches = "ok";
    }

    if ($veriftaches == "ok") {
      $var = json_encode($contenu);
      file_put_contents('todo.json', $var);
    }
  }
 ?>
