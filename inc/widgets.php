<?php
/**
 * NoonPost Register widget functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NoonPost
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function noonpost_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Latest Posts', 'noonpost' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add Latest Posts here.', 'noonpost' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<div class="section-title"><h5>',
            'after_title'   => '</h5></div>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Categories', 'noonpost' ),
            'id'            => 'sidebar-2',
            'description'   => esc_html__( 'Add Categories widgets here.', 'noonpost' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<div class="section-title"><h5>',
            'after_title'   => '</h5></div>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Instagram', 'noonpost' ),
            'id'            => 'instagram-sideber',
            'description'   => esc_html__( 'Add Instagram widgets here.', 'noonpost' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<div class="section-title"><h5>',
            'after_title'   => '</h5></div>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Tags', 'noonpost' ),
            'id'            => 'tags-sideber',
            'description'   => esc_html__( 'Add Tags widgets here.', 'noonpost' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<div class="section-title"><h5>',
            'after_title'   => '</h5></div>',
        )
    );
    
}
add_action( 'widgets_init', 'noonpost_widgets_init' );
