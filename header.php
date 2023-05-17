<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- afficher les scripts et style de WP -->
    <?php wp_head() ?>
    <title>Document</title>
</head>


<body <? body_class()?>>
    <?php 
    global $template; 
    echo basename($template) 
    ?>

<header>
    <nav class="flex justify-between bg-indigo-600 text-white px-24 py-8">
        <a href="<?= home_url('/')?>"class="text-4xl font-bold">GOAT</a>
        <div class="">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'main', //id du menu
                'container' => "ul", // default div mais nous on veut des ul
                'menu_class' => 'flex space-x-5' // class des li
            ))

            ?>
            <?php 
            if(is_home()){ ?>
                <div class="text-indigo-800">
                <?php get_search_form() ?>
            </div>
           <?php }
            ?>
            
        </div>
    </nav>
</header>