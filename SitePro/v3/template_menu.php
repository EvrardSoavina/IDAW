<?php
    function renderMenuToHTML($currentPageId,$currentPageLanguage) {
        // un tableau qui définit la structure du site
        $mymenu = array(
            // idPage tite
            'accueil' => array('Accueil', 'Home'),
            'cv' => array('Cv', 'Resume'),
            'projet' => array('Mes Projets', 'My Projects'),
            'infos-technique' => array('Informations Techniques', 'Technical Information'),
            'contact' => array('Contacts', 'Contacts')
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
            if ($currentPageLanguage == 'fr') {
                if ($pageId == $currentPageId) {
                    echo '<li class="nav-item"><a id="currentpage" class="nav-link js-scroll-trigger" href="index.php?page='.$pageId.'&lang='.$currentPageLanguage.'">'.$pageParameters[0].'</a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page='.$pageId.'&lang='.$currentPageLanguage.'">'.$pageParameters[0].'</a></li>';
                }
            } else {
                if ($pageId == $currentPageId) {
                    echo '<li class="nav-item"><a id="currentpage" class="nav-link js-scroll-trigger" href="index.php?page='.$pageId.'&lang='.$currentPageLanguage.'">'.$pageParameters[1].'</a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page='.$pageId.'&lang='.$currentPageLanguage.'">'.$pageParameters[1].'</a></li>';
                }
            }   
        };
        echo
'       </ul>
</div>
<a id="currentpage" class="nav-link js-scroll-trigger" href="index.php?page='.$currentPageId.'&lang=en">English</a>
<a id="currentpage" class="nav-link js-scroll-trigger" href="index.php?page='.$currentPageId.'&lang=fr">Français</a>
</nav>
        ';
    }
?>