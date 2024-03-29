<?php
/**
 * Template part for displaying results in search pages, archieve pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

?>
<div class="col-12 col-md-6 col-lg-4">
	<article id="post-<?php the_ID(); ?>" class="type-index animateView">
		<div class="entry-image">
			<?php the_post_thumbnail( 'medium' ); ?>
		</div>
		<div class="entry-meta">
			<p class="entry-category"><?php the_category(' ');?></p>
			<?php 
				the_title( sprintf( '<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );
				the_excerpt();
			?>
			
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
