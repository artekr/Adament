<?php
/**
 * Template Name: About Me
 *
 */

get_header(); ?>
<div class="container"> <div class="row">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div></div>

<?php get_footer(); ?>
