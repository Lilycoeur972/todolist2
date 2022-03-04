<h2 class="mt-5">Accueil</h2>
<?php
     /* Sélection de toutes les lignes */

     $resultQueryTasks = $mysqli->query("SELECT * FROM tasks ORDER BY id DESC");
     
  //  printf("Nombre de lignes affectées (SELECT): %d\n", $resultQueryTasks->affected_rows);
?>

<?php


    foreach ($resultQueryTasks as $rowTask){
  ?>
 
<ul class="list-group">
<li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">


    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0"><?php echo $rowTask["id"];?> - <?php echo $rowTask["tache"];?> ></h6>
        <p class="mb-0 opacity-75"><?php echo $rowTask["dateins"];?></p>
      </div>
      <small class="opacity-50 text-nowrap"> </small>
    </div>

    <?php if ($rowTask["etat"]=="n"){ 
        $linkRealise=$dir_ws."crud.php?action=realiser&id=".$rowTask["id"];
        ?>
        
    <a href ="<?php echo  $linkRealise ;?>" type="button" class="btn btn-outline-success">Réaliser</a>
    <?php } ?>

    <?php if ($rowTask["etat"]=="o"){ ?>

<a type="button" class="btn btn-outline-danger">Supprimer</a>
<?php } ?>

    </li>
    <?php
    }
    ?>

</ul>
