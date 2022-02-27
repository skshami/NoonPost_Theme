<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

?>
<!--Post-single-->
<div class="post-single">
	<div class="post-single-image">
		<img src="<?php the_post_thumbnail_url('noonpost_single_post_thumb')?>" alt="<?php the_title( );?>">
	</div>
	<div class="post-single-content">
		<p class="categorie" >
			<?php
						$categories = get_the_category();
						$separetor = ' ';
						$result = '';

						if ( $categories ):

							foreach ( $categories as $category ) {

								$result .= '<a href="' . get_category_link( $category->term_id ) . '" >' . $category->cat_name . '</a>' . $separetor;
							}

							echo trim( $result, $separetor );
						endif;
			?>
			</p>
		<h4><?php the_title( );?></h4>
		<div class="post-single-info">
			<ul class="list-inline">
				<?php
					global $post;
					$author_id = $post->post_author;
				?>
				<li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></a></li>
				<li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a> </li>
				<li class="dot"></li>
				<li><?php the_time( 'F j, Y' );?></li>
				<li class="dot"></li>
				<li>
					<?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'noonpost' ), number_format_i18n( get_comments_number() ) );?>
				</li>
			</ul>
		</div>
	</div>

	<div class="post-single-body">
		<?php the_content();?>
	</div>

	<div class="post-single-footer">
		<div class="tags">
			<?php 
				$tag_list = get_the_tag_list( '<ul class="list-inline" ><li>', '</li><li>', '</li></ul>' );

				if ( $tag_list && ! is_wp_error( $tag_list ) ) {
					echo $tag_list;
				}
			?>
		</div>
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
</div> <!--/-->