<?php
/**
 * NoonPost functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NoonPost
 */

if ( !defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function noonpost_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on NoonPost, use a find and replace
     * to change 'noonpost' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'noonpost', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'noonpost_next_prev_post_thumb', 86, 90, true );
    add_image_size( 'noonpost_blog_thumb_landscape', 337, 252, true );
    add_image_size( 'noonpost_blog_thumb_portrait', 337, 421, true );
    add_image_size( 'noonpost_single_post_thumb', 764, 572, true );


    add_theme_support( 'post-formats', array( 'image') );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'noonpost' ),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'noonpost_custom_background_args',
            array(
                'default-color' => 'FEFEFF',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action( 'after_setup_theme', 'noonpost_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function noonpost_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'noonpost_content_width', 640 );
}

add_action( 'after_setup_theme', 'noonpost_content_width', 0 );


// Custom search Form
function noonpost_search_form( $form ) {
    $home_dir= home_url("/");
    $lebel= __("Search","noonpost");

    $form = '<form role="search" action="'.$home_dir.'" method="get" class="search-form" >
                    <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr_x( 'What are you looking for?', 'placeholder' ).'">
                    <button type="submit" value="'. esc_attr__( 'Search' ) .'" class="search-btn">'.$lebel.'</button>
                </form>';

    return $form;

}
add_filter( 'get_search_form', 'noonpost_search_form' );


// Except to 30 Word
function noonpost_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'noonpost_custom_excerpt_length', 999 );

function noonpost_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'noonpost_excerpt_more' );


// Pagenav Function
function noonpost_pagenav() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;

    if ( !$current = get_query_var( 'paged' ) ) {
        $current = 1;
    }

    $args['base'] = str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) );
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = '<i class="arrow_carrot-2left"></i>';
    $args['next_text'] = '<i class="arrow_carrot-2right"></i>';

    if ( $max > 1 ) {
        echo '<ul class="list-inline">';
    }

    echo $pages . paginate_links( $args );

    if ( $max > 1 ) {
        echo '</ul>';
    }

}

//Custom Comments Area
function noonpost_commnets($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
            <ul class="widget-comments">
                <li class="comment-item"><?php
    }?>
                        <div class="comment-author vcard"><?php 
                            if ( $args['avatar_size'] != 0 ) {
                                echo get_avatar( $comment, $args['avatar_size'] ); 
                            }?>
                        </div>
                        <div class="content">
                            <ul class="info list-inline">
                                <?php 
                                printf( __( '<li class="fn">%s</li> <li class="dot"></li>' ), get_comment_author_link());
                                printf(__('<li>%1$s at %2$s</li>'), 
                                get_comment_date(),  
                                get_comment_time() );
                                ?>
                            </ul>

                            <?php comment_text();?>
                            <div class="reply">
                                <?php
                                    comment_reply_link( 
                                        array_merge( 
                                            $args, 
                                            array( 
                                                'add_below' => $add_below, 
                                                'depth'     => $depth, 
                                                'max_depth' => $args['max_depth'] 
                                            ) 
                                        ) 
                                    ); 
                                ?>
                            </div>   
                            <div class="edit"><?php edit_comment_link( __( 'Edit' ), '  ', '' ); ?></div>
                    </div>
                </li>
            </ul>

            <?php

        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.','noonpost' ); ?></em><br/><?php 
        } 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

//comment link extra class add
function comment_reply_link_filter($content){

    $extra_classes = 'link';
    return preg_replace( '/comment-reply-link/', 'comment-reply-link ' . $extra_classes, $content);
}
add_filter('comment_reply_link', 'comment_reply_link_filter', 99);

//comment link extra class add
function comment_edit_link_filter( $output ) {
    $editclass = 'link';
    return preg_replace( '/comment-edit-link/', 'comment-edit-link ' . $editclass, $output, 1 );
}
add_filter( 'edit_comment_link', 'comment_edit_link_filter' );

function comment_form_class_filter( $defaults ) {
    $defaults[ 'class_form' ] = 'widget-form';
    return $defaults;
};

add_filter( 'comment_form_defaults', 'comment_form_class_filter' );


//Category Title
add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category()) {

        $title = single_cat_title( '', false );

    }

    return $title;

});

//Tag Title
add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_tag() ) {

        $title = single_tag_title( '', false );

    }

    return $title;

});
//Author Title
add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_author() ) {

        $title = single_tag_title( '', false );

    }

    return $title;

});