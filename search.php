<!-- include header -->
<?php get_header() ?>
<!-- Body content -->
<div class="my-10">
<h1 class="text-3xl font-black uppercase text-center m-5">Search page</h1>
<div class="mx-auto max-w-2xl bg-indigo-200 p-8">
    <p class="text-2xl font-bold text-center text-indigo-800">Resultat de la recherche : <?= get_search_query() ?></p>
    <!-- loop wp
    1 check if post exist
    2 if true start the loop
    3 show title and link
-->

    <?php
    if(have_posts()) :
        while(have_posts()): the_post()
    ?>
    <a href="<?php the_permalink() ?>" class="m-1 text-xl">
        <p class="border-2"><?php the_title() ?></p>
    </a>
    <?php endwhile;
    endif;
    ?>
</div>
</div>
<!-- include footer -->
<?php get_footer()?>
