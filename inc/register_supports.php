<?php

// function supports
function goat_supports() {
    // affiche balise title dynamique
    add_theme_support('title-tag');
    // déclarer emplacement de menu
    register_nav_menus(array(
        'main' => "Menu principal",
        'footer' => 'Menu Footer'
    ));
    // afficher featured images/ 
    add_theme_support('post-thumbnails');
}