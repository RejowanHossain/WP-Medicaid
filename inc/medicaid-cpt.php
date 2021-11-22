<?php
/*

Plugin Name: medicaid Custom Post Type
Description: Custom post type for medicaid theme
Text Domain: medicaid

*/


function medicaid_custom_posts(){

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name'              => __('Sliders', 'medicaid'),
            'singular_name'     => __('Slider', 'medicaid'),
            'add_new'           => __( 'Add New Slider', 'medicaid' ),
            'add_new_item'      => __( 'Add New Slider', 'medicaid' ),
            'featured_image'    => _x( 'Slider Image', 'medicaid' ),
            'edit_item'         => __( 'Edit Slider', 'medicaid' ),
            'search_items'      => __( 'Search Slider', 'medicaid' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-images-alt',
    ));

    // Services Custom Post
    register_post_type('services', array(
        'labels' => array(
            'name'              => __('Services', 'medicaid'),
            'singular_name'     => __('Service', 'medicaid'),
            'add_new'           => __( 'Add New Service', 'medicaid' ),
            'add_new_item'      => __( 'Add New Service', 'medicaid' ),
            'featured_image'    => _x( 'Service Image', 'medicaid' ),
            'edit_item'         => __( 'Edit Service', 'medicaid' ),
            'search_items'      => __( 'Search Service', 'medicaid' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
         'menu_icon' => 'dashicons-store',
    ));

   // Team Custom Post
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'medicaid'),
            'singular_name' => __('Team', 'medicaid'),
            'add_new'           => __( 'Add New Team', 'medicaid' ),
            'add_new_item'      => __( 'Add New Team', 'medicaid' ),
            'featured_image'    => _x( 'Team Image', 'medicaid' ),
            'edit_item'         => __( 'Edit Team', 'medicaid' ),
            'search_items'      => __( 'Search Team', 'medicaid' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons- networking',
    ));

    // Testimonials Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'medicaid'),
            'singular_name' => __('Testimonial', 'medicaid'),
            'add_new'           => __( 'Add New Testimonial', 'medicaid' ),
            'add_new_item'      => __( 'Add New Testimonial', 'medicaid' ),
            'featured_image'    => _x( 'Testimonial Image', 'medicaid' ),
            'edit_item'         => __( 'Edit Testimonial', 'medicaid' ),
            'search_items'      => __( 'Search Testimonial', 'medicaid' ),
        ),
        'public' => true,
        'supports' => array( 'thumbnail', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons-format-quote',
    ));

    // Gallery Custom Post
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Galleries', 'medicaid'),
            'singular_name' => __('Gallery', 'medicaid'),
            'add_new'           => __( 'Add New Gallery', 'medicaid' ),
            'add_new_item'      => __( 'Add New Gallery', 'medicaid' ),
            'featured_image'    => _x( 'Gallery Image', 'medicaid' ),
            'edit_item'         => __( 'Edit Gallery', 'medicaid' ),
            'search_items'      => __( 'Search Gallery', 'medicaid' ),
        ),
        'public' => true,
        'supports' => array('title', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons-camera-alt',
    ));

    // Portfolio Custom Post
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'medicaid'),
            'singular_name' => __('Portfolio', 'medicaid'),
            'add_new'           => __( 'Add New Portfolio', 'medicaid' ),
            'add_new_item'      => __( 'Add New Portfolio', 'medicaid' ),
            'featured_image'    => _x( 'Portfolio Image', 'medicaid' ),
            'edit_item'         => __( 'Edit Portfolio', 'medicaid' ),
            'search_items'      => __( 'Search Portfolio', 'medicaid' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes'),
         'menu_icon' => 'dashicons-portfolio',
    ));

    // Portfolio Taxonomy

    register_taxonomy('portfolio-cat', 'portfolio',array(
        'labels' => array(
            'name' => __('Categories', 'medicaid'),
            'singular_name' => __('Category', 'medicaid'),
        ),
        'hierarchical' => true,
        'show_admin_column' => true
    ));

}
add_action('init', 'medicaid_custom_posts');