<?php

// function register esseys to WP
function goat_register_assets() 
{
    // tailwindcss
    wp_enqueue_script(
        'goat_tailwindcss',
        "https://cdn.tailwindcss.com"
    );

    // goat style
    wp_enqueue_style(
        'goat-style',
        get_template_directory_uri().'/assets/css/style.css',
        [],
        '1.1'
    );
    // main css
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        [],
        '1.1'
    );

    // google font
    wp_enqueue_style(
        'lato-font',
        "https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap",
        [],
        '1.0'
    );
}

