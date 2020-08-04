<?php 

/*
* menplus funtions y definitions
* 
* @package menplus
* @subpackage menplus barber shop
* @since 1.0
*
*/

define('THEMEPATH',get_stylesheet_directory_uri());
define('IMAGES',THEMEPATH . '/assets/img');
define('JAVASCRIPT',THEMEPATH . '/assets/js');

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

if ( ! function_exists('menplus_custom_theme_features') ) {

// Register Theme Features
function menplus_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'image', 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => '#151515',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
    load_theme_textdomain( 'menplus', get_template_directory() . '/languages' );
    
    // size image personalizate
    add_image_size( 'blog_size_image', 825, 533, true );
}
add_action( 'after_setup_theme', 'menplus_custom_theme_features' );

}

/**
 * registrando style y scripts
 */

require_once('includes/scripts-styles.php');


/**
 * registrando menu
 */

require_once('includes/menus.php');

function my_theme_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

function my_before_main_content() {
    echo '<!-- Starting content wrapper for your theme -->';
    echo '<div class="container"><div class="row"><div class="col-sm-12">';
}
add_action( 'woocommerce_before_main_content', 'my_before_main_content' );

function my_after_main_content() {
    echo '</div></div></div>';
    echo '<!-- Ending content wrapper for your theme -->';
}
add_action( 'woocommerce_after_main_content', 'my_after_main_content' );


// Eliminar los CSS de WooCommerce uno por uno
add_filter( 'woocommerce_enqueue_styles', 'woocommerce_dequeue_styles' );
function woocommerce_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Eliminar todos los CSS de WooCommerce de golpe
add_filter( 'woocommerce_enqueue_styles', '__return_false' );