<div class="shadow max-w-sm bg-blue-100 m-10 ">
    <a href="<?php the_permalink() ?>">
    <div class="p-5">
        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
    </div>
    <div class="p-10">
        <p class="text-3xl font-bold mb-10 "><?php the_title()?></p>
        <div>
            <?php the_excerpt()?>
        </div>
        <p class="mt-5"><?php the_time(get_option('date_format')) ?></p>
        </a>
    </div>
</div>