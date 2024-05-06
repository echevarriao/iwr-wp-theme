<?php

add_action('wp_enqueue_scripts', 'mse_load_css_js_foundation');

function mse_load_css_js_foundation(){
    
    $path = get_template_directory_uri();
    
    wp_enqueue_style('normalize-style', "$path/css/normalize.css");
    wp_enqueue_style('foundation-style', "$path/css/foundation.min.css");
    wp_enqueue_style('fonts-style', "$path/css/fonts.css");
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('foundation-custom-style', "$path/css/app.css");

    wp_enqueue_script('foundation-lib-jquery',  "$path/js/vendor/jquery.js");
    wp_enqueue_script('foundation-jquery',  "$path/js/foundation.min.js");
    wp_enqueue_script('modernizr',  "$path/js/modernizr.js");

}

function biomed_widgets_init() {

    for($itl_regWidget = 1; $itl_regWidget < 5; $itl_regWidget++){

    register_sidebar(
		 
      array(
    'name' => __( "Page Widget $itl_regWidget", 'biomed_foundation' ),
    'id' => "widget-$itl_regWidget",
    'description' => __("Widget that displays specific content."),
    'before_title' => '<h3 class = "fp-column-titles">',
    'after_title' => '</h3>',
    'before_widget' => '',
    'after_widget' => '',

    ));

    }

	register_sidebar( array(
		'name' => __( 'Left Column Row 1', 'biomed_foundation' ),
		'id' => 'left-first-row-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s fp-format-div">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="fp-widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Center Column Row 1', 'biomed_foundation' ),
		'id' => 'center-first-row-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s fp-format-div">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="fp-widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Right Column Row 1', 'biomed_foundation' ),
		'id' => 'right-first-row-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s fp-format-div">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="fp-widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Left Column Row 2', 'biomed_foundation' ),
		'id' => 'left-second-row-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s fp-format-div">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="fp-widget-title-black">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Center Column Row 2', 'biomed_foundation' ),
		'id' => 'center-second-row-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s fp-format-div">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="fp-widget-title-black">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Right Column Row 2', 'biomed_foundation' ),
		'id' => 'right-second-row-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s fp-format-div">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="fp-widget-title-black">',
		'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'biomed_widgets_init' );

add_action( 'after_setup_theme', 'biomed_foundation_setup' );

function biomed_foundation_setup(){
    
	// Add default posts and comments RSS feed links to <head>.

	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.

	register_nav_menu( 'primary', __( 'Primary Menu', 'biomed_foundation' ) );

	// Add support for a variety of post formats

	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image', 'video' ) );
    
	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images

	add_theme_support( 'post-thumbnails' );
    
}

// for foundation

if (!function_exists('GC_menu_set_dropdown')) :

function GC_menu_set_dropdown($sorted_menu_items, $args) {
  $last_top = 0;
  foreach ($sorted_menu_items as $key => $obj) {
    // it is a top lv item?
    if (0 == $obj->menu_item_parent) {
      // set the key of the parent
      $last_top = $key;
    } else {
      $sorted_menu_items[$last_top]->classes['dropdown'] = 'has-dropdown';
    }
  }

  return $sorted_menu_items;
}
endif;

add_filter('wp_nav_menu_objects', 'GC_menu_set_dropdown', 10, 2);

class GC_walker_nav_menu extends Walker_Nav_Menu {

  // add classes to ul sub-menus
  function start_lvl(&$output, $depth) {
    // depth dependent classes
    $indent = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent

    // build html
    $output .= "\n" . $indent . '<ul class="dropdown">' . "\n";
  }
}

add_action('init', 'biomed_load_menus');

function biomed_load_menus(){
    
    register_nav_menus(array(

    'top-menu' => 'Top Menu',                             
    'left-menu' => 'Left Menu',                             
    'right-menu' => 'Right Menu',                             
    'footer-menu' => 'Footer Menu',                             

    ));
    
}

?>