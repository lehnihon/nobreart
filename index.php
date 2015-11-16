<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">			
					produto
				</div>
				<div class="col-md-4">			
					produto
				</div>
				<div class="col-md-4">			
					produto
				</div>
			</div>
		</div>
	</section>

	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 info-left">
					<div class="info-content">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header-sobre.jpg"?>" />
					</div>
				</div>
				<div class="col-md-6 info-right">
					<div class="info-content">
						<h1>NOBRE ARTE DESIGN</h1><br>
						<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</h5><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alio.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali.</p>
					</div>
				</div>			
			</div>
		</div>
	</section>

	<section id="newsletter" class="container-fluid">
		<div class="row">
			<div class="col-md-6 news-left"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/novidades-left.png"?>" /></div>
			<div class="col-md-6 news-right">news</div>				
		</div>	
	</section>

	<section id="produtos">
		<div class="container">
			<div class="row">
				<div class="col-md-4">			
					produto
				</div>
				<div class="col-md-4">			
					produto
				</div>
				<div class="col-md-4">			
					produto
				</div>
			</div>
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</div><!-- #content -->

<?php get_footer(); ?>
