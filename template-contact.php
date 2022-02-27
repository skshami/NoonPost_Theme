<?php
/**
 * Template Name: Contact Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

get_header();
?>
 <!--contact us-->
 <section class="section pt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5><?php the_title();?></h5>
                    </div>
                </div>
            </div>
            
            <div class="row mb-20">
                <div class="col-lg-8 mt-30">
                    <div class="contact">
                        <div class="google-map">
                            <?php
                                $contact_maps = esc_html( get_option( 'noonpost_contact_maps' ) );
                                    if($contact_maps){ 
                                        echo get_option('noonpost_contact_maps'); 
                                    } 
                            ?>
                        </div>
                        <form action="mail.php" class="widget-form contact_form " method="POST" id="main_contact_form">
                            <?php
                             $contact_form_title = esc_attr( get_option( 'noonpost_contact_form_title' ) );
                             $contact_form_description = esc_attr( get_option( 'noonpost_contact_form_description' ) );
                             if($contact_form_title){
                                ?>
                                    <h6> <?php echo get_option('noonpost_contact_form_title');?></h6>
                                <?php
                             } 
                             if($contact_form_description){
                                ?>
                                    <p><?php echo get_option('noonpost_contact_form_description')?></p>
                                <?php
                             }
                            ?>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                <?php _e("Your message was sent successfully.","noonpost")?>
                            </div>
                                <?php
                                    $contact_form_shortcode = esc_attr( get_option( 'noonpost_contact_form_shortcode' ) );
                                    if($contact_form_shortcode){
                                        echo do_shortcode( get_option('noonpost_contact_form_shortcode'));

                                    }
                                ?>
                        </form>
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