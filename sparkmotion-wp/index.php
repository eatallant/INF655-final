<?php

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php 
				if( have_posts() ):
					while( have_posts() ): the_post(); ?>
			
						
						<p><?php the_content(); ?></p>
					<?php endwhile;
				endif;
			?>
		

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
