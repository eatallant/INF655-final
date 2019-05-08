<?php 

function sparkmotion_script_enqueue() {
    
    
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/sparkmotion.css', array(), '1.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/sparkmotion.js', array(), '1.0', true);
        
}
add_action( 'wp_enqueue_scripts', 'sparkmotion_script_enqueue' );

function sparkmotion_theme_setup() {
	add_theme_support('menus');
	add_theme_support( 'custom-logo');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('footer', 'Footer Navigation');
	register_nav_menu( 'social media', 'Social Media Links');
}
add_action('init', 'sparkmotion_theme_setup');

add_filter( 'menu_image_default_sizes', function($sizes){
  
  // remove the default 36x36 size
  unset($sizes['menu-36x36']);
  
  // add a new size
  $sizes['menu-18x18'] = array(18,18);
  
  // return $sizes (required)
  return $sizes;
  
});

//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');


