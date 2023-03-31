<?php
function renderMenuToHTML($currentPageId) {
    echo '<header role="banner">';
    echo '<nav class="navbar navbar-expand-md navbar-dark bg-dark">';
    echo '<div class="container">';
    echo '<a class="navbar-brand" href="index.html">EAT\'S ME</a>';
    echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">';
    echo '<span class="navbar-toggler-icon"></span>';
    echo '</button>';
  
    echo '<div class="collapse navbar-collapse" id="navbarsExample05">';
    echo '<ul class="navbar-nav ml-auto pl-lg-5 pl-0">';
    echo '<li class="nav-item">';
    $menuItems = array(
      'index.php' => 'Home',
      'recipes.php' => 'Recipes',
      'signin.php' => 'Sign In',
      'news.php' => 'News'
    );
    
    foreach ($menuItems as $menuItemLink => $menuItemName) {
      if ($menuItemLink == $currentPageId) {
        echo '<li class="nav-item">';
        echo '<a class="nav-link active" href="' . $menuItemLink . '">' . $menuItemName . '</a></li>';
      } else {
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="' . $menuItemLink . '">' . $menuItemName . '</a></li>';
      }
    }
  
    echo '</ul>';
  
    echo '<ul class="navbar-nav ml-auto">';
    echo '<li class="nav-item cta-btn">';
    echo '<a class="nav-link" href="#">Contact Us</a>';
    echo '</li>';
    echo '</ul>';
  
    echo '</div>';
    echo '</div>';
    echo '</nav>';
    echo '</header>';
  }
  