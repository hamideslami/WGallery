<?php 

function gallery_scripts() {


wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');


}

add_action( 'wp_enqueue_scripts', 'gallery_scripts' );


// Theme setup
function project_setup() {

    // Navigation Menus
    register_nav_menus(array(

        'primary' => __('Primary Menu')
    ));

    // Add featured image support
    add_theme_support('post-thumbnails');
    
    // add_image_size('small-thumbnail' ,220 , 300 , true);


    // Add post format support
    add_theme_support('post-formats', array('gallery'));

}


add_action('after_setup_theme' , 'project_setup');


