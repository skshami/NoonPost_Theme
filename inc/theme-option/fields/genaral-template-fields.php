<?php
/**
 * Template parts for theme-options.php
 *
 * @package NoonPost
 */


function noonpost_genaral_contact_page_section_field(){
    echo '<h3 style="margin-top:40px;">Contact Page Template Options</h3>';
}

function noonpost_contact_form_shortcode_field(){

    $contact_form_shortcode = esc_attr( get_option( 'noonpost_contact_form_shortcode' ) );

        echo '<input type="text" class="regular-text" name="noonpost_contact_form_shortcode" value="' . esc_attr( $contact_form_shortcode ) . '" placeholder="Contact Form Shortcode Add Here"/>';
      
}
function noonpost_contact_form_title_field(){

    $contact_form_title = esc_attr( get_option( 'noonpost_contact_form_title' ) );

        echo '<input type="text" class="regular-text" name="noonpost_contact_form_title" value="' . esc_attr( $contact_form_title ) . '" placeholder="Add a short Title of Contact Form"/>';
      
}

function noonpost_contact_form_desctiption_field(){

    $contact_form_description = esc_attr( get_option( 'noonpost_contact_form_description' ) );

        echo '<textarea type="text" class="regular-text" name="noonpost_contact_form_description"  placeholder="Add a short Description of Contact Form">' . esc_attr( $contact_form_description ) . '</textarea>';
      
}

function noonpost_contact_maps_field(){

    $contact_maps = esc_html( get_option( 'noonpost_contact_maps' ) );

    echo '<textarea style="height:100px !important;"class="large-text code" name="noonpost_contact_maps" row="10" cols="50" spellcheck="false" placeholder="Add Google Maps Embed URL">' . esc_attr( $contact_maps ) . '</textarea>';
}