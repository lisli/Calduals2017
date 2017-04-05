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
		<?php wp_nav_menu( array( 'theme_location' => 'view-everything-1' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'view-everything-2' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'view-everything-3' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'view-everything-4' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'view-everything-5' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'view-everything-6' ) ); ?>
	
	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>