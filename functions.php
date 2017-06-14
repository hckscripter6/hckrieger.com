<?php 

function enqueue_customtheme_styles() {
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('customtheme-style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');

function customtheme_setup() {
       register_nav_menus(array(
              'primary' => __('Primary Menu', 'customtheme')
           ));
           
        add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'customtheme_setup' );

function customtheme_widgets() {
    register_sidebar( array(
        'name'          => __('Sidebar', 'customtheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in the sidebar', 'customtheme'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after-title'   => '</h2>'
        ));  
}
add_action('widgets_init', 'customtheme_widgets');



?>