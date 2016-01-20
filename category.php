<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>
<div id="content">
	<section id="categorias">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<h1 class="small"><?php single_cat_title(); ?></h1>
				<h5>Conheça os produtos da Nobre Arte Design.</h5><br><br>
				<div class="row">	
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-3">
							<article>
								<strong><?php the_title(); ?></strong><br><br>
								<?php the_post_thumbnail('home-thumb', array('class' => "img-responsive e-cinza")); ?>
								<a href="<?php the_permalink(); ?>">Saiba Mais</a>
							</article>
						</div>
						<?php if(($wp_query->current_post+1) % 4 == 0): ?>
							</div><br><div class="row">
						<?php endif; ?>		
					<?php endwhile; ?>										
				</div>
				<div class="row">
					<div class="col-md-12">
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
				</div>
			<?php endif; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter'); ?>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
