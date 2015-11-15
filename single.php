<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row">
			<main class="col-md-8">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->
			<aside class="col-md-4">
				<?php get_sidebar(); ?>
			</aside>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #content -->

<?php get_footer(); ?>
