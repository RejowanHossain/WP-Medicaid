<?php

// medicaid Custom Widgets

function medicaid_widgets(){

    // Sidebar
    // register_sidebar(array(
    //     'name' => __('Main Sidebar','medicaid'),
    //     'id' => 'main_sidebar',
    //     'description' => __('Main Sidebar for Blog Page', 'medicaid'),
    //     'before_widget' => '<div class="single-sidebar">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h4>',
    //     'after_title' => '</h4>'
    // ));

    // Sidebar search
    register_sidebar(array(
        'name' => __('Sidebar Search','medicaid'),
        'id' => 'search',
        'description' => __('Footer Widget social for Showing Widget', 'medicaid'),

    ));

    // Sidebar 1
    register_sidebar(array(
        'name' => __('Sidebar 1','medicaid'),
        'id' => 'sidebar1',
        'description' => __('Widget 1 for Showing Widget', 'medicaid'),
        'before_widget' => '<div class="footer_logo footer_social">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Sidebar 2
    register_sidebar(array(
        'name' => __('Sidebar 2','medicaid'),
        'id' => 'sidebar2',
        'description' => __(' Widget 2 for Showing Widget', 'medicaid'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Sidebar 3
    register_sidebar(array(
        'name' => __('Sidebar 3','medicaid'),
        'id' => 'sidebar3',
        'description' => __(' Widget 3 for Showing Widget', 'medicaid'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 4
    // register_sidebar(array(
    //     'name' => __('Footer Sidebar 4','medicaid'),
    //     'id' => 'footer_sidebar4',
    //     'description' => __('Footer Widget 4 for Showing Widget', 'medicaid'),
    //     'before_widget' => '<div class="single-footer contact-box">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h4>',
    //     'after_title' => '</h4>'
    // ));

    // Footer copyright
    // register_sidebar(array(
    //     'name' => __('Footer Copyright','medicaid'),
    //     'id' => 'copyright',
    //     'description' => __('Footer Widget copyright for Showing Widget', 'medicaid'),
        
    // ));

    // Footer social
    // register_sidebar(array(
    //     'name' => __('Footer Social','medicaid'),
    //     'id' => 'social',
    //     'description' => __('Footer Widget social for Showing Widget', 'medicaid'),

    // ));

    // ############### footer widgets ####################

    // Footer Widget 1
    register_sidebar(array(
        'name' => __('Footer Widget 1','medicaid'),
        'id' => 'footer1',
        'description' => __(' Widget 1 for Showing footer info', 'medicaid'),
        'before_widget' => '<div class="footer-logo">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));

    // Footer Widget 2
    register_sidebar(array(
        'name' => __('Footer Widget 2','medicaid'),
        'id' => 'footer2',
        'description' => __(' Widget 2 for Showing footer info', 'medicaid'),
        'before_widget' => '<div class="footer-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Footer Widget 1
    register_sidebar(array(
        'name' => __('Footer Widget 3','medicaid'),
        'id' => 'footer3',
        'description' => __(' Widget 3 for Showing footer info', 'medicaid'),
        'before_widget' => '<div class="footer-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Footer Widget 1
    register_sidebar(array(
        'name' => __('Footer Widget 4','medicaid'),
        'id' => 'footer4',
        'description' => __(' Widget 4 for Showing footer info', 'medicaid'),
        'before_widget' => '<div class="footer-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));



}
add_action('widgets_init', 'medicaid_widgets');