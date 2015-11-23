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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.512220262545!2d-46.571646100000045!3d-23.5500402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e968b7599f7%3A0xdcd2807d8e528abe!2sR.+Coelho+Lisboa%2C+675+-+Tatuap%C3%A9%2C+S%C3%A3o+Paulo+-+SP%2C+03323-040!5e0!3m2!1spt-BR!2sbr!4v1441396493804" width="1170" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><br><br>
					<p><strong>Endereço da unidade Tatuapé:</strong></p>
					<p>Rua Coelho Lisboa, 675 - Tatuapé</p>
					<p>São Paulo - SP</p><br>
					<p><strong>Telefone Xtreme Tatuapé</strong></p>
					<p>11 3232-1732</p>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</div><!-- #content -->

<?php get_footer(); ?>
