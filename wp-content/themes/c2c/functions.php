<?php
// THEME_URL = url dir theme
// CORE = url /core
define('THEME_URL', get_stylesheet_directory() );
define('CORE',THEME_URL."/core");

// /core/init.php
require_once(CORE . "/init.php");

// width content
if(!isset($content_width)){
    $content_width = 1920;
}

// role
if( !function_exists('c2c_theme_setup')){
    function c2c_theme_setup(){
        // text domain
        $language_folder = THEME_URL."/languages";
        load_theme_textdomain('c2c',$language_folder);

        //link RSS
        add_theme_support('automatic-feed-links');

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );




    }
    add_action('init','c2c_theme_setup');

}

add_action( 'init', 'register_product_funiture_post_type' );
function register_product_funiture_post_type() {
  $labels = array(
	'name'               => __( 'Product Funiture' ),
    'singular_name'      => __( 'Product Funiture' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
  );
  register_post_type( 'product_funiture', $args );
}

add_action( 'init', 'register_product_finishes_post_type' );
function register_product_finishes_post_type() {
  $labels = array(
	'name'               => __( 'Product Finishes' ),
    'singular_name'      => __( 'Product Finishes' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
  );
  register_post_type( 'product_finishes', $args );
}


add_action( 'init', 'register_project_post_type' );
function register_project_post_type() {
  $labels = array(
	'name'               => __( 'Projects' ),
    'singular_name'      => __( 'Projects' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
  );
  register_post_type( 'project', $args );
}

add_action( 'init', 'register_testimonial_post_type' );
function register_testimonial_post_type() {
  $labels = array(
	'name'               => __( 'Testimonials' ),
    'singular_name'      => __( 'Testimonial' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
  );
  register_post_type( 'testimonial', $args );
}

add_action( 'init', 'register_our_team_post_type' );
function register_our_team_post_type() {
  $labels = array(
	'name'               => __( 'Our Team' ),
    'singular_name'      => __( 'Our Team' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
  );
  register_post_type( 'our_team', $args );
}

add_action( 'init', 'register_news_post_type' );
function register_news_post_type() {
  $labels = array(
	'name'               => __( 'News' ),
    'singular_name'      => __( 'News' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
  );
  register_post_type( 'news', $args );
}

add_action( 'init', 'register_services_post_type' );
function register_services_post_type() {
  $labels = array(
	'name'               => __( 'Services' ),
    'singular_name'      => __( 'Service' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
  );
  register_post_type( 'services', $args );
}


add_action( 'init', 'register_faqs_post_type' );
function register_faqs_post_type() {
  $labels = array(
	'name'               => __( 'FAQs' ),
    'singular_name'      => __( 'FAQ' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit' ),
    'new_item'           => __( 'New' ),
    'all_items'          => __( 'All' ),
    'view_item'          => __( 'View' ),
    'search_items'       => __( 'Search' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
	 
  );
  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','author' ),
    'taxonomies'=> array( 'category' ),
  );
  register_post_type( 'faqs', $args );
}





function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">Home';
		
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}



function add_scripts(){
    wp_enqueue_script('main',get_template_directory_uri() . '/js/main.js');
    // wp_enqueue_script('header',get_template_directory_uri() . '/js/header.js');
    // wp_enqueue_script('footer',get_template_directory_uri() . '/js/footer.js');

    wp_enqueue_script('vendor-css',get_template_directory_uri() . '/js/vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js-node_modules_css-loader_dist_runtime_-488714.js');
    // wp_enqueue_script('vendor-bootstrap',get_template_directory_uri() . '/js/vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js-node_modules_style-loader_dist_runtim-c8e2e1.js');
}
add_action('wp_enqueue_scripts','add_scripts');


