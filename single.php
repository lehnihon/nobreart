<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="produto-single">
		<div class="container">
		<?php BaseBreadcrumb(); ?>
			<?php if ( have_posts() ) : ?>
				<article class="row">	
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6">
							<?php the_post_thumbnail('home-thumb', array('class' => "img-responsive")); ?>
							<div class="slider1">			
								<?php
							    if ( get_post_gallery() ) :
							    $gallery = get_post_gallery( get_the_ID(), false );
							        foreach( $gallery['src'] as $src ) : 
								?>
									<div class="slide"><a data-lightbox="prod" href="<?php echo $src; ?>"><img src="<?php echo $src; ?>"></a></div>
								<?php
						            endforeach;
						        endif;
								?>
							</div>						
						</div>
						<div class="col-md-6 text-left">
							<div class="wrap">
								<h1 class="small"><?php the_title(); ?></h1>
								<h5><?php categoryList(); ?></h5>
								<div class="content"><?php echo strip_shortcodes(wpautop( get_the_content() )); ?></div>
							</div>
						</div>	
					<?php endwhile; ?>										
				</article>
			<?php endif; ?>
		</div>
	</section>

	<section id="produto-relacionado">
		<div class="container">
			<div class="row">
				<h2>Produtos relacionados</h2>
				<h5>Mais produtos que talvez você pode gostar!</h5>				
			</div><br><br>
			<div class="row">
				<?php 
				$query = new WP_Query( array( 'category__in' => categoryIds() ,'posts_per_page' => 4, 'post_type' => 'post', 'post__not_in' => array($post->ID)) );
				if ( $query->have_posts() ):
					while ( $query->have_posts() ) :
						$query->the_post();
				?>
						<div class="col-md-3">
							<article>
								<strong><?php the_title(); ?></strong><br><br>
								<?php the_post_thumbnail('home-thumb', array('class' => "img-responsive e-cinza")); ?>
								<a href="<?php the_permalink(); ?>">Saiba Mais</a>
							</article>
						</div>
				<?php
					endwhile;				
				endif;

				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter'); ?>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
<script>
$('.slider1').bxSlider({
    slideWidth: 200,
    minSlides: 2,
    maxSlides: 3,
    slideMargin: 10,
    controls:false,
	onSliderLoad: function(){
	    $(".bx-clone").children().removeAttr("data-lightbox");
	}
});

</script>
