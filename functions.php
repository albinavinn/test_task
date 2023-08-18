<?php

add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
	wp_enqueue_style( 'style', get_template_directory_uri() . './assets/template.css' );



	
    
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );


?>
