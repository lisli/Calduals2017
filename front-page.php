<?php
/**
 * Template Name: Home Page
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" role="main" class="col pull-left span_12">
	<div class="hero">
		<?php 
			$image = get_field('hero_background_image');
			if( !empty($image) ): ?>
			
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>

		<?php if( have_rows('menu_item') ): ?>
		<ul>
			<?php while( have_rows('menu_item') ): the_row(); 
			// vars
			$menu_text = get_sub_field('menu_item_text');
			$menu_link = get_sub_field('menu_item_link');

			?>
			
				<li>
				<?php if( $menu_link ): ?><a href="<?php echo $menu_link; ?>"><?php endif; ?>
				<?php if( $menu_text ): ?><?php echo $menu_text; ?><?php endif; ?>
				<?php if( $menu_link ): ?></a><?php endif; ?>
				</li>
			

			<?php endwhile; ?>
		</ul>
	</div>
		<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; // end of the loop. ?>


<div class="homepage-feed recent-posts">
		<h2 class="home-header">Latest News</h2>
		<ul>
		<!-- Define our WP Query Parameters -->
		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

		<!-- Start our WP Query -->
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<li>
				<!-- Display the Post Title with Hyperlink & Publish Date -->
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<h3><?php the_date(); ?></h3>
			</li>
		<!-- Repeat the process and reset once it hits the limit -->
		<?php 
		endwhile;
		wp_reset_postdata();
		?>
		</ul>
	</div>
</section><!-- #primary -->

<?php get_footer(); ?>