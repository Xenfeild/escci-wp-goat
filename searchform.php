<form action="/" method="get">
	<!-- <label for="search">Search in <?php echo home_url( '/' ); ?></label> -->
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="border-2 border-gray-500 p-3 rounded-lg" placeholder="rechercher" />
	<input type="submit" alt="Search" class="text-white m-5 border-gray-100 border-white-2 rounded-lg p-2" />
</form>