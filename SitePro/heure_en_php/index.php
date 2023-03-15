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

            $produits = [
                'Livre' => ['en' => array('200'), 'fr' => array('10')],
                'Stickers' => ['en' => array('20'), 'fr' => array('100')]
            ];

            echo $produits['Livre']['en'];

            echo '<br>';

            $produits = [
                'Livre' => ['en' => '200', 'fr' => '10'],
                'Stickers' => ['en' => '10', 'fr' => '100']
            ];
            
            //$sous_produits = ['poids' => 200, 'quantite' => 10, 'prix' => 15]
            echo $produits['Livre']['en'];

            echo '<br>';

            $mymenu = array(
                // idPage tite
                'accueil' => array('Accueil','en1'),
                'cv' => array('Cv','en2'),
                'projet' => array('Mes Projets','en3')
            );

            echo $mymenu;

            echo '<br>';

            foreach($mymenu as $pageId => $pageParameters)      
                echo $pageParameters[1];
                echo '<br>';
        ?>
        
    </body>
</html>