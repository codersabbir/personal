<?php
function personal_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary', 'personal' ) 
        )
    );

}
add_action( 'after_setup_theme', 'personal_setup' );

    function personal_scripts(){
        wp_enqueue_style( 'linearicons-style', get_theme_file_uri('/css/linearicons'));
        wp_enqueue_style( 'font-awesome', get_theme_file_uri('/css/font-awesome.min.css'));
        wp_enqueue_style( 'bootstrap', get_theme_file_uri('/css/bootstrap.css'));
        wp_enqueue_style( 'magnific-popup', get_theme_file_uri('/css/magnific-popup.css'));
        wp_enqueue_style( 'jquery-ui', get_theme_file_uri('/css/jquery-ui.css'));
        wp_enqueue_style( 'nice-select', get_theme_file_uri('/css/nice-select.css'));
        wp_enqueue_style( 'animate.min', get_theme_file_uri('/css/animate.min.css'));
        wp_enqueue_style( 'owl-carousel', get_theme_file_uri('/css/owl-carousel.css'));
        wp_enqueue_style( 'main', get_theme_file_uri('/css/main.css'));
        wp_enqueue_style('style-sheet',get_stylesheet());
        wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/vendor/bootstrap.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'easing', get_theme_file_uri( '/js/easing.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'hoverIntent', get_theme_file_uri( '/js/hoverIntent.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'superfish', get_theme_file_uri( '/js/superfish.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'jquery.ajaxchimp', get_theme_file_uri( '/js/jquery.ajaxchimp.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'jquery.magnific-popup', get_theme_file_uri( '/js/jquery.magnific-popup.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'jquery.tabs', get_theme_file_uri( '/js/jquery.tabs.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'jquery-nice-select', get_theme_file_uri( '/js/jquery.nice-select.min.js' ), array('jquery'), '4.0', true );
       
        wp_enqueue_script( 'isotope.pkgd', get_theme_file_uri( '/js/isotope.pkgd.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'waypoints', get_theme_file_uri( '/js/waypoints.min.js' ), array('jquery'), '4.0', true );
      
        wp_enqueue_script( 'jquery.counterup', get_theme_file_uri( '/js/jquery.counterup.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'simple-skillbar', get_theme_file_uri( 'js/simple-skillbar.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'owl.carousel', get_theme_file_uri( 'js/owl.carousel.min.js' ), array('jquery'), '4.0', true );
        wp_enqueue_script( 'mail-script', get_theme_file_uri( 'js/mail-script.js' ), array('jquery'), '4.0', true );

        wp_enqueue_script( 'google-api', 'google-api','//maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA');
        wp_enqueue_script( 'main', get_theme_file_uri( 'js/main.js' ), array('jquery'), time(), true );

    }
add_action( 'wp_enqueue_scripts', 'personal_scripts' );


