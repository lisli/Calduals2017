<?php
/**
 * Template Name: Home Page
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" role="main" class="col pull-left span_12">
	<div class="hero">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>

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

	<div class="homepage-lower">
		<div class="homepage-feed recent-posts">
			<h3 class="home-header">Latest News</h3>
			<div>
				<ul>
				<!-- Define our WP Query Parameters -->
				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

				<!-- Start our WP Query -->
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<li>
						<!-- Display the Post Title with Hyperlink & Publish Date -->
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<p class="date"><?php the_date(); ?></p>
					</li>
				<!-- Repeat the process and reset once it hits the limit -->
				<?php 
				endwhile;
				wp_reset_postdata();
				?>
				</ul>
			</div>
		</div>

		<div class="homepage-feed about">
			<h3 class="home-header">About</h3>
			<!-- <div> -->
			<?php
			    $page = get_page_by_title( 'About' );
	 			$the_excerpt = $page->post_excerpt;
			?>
		    	<div class="excerpt"><?php echo $the_excerpt; ?></div>
		        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>">Read More ></a>
	    	<!-- </div> -->
		</div>
	</div>

</section><!-- #primary -->

<?php get_footer(); ?>