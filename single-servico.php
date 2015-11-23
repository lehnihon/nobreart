<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<br><br><br>
	<section id="produto-single">
		<div class="container">
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
								<div class="content"><?php echo strip_shortcodes(get_the_content()); ?></div>
							</div>
						</div>	
					<?php endwhile; ?>										
				</article>
			<?php endif; ?>
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
