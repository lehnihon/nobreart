	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>
							<strong>Sobre a Arte Nobre Design.</strong><br><br>
				A Nobre Arte Design nasceu pelo esforço e vontade de 3 profissionais com vasta experiência no mercado de tapeçaria, decoração e design de interiores.
				<br>Nós temos como missão principal buscar e apresentar aos clientes produtos de alta qualidade, serviços e atendimento de excelência e soluções inovadoras para a decoração do seu ambiente, visando a satisfação e o bem estar.
				<br>A Nobre Arte Design tem como visão de futuro ser referência em qualidade e atendimento no mercado de estofados, tapeçaria e artigos para decoração e design de interiores. 
				<br>Nossas atividades e serviços são baseados em valores como respeito, pontualidade, atendimento diferenciado, ética, sustentabilidade, transparência, responsabilidade e qualidade.											
						</p>
					</div>
					<div class="col-md-2 col-md-offset-1">
						<strong>Institucional</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ))."sobre"; ?>">A Empresa</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."localizacao"; ?>">Localização</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."contato"; ?>">Contato</a></li>
						</ul><br><br>
						<strong>Serviços</strong><br><br>
						<ul>
							<?php
							$args = array(
								'post_type' => 'servico',
								'posts_per_page' => 8,
							    'orderby' => 'rand');
							$query = new WP_Query( $args );

							while ( $query->have_posts() ) : $query->the_post(); 
							?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title( );?></a></li>
							<?php endwhile; ?>
						</ul>						
					</div>
					<div class="col-md-2">
						<strong>Produtos</strong><br><br>
						<ul>
							<?php
							$args = array(
								'posts_per_page' => 8,
							    'orderby' => 'rand');
							$query = new WP_Query( $args );

							while ( $query->have_posts() ) : $query->the_post(); 
							?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title( );?></a></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<div class="col-md-3">
						<strong>Receba nossas novidades</strong>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; <?php echo date('Y') ?> Hotel Beach Hills | <a target="_blank" href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
					</div>
					<div class="col-md-2">
						<a target="_blank" href="http://agenciarino.com.br/"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-rino.png"?>" /></a>	
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
