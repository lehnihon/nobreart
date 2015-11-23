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
	<section id="categorias">
		<div class="container">
			<h1 class="small">A Nobre Arte Design</h1><br>
			<p class="text-left">
				<strong>A Nobre Arte Design nasceu pelo esforço e vontade de 3 profissionais com vasta experiência no mercado de tapeçaria, decoração e design de interiores.</strong>
				<br><br>Nós temos como missão principal buscar e apresentar aos clientes produtos de alta qualidade, serviços e atendimento de excelência e soluções inovadoras para a decoração do seu ambiente, visando a satisfação e o bem estar.
				<br><br>A Nobre Arte Design tem como visão de futuro ser referência em qualidade e atendimento no mercado de estofados, tapeçaria e artigos para decoração e design de interiores. 
				<br><br>Nossas atividades e serviços são baseados em valores como respeito, pontualidade, atendimento diferenciado, ética, sustentabilidade, transparência, responsabilidade e qualidade.				
			</p>
		</div>
	</section>


	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</div><!-- #content -->

<?php get_footer(); ?>
