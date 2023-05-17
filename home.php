<!-- include header -->
<?php get_header() ?>
<!-- Body content -->
<h1 class="text-3xl font-black uppercase text-center pt-10">Acceuil Blog</h1>

<div class="grid grid-cols-4 gap-3 py-20">
    <?php
    if(have_posts()) :
        while(have_posts()): the_post();
        // include patial card
        get_template_part('partials/_card');
        endwhile;
    endif;
    ?>
</div>

<!-- include footer -->
<?php get_footer()?>
