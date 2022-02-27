<?php
/**
 * Template part for displaying Navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

?>



   <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
			<?php
            
                $white_logo = esc_attr( get_option( 'noonpost_white_logo' ) );
                $dark_logo = esc_attr( get_option( 'noonpost_dark_logo' ) );

			?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo $dark_logo;?>" alt="" class="logo-dark">
					<img src="<?php echo $white_logo;?>" alt="" class="logo-white">
            	</a>
            </div>
            <!--/-->
            
            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <?php
                    $getMenu = wp_get_nav_menu_items( 'menu-1' );
                    
                    if($getMenu){
 
                    foreach ( $getMenu as $item ) {
                        
                        echo '<li class="nav-item"><a class="nav-link" href="' . $item->url . '">' . $item->title . '</a></li>';
                    }}
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container'      => false,
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'navbar-nav ml-auto mr-auto',
                        'walker'         => new WP_Bootstrap_Navwalker()

                    ) );

                ?>
            </div>
            <!--/-->
    
            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div id="header-social-icons" class="social-icones">
                    <ul class="list-inline">

                    <?php
                        $header_facebook = esc_attr( get_option( 'noonpost_header_facebook' ) );
                        if($header_facebook){
                            ?>
                                <li>
                                    <a href="<?php echo get_option( 'noonpost_header_facebook' ); ?>">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                    <?php
                        $header_instagram = esc_attr( get_option( 'noonpost_header_instagram' ) );
                        if($header_instagram){
                            ?>
                                <li>
                                    <a href="<?php echo get_option( 'noonpost_header_instagram' ); ?>">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                    <?php
                        $header_twitter = esc_attr( get_option( 'noonpost_header_twitter' ) );
                        if($header_twitter){
                            ?>
                                <li>
                                    <a href="<?php echo get_option( 'noonpost_header_twitter' ); ?>">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                    <?php
                        $header_youtube = esc_attr( get_option( 'noonpost_header_youtube' ) );
                        if($header_youtube){
                            ?>
                                <li>
                                    <a href="<?php echo get_option( 'noonpost_header_youtube' ); ?>">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                    </ul>
                </div>
    
                <div class="search-icon">
                    <i class="icon_search"></i>
                </div>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->