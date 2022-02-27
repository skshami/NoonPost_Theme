<!--widget-author-->
<div class="widget">
                        <div class="widget-author">
                                <?php
                                    global $post;
                                    $author_id = $post->post_author;
                                ?>
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="image">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                            </a>
                            <h6>
                                <span><?php if(get_the_author_meta( 'user_title' )){
                                    the_author_meta('user_title');
                                } ?></span>
                            </h6>
                            <p><?php the_author_meta( "description", $author_id);?></p>
                    
                    
                            <div class="social-media">
                                <ul class="list-inline">
                                <?php if ( get_the_author_meta( 'facebook' ) ) { ?>
                                    <li>
                                        <a href="http://facebook.com/<?php the_author_meta( 'facebook' ); ?>" class="color-facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <?php } if ( get_the_author_meta( 'instagram' ) ) { ?>
                                    <li>
                                        <a href="http://instagram.com/<?php the_author_meta( 'instagram' ); ?>" class="color-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <?php } if ( get_the_author_meta( 'twitter' ) ) { ?>
                                    <li>
                                        <a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>" class="color-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <?php } if ( get_the_author_meta( 'youtube' ) ) { ?>
                                    <li>
                                        <a href="http://youtube.com/<?php the_author_meta( 'youtube' ); ?>" class="color-youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <?php } if ( get_the_author_meta( 'pinterest' ) ) { ?>
                                    <li>
                                        <a href="http://pinterest.com/<?php the_author_meta( 'pinterest' ); ?>" class="color-pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->  