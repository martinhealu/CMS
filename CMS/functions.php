<?php

function load_stylesheets()
{

 wp_register_style('font', get_template_directory_uri() . '/css/font-awesome.css', array(), 1, 'all');
 wp_enqueue_style('font');    
        
        
wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
 wp_enqueue_style('bootstrap');  


wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
wp_enqueue_style('stylesheet');  
        

wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array("jquery"), 1, 'all');
 wp_enqueue_script('jquery');

 
wp_register_script('owl', get_template_directory_uri() . '/js/owl.carousel.js', array("jquery"), 1, 'all');
wp_enqueue_script('owl');

wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), 1, 'all');
wp_enqueue_script('script');


}
add_action('wp_enqueue_scripts', 'load_stylesheets', 'get_my_scripts');






// Menu support
add_theme_support('menus');


// Register menus
/*function register_my_menu(){
    register_nav_menu("primary-menu","Primary Menu");
}

add_action("init","register_my_menu");*/

function register_all_my_menus(){
    register_nav_menus([
        "primary-menu" => "Primary Menu",
        "footer_menu" => "Footer Menu"
    ]);
}

add_action("init","register_all_my_menus");

add_theme_support("post-thumbnails");


function register_my_sidebar(){
    register_sidebar([
        "name" => "Sidebar Widget",
        "id" => "sidebar-widget"
    ]);
}

function strappress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'strappress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'strappress' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'strappress' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'strappress' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'strappress_widgets_init' );


?>








