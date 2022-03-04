<h2 class="mt-5">acccueil</h2>
<?php
     /* Sélection de toutes les lignes */

     $resultQueryActu = $mysqli->query("SELECT * FROM actu ORDER BY id DESC");
     
  //  printf("Nombre de lignes affectées (SELECT): %d\n", $resultQueryTasks->affected_rows);
?>

<?php


    foreach ($resultQueryActu as $rowActu){
  ?>
  <ul class="list-group">
<li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">


    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0"><?php echo $rowActu["id"];?> - <?php echo $rowActu["title"];?> ></h6>
        <p class="mb-0 opacity-75"><?php echo $rowActu["dateins"];?></p>
      </div>
      <small class="opacity-50 text-nowrap"> </small>
    </div>

   

    </li>
    <?php
    }
    ?>

</ul>

 