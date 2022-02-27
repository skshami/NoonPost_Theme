<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NoonPost
 */

?>

 <!--newslettre-->
    <section class="newslettre">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                <div class="newslettre-info">
                    <h5><?php echo _e( get_option( 'noonpost_newslatter' ),'noonpost'); ?> </h5>
                    <p><?php echo _e( get_option( 'noonpost_newslatter_description' ), 'noonpost' ); ?> </p>
                </div>
                <?php
                    $newslatter_subscribe = esc_attr( get_option('noonpost_newslatter_subscribe_from_shortcode') );
                    if($newslatter_subscribe ):
                ?>
                <form action="mail.php" class="newslettre-form">
                    <div class="form-flex">
                        <?php echo do_shortcode( get_option('noonpost_newslatter_subscribe_from_shortcode'));?>
                    </div>
                </form>
                <?php endif;?>
                <div class="social-icones">
                    <ul class="list-inline">
                        <?php
                            $facebook = esc_attr( get_option( 'noonpost_facebook' ) );

                            if ( $facebook ) {
                                ?>
                                    <li>
                                        <a href="<?php echo get_option( 'noonpost_facebook' ); ?>">
                                        <i class="fab fa-facebook-f"></i><?php _e('Facebook', 'noonpost') ?></a>
                                    </li>
                                <?php
                            }

                        ?>
                        
                        <?php
                            $twitter = esc_attr( get_option( 'noonpost_twitter' ) );

                            if ( $twitter ) {
                                ?>
                                    <li>
                                        <a href="<?php echo get_option( 'noonpost_twitter' ); ?>">
                                        <i class="fab fa-twitter"></i><?php _e('Twitter', 'noonpost') ?></a>
                                    </li>
                                <?php
                            }

                        ?>
                        
                        <?php
                            $instagram = esc_attr( get_option( 'noonpost_instagram' ) );

                            if ( $instagram ) {
                                ?>
                                    <li>
                                        <a href="<?php echo get_option( 'noonpost_instagram' ); ?>">
                                        <i class="fab fa-instagram"></i><?php _e('Instagram', 'noonpost') ?></a>
                                    </li>
                                <?php
                            }

                        ?>
                        
                        <?php
                            $youtube = esc_attr( get_option( 'noonpost_youtube' ) );

                            if ( $youtube ) {
                                ?>
                                    <li>
                                        <a href="<?php echo get_option( 'noonpost_youtube' ); ?>">
                                        <i class="fab fa-youtube"></i><?php _e('Youtube', 'noonpost') ?></a>
                                    </li>
                                <?php
                            }

                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!--footer-->
    <footer id="colophon" class="site-footer footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p><?php echo get_option( 'noonpost_copyright' );?></p>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="search-width  text-center">
                <button type="button" class="close">
                    <i class="icon_close"></i>
                </button>
                <?php get_search_form( );?>
            </div>
        </div>
    </div>
    <!--/-->
<?php wp_footer();?>
</body>
</html>