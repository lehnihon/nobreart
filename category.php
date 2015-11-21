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
						<?php if($wp_query->current_post == 3): ?>
							</div><br><div class="row">
						<?php endif; ?>		
					<?php endwhile; ?>										
				</div>
				<div class="row">
					<div class="col-md-12">
					<?php 
						the_posts_pagination( array(
							'mid_size'  => 2,
							'prev_text' => __( 'Anterior', 'textdomain' ),
							'next_text' => __( 'Próximo', 'textdomain' ),
						) );
					?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter'); ?>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
