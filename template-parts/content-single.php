<?php
/**
 * Template part for displaying single posts.
 *
 * @package site
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<hr>
	<div class="fb-share-button" data-href="<?php echo the_permalink(); ?>" data-layout="button_count"></div>
</article><!-- #post-## -->

