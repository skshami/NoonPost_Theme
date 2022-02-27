<?php
/**
 * Template parts for theme-options.php
 *
 * @package NoonPost
 */


function noonpost_footer_section_field() {
    return;
}


function newslatter_title_field(){
    $newslatter = esc_attr( get_option('noonpost_newslatter') );
    echo '<input type="text" class="regular-text" name="noonpost_newslatter" value="' . ( $newslatter ) . '" placeholder="Type Newslatter Subscribe Title"/>';
}
function newslatter_description_field(){
    $newslatter_descrip = esc_attr( get_option('noonpost_newslatter_description') );
    echo '<textarea  class="regular-text" name="noonpost_newslatter_description" placeholder="Type Newslatter Subscribe description">' . ( $newslatter_descrip ) . '</textarea>';
}
function newslatter_subscribe_form_shortcode_field(){
    $newslatter_subscribe = esc_attr( get_option('noonpost_newslatter_subscribe_from_shortcode') );
    echo '<input type="text" class="regular-text" name="noonpost_newslatter_subscribe_from_shortcode" value="' . ( $newslatter_subscribe ) . '" placeholder="Add Newslatter Subscribe Form Shortcode"/>';
}



//facebook field
function facebook_url_field() {
    $facebook = esc_attr( get_option( 'noonpost_facebook' ) );
    echo '<input type="text" class="regular-text" name="noonpost_facebook" value="' . esc_url( $facebook ) . '" placeholder="Type your Facebook URL"/>';
}

//instagram field
function instagram_url_field() {
    $instagram = esc_attr( get_option( 'noonpost_instagram' ) );
    echo '<input type="text" class="regular-text" name="noonpost_instagram" value="' . esc_url( $instagram ) . '" placeholder="Type your Instagram URL"/>';
}

//twitter field
function twitter_url_field() {
    $twitter = esc_attr( get_option( 'noonpost_twitter' ) );
    echo '<input type="text" class="regular-text" name="noonpost_twitter" value="' . esc_url( $twitter ) . '" placeholder="Type your Instagram URL"/>';
}
//youtube field
function youtube_url_field() {
    $youtube = esc_attr( get_option( 'noonpost_youtube' ) );
    echo '<input type="text" class="regular-text" name="noonpost_youtube" value="' . esc_url( $youtube ) . '" placeholder="Type your Instagram URL"/>';
}

//copyright field
function copyright_text_field() {
    $Copyright = esc_attr( get_option( 'noonpost_copyright' ) );

    echo '<input type="text" class="widefat" name="noonpost_copyright" value="' . $Copyright . '" placeholder="Write Copyright Information"/><p class="description">You Can Edit Website Copyright Text</p>';

}