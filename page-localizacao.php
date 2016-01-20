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
	<section id="localizacao">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<h1 class="small">Localização da Nobre Arte</h1>
					<br><br>
					<div class="videoWrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0003376679856!2d-46.56683158444546!3d-23.532490266413117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee54bb4a53b%3A0x5bfb87542ddadfac!2sR.+S%C3%A3o+Jorge%2C+86+-+Parque+S%C3%A3o+Jorge%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1448243248487" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><br><br>
					<p>Rua São Jorge, 86 - Tatuapé, São Paulo</p>
					<p>Telefone (11) 3938-0200</p>
					<p>contato@nobreartedesign.com.br</p>	
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</div><!-- #content -->

<?php get_footer(); ?>
