<?php

function medicaid_assets() {
    // css files
    wp_enqueue_style( 'main', get_stylesheet_uri(), array(), time());
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome-two', get_template_directory_uri() . '/css/fontawesome.min.css');
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style( 'magnific', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/css/meanmenu.css');
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css');
    wp_enqueue_style( 'colorfulTab', get_template_directory_uri() . '/css/colorfulTab.min.css');
    wp_enqueue_style( 'mark-calender', get_template_directory_uri() . '/css/mark-your-calendar.css');
    wp_enqueue_style( 'simple-calendar', get_template_directory_uri() . '/css/simple-calendar.css');
    wp_enqueue_style( 'vanilla-calendar', get_template_directory_uri() . '/css/vanilla-calendar-min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), time());
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), time());

    // js files
    
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/app.js', array('jquery', 'slick'), time(), true );
    wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/all.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fontawesome-two', get_template_directory_uri() . '/js/fontawesome.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/js/jquery.nice-select.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'plugin', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'colorfulTab', get_template_directory_uri() . '/js/colorfulTab.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'sweetalert', get_template_directory_uri() . '/js/sweetalert2.all.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mark-calendar', get_template_directory_uri() . '/js/mark-your-calendar.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'vanilla-calendar', get_template_directory_uri() . '/js/vanilla-calendar-min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'simple-calendar', get_template_directory_uri() . '/js/jquery.simple-calendar.min.js', array('jquery'), '1.0.0', true );
      
}
add_action( 'wp_enqueue_scripts', 'medicaid_assets' );