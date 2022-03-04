<h2 class="mt-5">aide</h2>

<?php
     /* Sélection de toutes les lignes */

     $resultQueryAide = $mysqli->query("SELECT * FROM aide ORDER BY id DESC");
     
  //  printf("Nombre de lignes affectées (SELECT): %d\n", $resultQueryTasks->affected_rows);
?>

<?php
if ($resultQueryAide->num_rows<1) {
    ?>

no
 if 
<?php
    # code...
} else {
    

    foreach ($resultQueryAide as $rowAide){
        ?>

        <h3><?php echo  $rowAide["nom"]; ?> </h3>
        <h4><?php echo  $rowAide["description"]; ?> </h4>
        

     

    <?php
    }// end foreach
    # code...
   
}// end if



?>