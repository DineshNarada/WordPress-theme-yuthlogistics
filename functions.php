<?php

// Enqueue CSS files
function yuthlogistic_enqueue_assets() {

    // Main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // External libraries
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/lib/aos/aos.css', array(), null);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/lib/carousel/owl.carousel.min.css', array(), null);
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/lib/carousel/owl.theme.default.min.css', array('owl-carousel'), null);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/lib/fontawesome/css/all.min.css', array(), null);
}
add_action('wp_enqueue_scripts', 'yuthlogistic_enqueue_assets');


// Enqueue all theme styles
function yuthlogistic_enqueue_styles() {
    
    // Main style.css
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Core CSS files
    wp_enqueue_style('layout-style', get_template_directory_uri() . '/assets/css/layout.css', array('theme-style'));
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array('theme-style'));
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array('theme-style'));

    // Component CSS files
    wp_enqueue_style('carousel-style', get_template_directory_uri() . '/assets/css/components/carousel.css', array('theme-style'));
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/components/footer.css', array('theme-style'));
    wp_enqueue_style('navbar-style', get_template_directory_uri() . '/assets/css/components/navbar.css', array('theme-style'));
}
add_action('wp_enqueue_scripts', 'yuthlogistic_enqueue_styles');


// Enqueue JS files
function yuthlogistic_enqueue_scripts() {

    // jQuery (WordPress includes it automatically)
    wp_enqueue_script('jquery');

    // Owl Carousel JS
    wp_enqueue_script(
        'owl-carousel-js',
        get_template_directory_uri() . '/assets/lib/carousel/owl.carousel.min.js',
        array('jquery'),
        null,
        true
    );

    // AOS JS
    wp_enqueue_script(
        'aos-js',
        get_template_directory_uri() . '/assets/lib/aos/aos.js',
        array(),
        null,
        true
    );

    // Custom script.js
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'yuthlogistic_enqueue_scripts');


// WordPress auto page title support
add_theme_support('title-tag');

?>
