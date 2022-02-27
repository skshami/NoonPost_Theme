<?php
/**
 * NoonPost Enqueue scripts and styles functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NoonPost
 */


/**
 * Enqueue scripts and styles.
 */
function noonpost_scripts() {
    wp_enqueue_style( 'noonpost-fonts', '//fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap', false  );
    wp_enqueue_style( 'noonpost-all', get_template_directory_uri() . '/assets/css/all.css' , array(), _S_VERSION );
    wp_enqueue_style( 'noonpost-elegant', get_template_directory_uri() . '/assets/css/elegant-font-icons.css' , array(), _S_VERSION );
    wp_enqueue_style( 'noonpost-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), _S_VERSION );
    wp_enqueue_style( 'noonpost-owl', get_template_directory_uri() . '/assets/css/owl.carousel.css' , array(), _S_VERSION );
    wp_enqueue_style( 'noonpost-main-style', get_template_directory_uri() . '/assets/css/style.css' , array(), _S_VERSION );
    wp_enqueue_style( 'noonpost-custom', get_template_directory_uri() . '/assets/css/custom.css' , array(), _S_VERSION );
    wp_enqueue_style( 'noonpost-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'noonpost-style', 'rtl', 'replace' );

    wp_enqueue_script( 'noonpost-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'noonpost-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'noonpost-ajaxcontact', get_template_directory_uri() . '/assets/js/ajax-contact.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'noonpost-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'noonpost-switch', get_template_directory_uri() . '/assets/js/switch.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'noonpost-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'noonpost-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}

add_action( 'wp_enqueue_scripts', 'noonpost_scripts' );


 
//Enqueue required javascript libraries callback

function noonpost_options_custom_settings_scripts(){

    //enqueue media js library to use wordpress media library in our theme.
    wp_enqueue_media();
    
    // wp_register_style( 'noonpost-admin-style', get_template_directory_uri() . '/assets/css/admin/noonpostadmin.css', array( ), _S_VERSION, 'all' );
    // wp_enqueue_style( 'noonpost-admin-style');

    wp_register_script( 'noonpost-admin-script', get_template_directory_uri() . '/assets/js/admin/noonpostadmin.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'noonpost-admin-script' );
}

add_action( 'admin_enqueue_scripts', 'noonpost_options_custom_settings_scripts' );
