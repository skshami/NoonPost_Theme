<?php
/**
 * Template parts for theme-options.php
 *
 * @package NoonPost
 */


function noonpost_header_section_field(){
    return;
}

function noonpost_white_logo_field(){

    $white_logo = esc_attr( get_option( 'noonpost_white_logo' ) );

    if ( empty( $white_logo ) ) {
        echo '<input type="button" class="button button-secondary" value="Upload Logo" id="upload-white-logo-button"> <input type="hidden" id="upload-white-logo" name="noonpost_white_logo" value=""/> <p class="description">Max Logo size [145px*60px]</p>';
        } else {
        echo '<input type="button" class="button button-primary" value="Replace Logo" id="upload-white-logo-button"><input type="hidden" id="upload-white-logo" name="noonpost_white_logo" value="' . $white_logo . '" /> <input type="button" class="button button-primary" value="Remove" id="remove-white-logo"/> <p class="description">Max Logo size [145px*60px]</p>';
    }
    
}

function noonpost_dark_logo_field(){

    $dark_logo = esc_attr( get_option( 'noonpost_dark_logo' ) );

    if ( empty( $dark_logo ) ) {
        echo '<input type="button" class="button button-secondary" value="Upload Logo" id="upload-dark-logo-button"> <input type="hidden" id="upload-dark-logo" name="noonpost_dark_logo" value=""/> <p class="description">Max Logo size [145px*60px]</p>';
        } else {
          echo '<input type="button" class="button button-primary" value="Replace Logo" id="upload-dark-logo-button"><input type="hidden" id="upload-dark-logo" name="noonpost_dark_logo" value="' . $dark_logo . '" /> <input type="button" class="button button-primary" value="Remove" id="remove-dark-logo"/> <p class="description">Max Logo size [145px*60px]</p>';  
    }

}


function noonpost_header_facebook_field(){
    $header_facebook = esc_attr( get_option( 'noonpost_header_facebook' ) );
echo '<input type="text" class="regular-text" name="noonpost_header_facebook" value="' . esc_url( $header_facebook ) . '" placeholder="Type your Facebook URL"/>';
}
function noonpost_header_instagram_field(){
    $header_instagram = esc_attr( get_option( 'noonpost_header_instagram' ) );
echo '<input type="text" class="regular-text" name="noonpost_header_instagram" value="' . esc_url( $header_instagram ) . '" placeholder="Type your Instagram URL"/>';
}
function noonpost_header_twitter_field(){
    $header_twitter = esc_attr( get_option( 'noonpost_header_twitter' ) );
echo '<input type="text" class="regular-text" name="noonpost_header_twitter" value="' . esc_url( $header_twitter ) . '" placeholder="Type your Twitter URL"/>';
}
function noonpost_header_youtube_field(){
    $header_youtube = esc_attr( get_option( 'noonpost_header_youtube' ) );
echo '<input type="text" class="regular-text" name="noonpost_header_youtube" value="' . esc_url( $header_youtube ) . '" placeholder="Type your Youtube URL"/>';
}

