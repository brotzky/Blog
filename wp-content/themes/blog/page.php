<?php
	/* Template Name: Page */

	// get header
	get_header();

	// The Loop
	if(have_posts()) :
		// Executewhile have posts. Do the posts
		while (have_posts()) : the_post(); ?>



		<!-- Main article posts -->
		<article class="test">
			<h2><a href='<?php the_permalink(); ?>'><?php the_title();?></a></h2>
			<?php the_content(); ?>
		</article>

                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
		<!-- /Main article posts -->

		<?php endwhile;
		// If not posts: 'No Content Found'
		else :
			echo '<p>No Content Found</p>';

	// get footer
	get_footer ();

?>