<?php

//import database.php

require get_template_directory() . '/inc/database.php';
require get_template_directory() . '/inc/reservations.php';

function lapizzeria_styles() {
    //adding stylesheets

    //Normalise CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    
    //style.css
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize','googlefont'), '1.0');

    // Google Font 
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    //Font Awesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), '6.2.1');

    // Fluidbox
    // Lightbox CSS
    wp_enqueue_style('fluidboxcss', get_template_directory_uri() . '/css/fluidbox.min.css', array(), '1.0.0');
    //enqueue style
    wp_enqueue_style('normalize');
    wp_enqueue_style('style');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('googlefont');
    wp_enqueue_style('fluidboxcss');

     //JQuery
     wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
     wp_enqueue_script('fluidboxjs', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array('jquery'), '1.0.0', true);
    //Add Javascript
    wp_enqueue_script('jquery');
    wp_enqueue_script('script');
    wp_enqueue_script('fluidboxjs');
    

}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// Create the menu//
function lapizzeria_menus(){
    // Worpress function
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
        'social-menu' => 'Social Menu'
    ));
}
//Hook

add_action('init', 'lapizzeria_menus');

//Enable Feature Images and other stuff
function lapizzeria_setup(){
    // Register new image size
    add_image_size('boxes', 437, 291, true);
    add_image_size('specialties', 768, 450, true);
    
    // Add featured image
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'lapizzeria_setup');


function lapizzeria_specialties() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizza', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzas found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzas found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'specialties' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'specialties', $args );
}

add_action( 'init', 'lapizzeria_specialties' );

//creates a widget Zone 
function lapizzeria_widgets() {

    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-primary">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'lapizzeria_widgets');