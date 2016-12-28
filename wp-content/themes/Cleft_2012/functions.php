<?php

add_theme_support( 'menus' );
register_nav_menu('main', 'Main Navigation Menu');

if ( function_exists('register_sidebar') )
    register_sidebar(array('before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h4>',
    'after_title' => "</h4>"));

add_action( 'wp_enqueue_scripts', 'cleft_load_scripts' );

function cleft_load_scripts() {
		wp_enqueue_script( 'jquery' );
        // wp_register_script( 'owl-script', get_stylesheet_directory_uri() . '/js/owlcarousel/owl.carousel.js', array('jquery'), false, true );
        // wp_enqueue_script( 'owl-script' );

        // wp_register_style('owl-style-carousel',  get_stylesheet_directory_uri() . '/js/owlcarousel/owl.carousel.css');
        // wp_enqueue_style('owl-style-carousel');

        // wp_register_style('owl-style-theme',  get_stylesheet_directory_uri() . '/js/owlcarousel/owl.theme.css');
        // wp_enqueue_style('owl-style-theme');
}

#-----------------------------------------------------------------
# Display Short Codes in Excerpts and Widgets
#-----------------------------------------------------------------

function improved_trim_excerpt($text) { // Fakes an excerpt if needed
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		//$text = str_replace(']]>', ']]&gt;', $text);

		//$text = strip_tags($text, '<img>');
		$text = preg_replace("/<img[^>]+\>/i", " ", $text);
		$excerpt = do_shortcode($excerpt);
		$excerpt_length = 80;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words)> $excerpt_length) {
			array_pop($words);
			array_push($words, '[...]');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');


add_filter('get_the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_filter('the_excerpt', 'do_shortcode');

add_filter('woocommerce_enable_order_notes_field', '__return_false');
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );


#-----------------------------------------------------------------
# Add WooCommerce Support
#-----------------------------------------------------------------
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
?>
