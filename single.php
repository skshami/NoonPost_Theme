<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NoonPost
 */

get_header();
?>
  
    <!--post-default-->
    <section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <?php  
                    while ( have_posts() ) :
                            the_post();
                ?>
                <div class="col-lg-8 mb-20">
                    <!--Post-single-->
                    <?php
                       

                            get_template_part( 'template-parts/content', get_post_type() );
                        
                    ?>
                    <!--next & previous-posts-->
                    <div class="row">
                        <?php $noonpost_previous_post = get_previous_post();
                            if($noonpost_previous_post){	
                        ?>
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="<?php echo get_permalink( $noonpost_previous_post );?>">
                                            <img src="<?php echo get_the_post_thumbnail_url($noonpost_previous_post, 'noonpost_next_prev_post_thumb')?>" alt="<?php echo get_the_title( $noonpost_previous_post );?>">
                                            </a>                                          
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="<?php echo get_permalink( $noonpost_previous_post );?>"><i class="arrow_left"></i><?php _e("Preview post","noonpost") ?></a>
                                            </div>
                                            <a href="<?php echo get_permalink( $noonpost_previous_post );?>"><?php echo get_the_title( $noonpost_previous_post );?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } $noonpost_next_post = get_next_post();
                                if($noonpost_next_post){
                        ?>
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-previous-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="<?php echo get_permalink( $noonpost_next_post );?>">
                                                <img src="<?php echo get_the_post_thumbnail_url($noonpost_next_post, 'noonpost_next_prev_post_thumb')?>" alt="<?php echo get_the_title( $noonpost_next_post );?>">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="<?php echo get_permalink( $noonpost_next_post );?>">
                                                    <span><?php _e("Next post","noonpost");?></span>
                                                    <span class="arrow_right"></span>
                                                </a>
                                            </div>
                                            <a href="<?php echo get_permalink( $noonpost_next_post );?>"><?php echo get_the_title( $noonpost_next_post );?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div><!--/-->

                    <!--widget-comments-->
                    <?php
                        if(!post_password_required( )){
                            comments_template();
                        }
                    ?>
                </div>

                <?php endwhile;?>

                <div class="col-lg-4 max-width">

                    <?php get_template_part('template-parts/user-bio')?>      
                  <?php get_sidebar();?>
                </div> 
                
            </div>
        </div>
    </section><!--/-->

<?php
get_footer();
