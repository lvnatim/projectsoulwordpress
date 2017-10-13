<?php

function projectsoul_setup_pages_and_posts(){

    add_post_type_support('page', 'excerpt');

}

add_action('init', 'projectsoul_setup_pages_and_posts');



function projectsoul_enqueue_extra_scripts() {
    wp_enqueue_script( 'projectsoul-slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'projectsoul-index', get_template_directory_uri() . '/js/index.js', array('projectsoul-slick'), '20151215', true );

    wp_enqueue_style( 'projectsoul-slick-style', get_template_directory_uri() . '/js/slick/slick.css' );

    wp_enqueue_style( 'projectsoul-slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css' );

    wp_enqueue_style( 'projectsoul-custom-style', get_template_directory_uri() . '/style-custom.css' );
}

add_action( 'wp_enqueue_scripts', 'projectsoul_enqueue_extra_scripts' );


?>