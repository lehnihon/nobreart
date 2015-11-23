<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header('blog'); ?>
<div id="content">
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php putRevSlider( "banner-blog" ) ?>
				</div>
				<div class="col-md-4">
					<?php putRevSlider( "publicidade2" ) ?>
				</div>
			</div><br><br>
			<?php if ( have_posts() ) : ?>
				<div class="row">	
					<div class="col-md-8">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
							get_template_part( 'template-parts/content', get_post_format() );
							?>	
						<?php endwhile; ?>
						<div class="paginacao">
						<?php
						$big = 999999999; // need an unlikely integer
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
						?>
						</div>
					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>									
				</div>



				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
