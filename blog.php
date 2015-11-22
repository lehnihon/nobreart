<?php
get_header('blog'); ?>

<div id="content">
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php putRevSlider( "banner-blog" ) ?>
				</div>
				<div class="col-md-4">
					<aside>
						<ul class="menu-blog text-left">
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/noticias'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Notícias da Xtreme Gold Team</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/lutas-treinos'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Lutas e Treinos</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/musculacao-fitness'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Musculação e Fitness</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/tatuape'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Unidade Tatuapé</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/santa-clara'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Unidade Santa Clara</span></a></li>
						</ul>
					</aside>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

					$args = array(
						'post_type' => 'blog',
						'posts_per_page' => 3,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'paged' => $paged);
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
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
							'total' => $query->max_num_pages
						) );
						?>
						</div>
					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div><!-- .container -->
	</section>

</div><!-- #content -->

<?php get_footer(); ?>
