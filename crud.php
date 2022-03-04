<?php
   include("config.php");
 
   if (isset($_GET["action"])){
    switch ($_GET["action"]) {

        case "ajouter":
            
            $marequete ="INSERT INTO `tasks` (`id`,`tache`,`etat`) VALUES (NULL, '".$_POST["tache"]."','n')";
            
            break;
            
        case "modifier":
            $marequete="UPDATE `tasks` SET `etat` = 'o' WHERE `tasks`.`id` =".$_GET["id"]; 
            break;

        case "supprimer":
            $marequete="delete from tasks where id=".$_GET["id"];
            
            break;
            default:
        }
        if ($mysqli->query($marequete)){ 
            header('Location:/');
        }
   } else {
   // redirection par défaut
    

        // Je fait une redirection vers la page index.
        header('Location:/');

        
       
       
   }
  

    
  


?>