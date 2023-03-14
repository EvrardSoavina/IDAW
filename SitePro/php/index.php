<!DOCTYPE html>
<html>
    <head>
        <title>PHP donne l'heure</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>La date en PHP 2</h1>
        la date d'aujourd'hui est le :
        <?php
            // Affichage de la date
            echo date("d/m/Y");
            echo "<br>";



            $mymenu = array(
                // idPage tite
                'index' => array('Accueil'),
                'cv' => array('Cv'),
                'projet' => array('Mes Projets')
            );
            $tab = array(5,2,5,7,4,6);
            
            foreach($tab as $value){
                echo $value."\n"; };
            
            echo "<br>";

            foreach($tab as $key => $value){
                echo $key." : ".$value."<br>"; }

            foreach($mymenu as $pageId => $pageParameters) {
                echo $pageId." : 
                ".$pageParameters[0]."<br>";
            };
        ?>
        
    </body>
</html>