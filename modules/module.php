
    <h1 class="mt-5">Module</h1>

    <?php
    // Vérification de $_GET["mod"]

    if (isset($_GET["mod"])){

        switch ($_GET["mod"]) {
            case "ajouter ": 
                include($dir_fs."/pages/ajouter.php") ;
              
                case "aide":
                    include($dir_fs."/pages/aide.php") ;
    
              
              
                break;
                default:
                case "accueil":
                    include($dir_fs."/pages/accueil.php") ;
    
            

           

            
        }

    } else {
        include($dir_fs."/pages/accueil.php") ;
    }
    ?>
