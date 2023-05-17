<?php

use function FakerPress\register;

require_once get_template_directory().'/inc/register_assets.php';
require_once get_template_directory().'/inc/register_supports.php';
require_once get_template_directory().'/inc/modify_excerpt.php';

function getCardGoat($url_img, $title)
{
    // $url_img = "steve.png";
    // $title = "Steve Jobs";
    include(get_template_directory().'/partials/_card_goat.php');
}


// Add style + Js
add_action('wp_enqueue_scripts', 'goat_register_assets');
add_action('after_setup_theme', 'goat_supports');
// modify lentgth of excerpt
add_filter('excerpt_length', 'goat_length_excerpt', 999);
