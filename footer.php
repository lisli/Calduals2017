<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package themeHandle
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo">
	<?php if ( is_active_sidebar( 'top-footer' ) ) : ?>
	<div class="top-footer row">
		<div class="container">
		<?php dynamic_sidebar( 'top-footer' ); ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="bottom-footer row">
		<div class="container">
		<?php if ( is_active_sidebar( 'bottom-footer-left' ) ) : ?>
			<div class="left-widget s_span_6">
				<?php dynamic_sidebar( 'bottom-footer-left' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'bottom-footer-right' ) ) : ?>
			<div class="right-widget s_span_6">
				<?php dynamic_sidebar( 'bottom-footer-right' ); ?>
			</div>
		<?php endif; ?>
		</div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>