<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

get_header();
?>

    <!--mansory-layout-->
    <section class="masonry-layout col2-layout mt-120">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt--10 ">
                    
                    <!--cards-->
                    <div class="card-columns">
                        <?php 
                            if(have_posts()):
                                while(have_posts()):
                                    the_post();
                                    get_template_part( 'template-parts/post-formats/post', get_post_format() );
                                endwhile;
                            endif;  
                        ?>
                    </div>
                   
                    <!--pagination-->
                    <div class="pagination mt-30">
                      <?php
                            if ( 'noonpost_pagenav' ) {noonpost_pagenav();} else {?>
                            <?php next_posts_link();?>
                            <?php previous_posts_link();?>
                            <?php }
                        ?>
                    </div><!--/-->
                </div>
                    <div class="col-lg-4 max-width">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section><!--/-->

<?php
get_footer();
