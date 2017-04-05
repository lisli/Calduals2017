<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package themeHandle
 */


/* OEMBED SIZING
 ========================== */
 
if ( ! isset( $content_width ) )
	$content_width = 600;
	
	
/* THEME SETUP
 ========================== */
 
if ( ! function_exists( 'themeFunction_setup' ) ):
function themeFunction_setup() {

	// Available for translation
	load_theme_textdomain( 'themeTextDomain', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	register_nav_menu( 'primary', __( 'Primary Menu', 'themeTextDomain' ) );

	//Add custom View Everything Page menus
	register_nav_menu( 'view-everything-1', __( 'View Everything 1', 'themeTextDomain' ) );
	register_nav_menu( 'view-everything-2', __( 'View Everything 2', 'themeTextDomain' ) );
	register_nav_menu( 'view-everything-3', __( 'View Everything 3', 'themeTextDomain' ) );
	register_nav_menu( 'view-everything-4', __( 'View Everything 4', 'themeTextDomain' ) );
	register_nav_menu( 'view-everything-5', __( 'View Everything 5', 'themeTextDomain' ) );
	register_nav_menu( 'view-everything-6', __( 'View Everything 6', 'themeTextDomain' ) );

	// Add custom language menu
	register_nav_menu( 'language', __( 'Language Menu', 'themeTextDomain' ) );
	
	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );
}
endif;
add_action( 'after_setup_theme', 'themeFunction_setup' );


/* SIDEBARS & WIDGET AREAS
 ========================== */
function themeFunction_widgets_init() {

	//regular sidebar
	register_sidebar( array(
		'name' => __( 'Sidebar', 'calduals2017' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	//regular sidebar
	register_sidebar( array(
		'name' => __( 'Header Search', 'calduals2017' ),
		'id' => 'header-search',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
	) );

	//top footer
	register_sidebar( array(
		'name' => __( 'Top Footer', 'calduals2017' ),
		'id' => 'top-footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	//bottom footer left
	register_sidebar( array(
		'name' => __( 'Bottom Footer Left', 'calduals2017' ),
		'id' => 'bottom-footer-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	//bottom footer right
	register_sidebar( array(
		'name' => __( 'Bottom Footer Right', 'calduals2017' ),
		'id' => 'bottom-footer-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'themeFunction_widgets_init' );


/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function themeFunction_scripts() {
	// theme style.css file
	wp_enqueue_style( 'themeTextDomain-style', get_stylesheet_uri() );
	//enqueue additional stylesheet for custom css to be added in addition to theme css
	wp_enqueue_style( 'additional-styles', get_stylesheet_directory_uri() . '/custom.css' );
	
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// vendor scripts
//	wp_enqueue_script(
//		'vendor',
//		get_template_directory_uri() . '/assets/vendor/newscript.js',
//		array('jquery')
//	);
	// theme scripts
	wp_enqueue_script(
		'theme-init',
		get_template_directory_uri() . '/assets/theme.js',
		array('jquery')
	);
}    
add_action('wp_enqueue_scripts', 'themeFunction_scripts');


/* MISC EXTRAS
 ========================== */

//add excerpt to pages
function add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'add_excerpts_to_pages' );
 
// Comments & pingbacks display template
include('inc/functions/comments.php');

// Optional Customizations
// Includes: TinyMCE tweaks, admin menu & bar settings, query overrides
include('inc/functions/customizations.php');