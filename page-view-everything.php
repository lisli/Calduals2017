<?php
/**
 * Template Name: View Everything Page
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" class="row" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'page' ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'view-everything' ) ); ?>
	
	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>