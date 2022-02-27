<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

get_header();
?>

 <!--Categorie-->
 <section class="categorie-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="categorie-title">
                        <small>
                            <a href="<?php home_url();?>"><?php _e("Home","noonpost")?></a>
                            <?php
                                    global $post;
                                    $author_id = $post->post_author;
                            ?>
                            <span class="arrow_carrot-right"></span> <?php echo get_the_author_meta( 'display_name', $author_id ); ?>
						</small>
							<h3><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/-->
    <!--mansory-layout-->
    <section class="masonry-layout col2-layout">
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
                    
                     <?php get_template_part('template-parts/user-bio')?>     
                    
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section><!--/-->

<?php
get_footer();
