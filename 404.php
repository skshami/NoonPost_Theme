<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package NoonPost
 */

get_header();
?>

	<!--Page404-->
    <section class="section pt-55 mb-50 errorpage">
        <div class="container-fluid">
            <div class="page404  widget">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri( );?> /assets/img/404.html" alt="">
                </div>
                <div class="content">
                    <h1><?php _e("404","noonpost");?></h1>
                    <h3><?php _e("Page Not Found.","noonpost");?></h3>
                    <p><?php _e("It looks like nothing was found at this location. ","noonpost");?></p>
                    <a href="<?php echo get_site_url();?>" class="btn-custom"><?php _e("Go back to Home","noonpost");?></a>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
