<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

get_header();
?>

<section class="section pt-50">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section-title">
                    <h5><?php the_title();?></h5>
                    </div>
                </div>
            </div>
        
            <div class="row ">
                <div class="col-lg-8 mt-30">
                    <div class="about-us">
                        <div class="about-us-image">
                            <img src="<?php the_post_thumbnail_url( );?>" alt="<?php the_title();?>">
                        </div>
                        <div class="description">
                           <?php the_content();?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 max-width">
                    <!--widget-latest-posts-->
                    <div id="secondary" class="widget">
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                    <!--/-->
                        
                    <!--widget-instagram-->
                    <div id="secondary" class="widget">
                        <?php dynamic_sidebar( 'instagram-sideber' ); ?>
                    </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>        

<?php
get_footer();
