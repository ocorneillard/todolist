<?php



if(isset($_POST['submit'])){
  $contenu = file_get_contents('todo.json');
  $contenu = json_decode($contenu,true);

  // Changement d'array
  $contenu['number'] = $contenu['number'] +1 ;
  $tache = filter_var($_POST['tache'], FILTER_SANITIZE_STRING);
  $tache = trim($tache);
  $contenu['tache'.$contenu['number']] = $tache;

  if (empty($tache) || !isset($tache)) {
    $veriftaches = "pok";
  } else {
    $veriftaches = "ok";
  }

  if ($veriftaches == "ok") {


    // Envoyer donné vers JSON
    $var = json_encode($contenu);
    file_put_contents('todo.json', $var);
  }
  }






 ?>

     <div class="add">
       <form method="POST" action="#">
         <input id="taches" placeholder="Completer une tâche" autofocus="" type="text" name="tache">
         <button type="submit" name="submit" value="envoyer" class="btn style">Ajouter</button>
      </form>
     </div>
