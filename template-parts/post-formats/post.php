<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

?>

<div class="card">
	<div class="post-card">
	<div class="post-card-image">
		<a href="<?php the_permalink()?>"><?php the_post_thumbnail('noonpost_blog_thumb_landscape');?></a>
	</div>
	<div class="post-card-content">
		<p class="categorie"><?php
				$categories = get_the_category();
				$separetor = ' ';
				$result = '';

				if ( $categories ):

					foreach ( $categories as $category ) {

						$result .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $separetor;
					}

					echo trim( $result, $separetor );
				endif;
				?></p>  
		<h5><a href="<?php the_permalink();?>"><?php the_title( );?></a></h5>
		<p><?php the_excerpt( );?></p>
		<div class="post-card-info">
			<ul class="list-inline">
				<?php
					global $post;
					$author_id = $post->post_author;
				?>
				<li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
							<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
							<?php echo get_the_author_meta( 'display_name', $author_id ); ?>
					</a>
				</li>
				<li class="dot"></li>
				<li><?php the_time( 'F j, Y' );?></li>
			</ul>
		</div>
	</div>
	</div><!--/-->
</div>
<!--/-->