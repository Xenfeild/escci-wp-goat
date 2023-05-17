<!-- include header -->
<?php get_header() ?>
<!-- Body content -->

<div class="">
    <?php
    if(have_posts()) :
        while(have_posts()): the_post(); ?>
    <h2 class="font-black text-3xl pb-6 text-center mt-10"><?php the_title()?></h2>
    <div class="bg-green-100 m-10 rounded p-5">
        <?php the_content()?>
    </div>
        <p>
            Publié le : <?php the_date()?>
            Auteur: <?php the_author() ?>
            Carthégorie <?php the_category() ?>
        </p>
    <? endwhile;
    endif;
    ?>
</div>

<!-- include footer -->
<?php get_footer() ?>