<?php
        include("config.php");
        /*
        $content=file_get_contents("https://www.lemonde.fr/cultures-web/rss_full.xml") ;

        $monRSS=new SimpleXMLElement($content);

        //var_dump($monRSS);

        foreach ($monRSS->channel->item as $entry) {

         // echo $entry->title ;

        echo $entry->description ;

        $mysqli->query("INSERT INTO `actu` (`id`, `title`, `description`, `dateins`) VALUES (NULL, '".$entry->title."', '".$entry->description."', CURRENT_TIMESTAMP);");

        }
    ?>
     exit ();*/
    
 
     include ('common/header.html.php');
     include ('modules/module.php');


    include ('common/footer.html.php');
?>





