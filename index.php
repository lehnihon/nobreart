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
			</div><br>
			<div class="row">
				<div class="col-md-4 categoria-efeito">		
					<a href="<?php echo esc_url( home_url( '/' )."/categoria/categoria-teste"); ?>">
						<div class="title efeitoa">POLTRONA</div>
						<img class="img-responsive e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/poltrona.jpg"; ?>"/>
					</a>
				</div>
				<div class="col-md-4 categoria-efeito">		
					<a href="<?php echo esc_url( home_url( '/' )); ?>">
						<div class="title efeitoa">POLTRONA</div>
						<img class="img-responsive e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/poltrona.jpg"; ?>"/>
					</a>
				</div>
				<div class="col-md-4 categoria-efeito">		
					<a href="<?php echo esc_url( home_url( '/' )); ?>">
						<div class="title efeitoa">POLTRONA</div>
						<img class="img-responsive e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/poltrona.jpg"; ?>"/>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 info-left">
					<div class="info-content">
						<img style="display:none" class="img-responsive efeitob" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header-sobre.jpg"?>" />
					</div>
				</div>
				<div class="col-md-6 info-right">
					<div class="info-content">
						<h1 style="display:none" class="efeitoc">NOBRE ARTE DESIGN</h1><br>
						<h5 style="display:none" class="efeitoc">A Nobre Arte Design nasceu pelo esforço e vontade de 3 profissionais com vasta experiência no mercado de tapeçaria, decoração e design de interiores.</h5><br>
						<p style="display:none" class="efeitoc">Nós temos como missão principal buscar e apresentar aos clientes produtos de alta qualidade, serviços e atendimento de excelência e soluções inovadoras para a decoração do seu ambiente, visando a satisfação e o bem estar.</p>
						<p style="display:none" class="efeitoc">A Nobre Arte Design tem como visão de futuro ser referência em qualidade e atendimento no mercado de estofados, tapeçaria e artigos para decoração e design de interiores. </p>
						<p style="display:none" class="efeitoc">Nossas atividades e serviços são baseados em valores como respeito, pontualidade, atendimento diferenciado, ética, sustentabilidade, transparência, responsabilidade e qualidade.</p>
					</div>
				</div>			
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter'); ?>

	<section id="produtos">
		<div class="container">
			<div class="row">
				<div class="col-md-4 categoria-efeito">		
					<a href="<?php echo esc_url( home_url( '/' )); ?>">
						<div class="title efeitod">POLTRONA</div>
						<img class="img-responsive e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/poltrona.jpg"; ?>"/>
					</a>
				</div>
				<div class="col-md-4 categoria-efeito">		
					<a href="<?php echo esc_url( home_url( '/' )); ?>">
						<div class="title efeitod">POLTRONA</div>
						<img class="img-responsive e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/poltrona.jpg"; ?>"/>
					</a>
				</div>
				<div class="col-md-4 categoria-efeito">		
					<a href="<?php echo esc_url( home_url( '/' )); ?>">
						<div class="title efeitod">POLTRONA</div>
						<img class="img-responsive e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/poltrona.jpg"; ?>"/>
					</a>
				</div>
			</div>
		</div>		
	</section>

	<section id="produtos-procurados">
		<div class="container">
			<div class="row title">
				<div class="col-md-12">
					<div class="content">
						<span>Os produtos mais procurados na Nobre Arte Design</span>
					</div>
				</div>
			</div>
			<div class="row links">
				<div class="col-md-12">
					<div class="content clearfix">
						<span>almofadas</span>
						<span><strong>cadeiras</strong></span>
						<span>poltronas</span>
						<span><strong>cabeceiras de cama</strong></span>
						<span>persianas</span>
						<span><strong>sofás</strong></span>
						<span>tecidos</span>
						<span><strong>sofás sob medida</strong></span>
						<span>futoons</span>
						<span><strong>puffs</strong></span>
						<span>tapetes</span>
						<span><strong>mesas</strong></span>
						<span>reforma de estofados</span>
						<span><strong>nobre arte design</strong></span>
						<span>nobre arte</span>
						<span><strong>cortinas</strong></span>
						<span>lavagem de estofados</span>
						<span><strong>impermeabilização</strong></span>
						<span>projetos personalizados</span>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</div><!-- #content -->

<?php get_footer(); ?>
