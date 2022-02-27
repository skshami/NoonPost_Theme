<?php
/**
 * NoonPost functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NoonPost
 */

 
//Theme Option Page
function noonpost_theme_options(){
    //Noonpost Option admin Page
    add_menu_page(  'Theme Options',                      //Page Title
                    'NoonPost',                           //Menu Title
                    'manage_options',                     //capability
                    'noonpost_theme_options',             //Menu slug
                    'noonpost_theme_option_genaral_page', //callback function 
                    'dashicons-art',                      //Icon url
                    59                                    //Menu posotion 
                    
    );

    //Genaral Sub-Page
    add_submenu_page(   'noonpost_theme_options',               //parent_slug  
                        'Theme Options',                        //page_title  
                        'Genaral',                              //menu_title 
                        'manage_options',                       //capability   
                        'noonpost_theme_options',               //menu_slug 
                        'noonpost_theme_option_genaral_page',   //callback function
                        
    );
    
    //Header Sub-Page
    add_submenu_page(   'noonpost_theme_options',           //parent_slug  
                        'NoonPost Header',                  //page_title  
                        'Header',                           //menu_title 
                        'manage_options',                   //capability   
                        'noonpost_header',                  //menu_slug 
                        'noonpost_theme_option_header_page',//callback function
                         
    );
    //Footer Sub-Page
    add_submenu_page(   'noonpost_theme_options',           //parent_slug  
                        'NoonPost Footer',                  //page_title  
                        'Footer',                           //menu_title 
                        'manage_options',                   //capability   
                        'noonpost_footer',                  //menu_slug 
                        'noonpost_theme_option_footer_page',//callback function
                         
    );


    //Activation NoonPost Option Settings
    add_action( 'admin_init', 'noonpost_option_settings' );

}
add_action( 'admin_menu', 'noonpost_theme_options' );

//Genaral page callback
function noonpost_theme_option_genaral_page() {

    require_once get_template_directory() . '/inc/theme-option/genaral-option.php';

}

//Header page callback
function noonpost_theme_option_header_page() {

    require_once get_template_directory() . '/inc/theme-option/header-option.php';
}

//Footer page callback
function noonpost_theme_option_footer_page() {

    require_once get_template_directory() . '/inc/theme-option/footer-option.php';
}




function noonpost_option_settings(){

    /*================
        Genaral
    =================*/

    add_settings_section( 'noonpost-genaral-contact-page-section', //id
        ' ', //title
        'noonpost_genaral_contact_page_section_field', //callback
        'noonpost_genaral' //Sub page slug
    );


    register_setting( 'noonpost-genaral-option-group', //option_group
        'noonpost_contact_form_shortcode' //option_name
        //args:array
    );
    register_setting( 'noonpost-genaral-option-group', //option_group
        'noonpost_contact_form_title' //option_name
        //args:array
    );
    register_setting( 'noonpost-genaral-option-group', //option_group
        'noonpost_contact_form_description' //option_name
        //args:array
    );
    register_setting( 'noonpost-genaral-option-group', //option_group
        'noonpost_contact_maps' //option_name
        //args:array
    );




    add_settings_field( 'noonpost-contact-maps', //$id
        'Add Google Maps Embed URL', //$title
        'noonpost_contact_maps_field', //$callback
        'noonpost_genaral', //$sub-page-slug
        'noonpost-genaral-contact-page-section', //$section id
        //$args:array
    );
    add_settings_field( 'noonpost-contact-form-title', //$id
        'Contact Form Title', //$title
        'noonpost_contact_form_title_field', //$callback
        'noonpost_genaral', //$sub-page-slug
        'noonpost-genaral-contact-page-section', //$section id
        //$args:array
    );
    add_settings_field( 'noonpost-contact-form-description', //$id
        'Contact Form Description', //$title
        'noonpost_contact_form_desctiption_field', //$callback
        'noonpost_genaral', //$sub-page-slug
        'noonpost-genaral-contact-page-section', //$section id
        //$args:array
    );

    add_settings_field( 'noonpost-contact-form-shortcode', //$id
        'Add Contact Form Shortcode', //$title
        'noonpost_contact_form_shortcode_field', //$callback
        'noonpost_genaral', //$sub-page-slug
        'noonpost-genaral-contact-page-section', //$section id
        //$args:array
    );


    /*================
        Header
    =================*/

    //Header section 
    add_settings_section( 'noonpost-header-section', //id
        ' ', //title
        'noonpost_header_section_field', //callback
        'noonpost_header' //Sub page slug
    );

    //header Logo
    register_setting( 'noonpost-header-option-group', //option_group
        'noonpost_white_logo' //option_name
        //args:array
    );
    register_setting( 'noonpost-header-option-group', //option_group
        'noonpost_dark_logo' //option_name
        //args:array
    );


    //Header Social Icons
    register_setting( 'noonpost-header-option-group', //option_group
        'noonpost_header_facebook' //option_name
        //args:array
    );
    register_setting( 'noonpost-header-option-group', //option_group
        'noonpost_header_instagram' //option_name
        //args:array
    );
    register_setting( 'noonpost-header-option-group', //option_group
        'noonpost_header_twitter' //option_name
        //args:array
    );
    register_setting( 'noonpost-header-option-group', //option_group
        'noonpost_header_youtube' //option_name
        //args:array
    );



    //Header logo fields
    add_settings_field( 'noonpost-white-logo', //$id
        'Upload White Logo', //$title
        'noonpost_white_logo_field', //$callback
        'noonpost_header', //$sub-page-slug
        'noonpost-header-section', //$section id
        //$args:array
    );
    add_settings_field( 'noonpost-dark-logo', //$id
        'Upload Dark Logo', //$title
        'noonpost_dark_logo_field', //$callback
        'noonpost_header', //$sub-page-slug
        'noonpost-header-section', //$section id
        //$args:array
    );


    //Header Social Icons link fields
    add_settings_field( 'noonpost-header-facebook', //$id
        'Facebook', //$title
        'noonpost_header_facebook_field', //$callback
        'noonpost_header', //$sub-page-slug
        'noonpost-header-section', //$section id
        //$args:array
    );
    add_settings_field( 'noonpost-header-instagram', //$id
        'Instagram', //$title
        'noonpost_header_instagram_field', //$callback
        'noonpost_header', //$sub-page-slug
        'noonpost-header-section', //$section id
        //$args:array
    );
    add_settings_field( 'noonpost-header-twitter', //$id
        'Twitter', //$title
        'noonpost_header_twitter_field', //$callback
        'noonpost_header', //$sub-page-slug
        'noonpost-header-section', //$section id
        //$args:array
    );
    add_settings_field( 'noonpost-header-youtube', //$id
        'Youtube', //$title
        'noonpost_header_youtube_field', //$callback
        'noonpost_header', //$sub-page-slug
        'noonpost-header-section', //$section id
        //$args:array
    );

    


    /*================
        Footer
    =================*/

    add_settings_section( 'noonpost-footer-section', //id
        ' ', //title
        'noonpost_footer_section_field', //callback
        'noonpost_footer' //Sub page slug
    );

    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_newslatter' //option_name
        //args:array
    );
    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_newslatter_description' //option_name
        //args:array
    );
    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_newslatter_subscribe_from_shortcode' //option_name
        //args:array
    );
    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_copyright' //option_name
        //args:array
    );
    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_facebook' //option_name
        //args:array
    );
    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_instagram ' //option_name
        //args:array
    );
    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_twitter' //option_name
        //args:array
    );
    register_setting( 'noonpost-footer-option-group', //option_group
        'noonpost_youtube' //option_name
        //args:array
    );


    //Newslatter
    add_settings_field( 'noonpost-newslatter-title', //$id
        'Newslatter Title', //$title
        'newslatter_title_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );
    //Newslatter descroption
    add_settings_field( 'noonpost-newslatter-description', //$id
        'Newslatter description', //$title
        'newslatter_description_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );
    //Newslatter subscribe button
    add_settings_field( 'noonpost-Subscribe-form-shortcode', //$id
        'Subscribe Form Shortcode', //$title
        'newslatter_subscribe_form_shortcode_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );

    //facebook
    add_settings_field( 'noonpost-facebook-url', //$id
        'Facebook', //$title
        'facebook_url_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );

    //instagram
    add_settings_field( 'noonpost-instagram-url', //$id
        'Instagram ', //$title
        'instagram_url_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );

    //twitter
    add_settings_field( 'noonpost-twitter-url', //$id
        'Twitter', //$title
        'twitter_url_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );

    //youtube
    add_settings_field( 'noonpost-youtube-url', //$id
        'Youtube', //$title
        'youtube_url_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );

    //copyright
    add_settings_field( 'noonpost-copyright', //$id
        'Add Copyright', //$title
        'copyright_text_field', //$callback
        'noonpost_footer', //$sub-page-slug
        'noonpost-footer-section', //$section id
        //$args:array
    );
    
}


//Template Fields
require_once get_template_directory() . '/inc/theme-option/fields/genaral-template-fields.php';
require_once get_template_directory() . '/inc/theme-option/fields/header-template-fields.php';
require_once get_template_directory() . '/inc/theme-option/fields/footer-template-fields.php';


 
//User Social Profiles Fields

add_action( 'show_user_profile', 'noonpost_user_social_profiles_fields');
add_action( 'edit_user_profile', 'noonpost_user_social_profiles_fields');

function noonpost_user_social_profiles_fields( $user,) {
    ?>

	<h3><?php _e("User profile Title", "noonpost")?></h3>

    <table class="form-table">

        <tr>
            <th><label for="user_title"><?php _e("Add Your Title","noonpost");?></label></th>

            <td>
                <input type="text" name="user_title" id="user_title" placeholder="Please add your Profile Title" value="<?php echo esc_attr( get_the_author_meta( 'user_title', $user->ID ) ); ?>" class="regular-text" /><br />
            </td>
        </tr>
    </table>

	<h3><?php _e("User Social Profiles", "noonpost")?></h3>

	<table class="form-table">

		<tr>
			<th><label for="twitter"><?php _e("Twitter","noonpost");?></label></th>

			<td>
				<input type="text" name="twitter" id="twitter" placeholder="Please enter your Twitter username" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>
		<tr>
			<th><label for="facebook"><?php _e("Facebook","noonpost");?></label></th>

			<td>
				<input type="text" name="facebook" id="facebook" placeholder="Please enter your Facebook username" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>
		<tr>
			<th><label for="instagram"><?php _e("Instagram","noonpost");?></label></th>

			<td>
				<input type="text" name="instagram" id="instagram" placeholder="Please enter your Instagram username" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>
		<tr>
			<th><label for="youtube"><?php _e("Youtube","noonpost");?></label></th>

			<td>
				<input type="text" name="youtube" id="youtube" placeholder="Please enter your Youtube username" value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>
		<tr>
			<th><label for="pinterest"><?php _e("Pinterest","noonpost");?></label></th>

			<td>
				<input type="text" name="pinterest" id="pinterest" placeholder="Please enter your Pinterest username" value="<?php echo esc_attr( get_the_author_meta( 'pinterest', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>
		

	</table>
<?php }

add_action( 'personal_options_update', 'noonpost_save_user_social_profiles_fields'  );
add_action( 'edit_user_profile_update', 'noonpost_save_user_social_profiles_fields' );

function noonpost_save_user_social_profiles_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	
	update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
	update_usermeta( $user_id, 'instagram', $_POST['instagram'] );
	update_usermeta( $user_id, 'youtube', $_POST['youtube'] );
	update_usermeta( $user_id, 'pinterest', $_POST['pinterest'] );
	update_usermeta( $user_id, 'user_title', $_POST['user_title'] );
}

