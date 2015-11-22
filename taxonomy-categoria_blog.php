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
								the_posts_pagination( array(
									'mid_size'  => 2,
									'prev_text' => __( 'Anterior', 'textdomain' ),
									'next_text' => __( 'Próximo', 'textdomain' ),
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
