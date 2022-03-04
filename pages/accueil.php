<h2 class="mt-5">Accueil</h2>
<?php
     /* Sélection de toutes les lignes */

     $resultQueryTasks = $mysqli->query("SELECT * FROM tasks ORDER BY id DESC");
     
  //  printf("Nombre de lignes affectées (SELECT): %d\n", $resultQueryTasks->affected_rows);
?>

<?php


