<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui définit la structure du site
        $mymenu = array(
            // idPage tite
            'index' => array('Accueil'),
            'cv' => array('Cv'),
            'projet' => array('Mes Projets')
        );

        echo 
'<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Evrard Soavina</span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="photos/profil.jpg" alt="..." /></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">';
        foreach($mymenu as $pageId => $pageParameters) {
            if ($pageId == $currentPageId) {
                echo 
                '           
                            <li class="nav-item"><a id="currentpage" class="nav-link js-scroll-trigger" href="'.$pageId.'.php">'.$pageParameters[0].'</a></li>
                '
            } else {
                echo 
                '           
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="'.$pageId.'.php">'.$pageParameters[0].'</a></li>
                '
            }

        };
        echo
'           <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cv.php">CV</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="projet.php">Projet</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="infos-technique.php">Infos techniques</a></li> 
        </ul>
</div>
</nav>
        ';
    }
?>Ò