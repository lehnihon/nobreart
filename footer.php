	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>
							<strong>Sobre a Arte Nobre Design.</strong><br><br>
				A Nobre Arte Design tem como visão de futuro ser referência em qualidade e atendimento no mercado de estofados, tapeçaria e artigos para decoração e design de interiores. 
				<br><br>Nossas atividades e serviços são baseados em valores como respeito, pontualidade, atendimento diferenciado, ética, sustentabilidade, transparência, responsabilidade e qualidade.
				<br><br>
				<strong>Endereço</strong>
				<br>Rua São Jorge, 86 - Tatuapé, São Paulo
				<br><strong>Telefone</strong> 11 3938-0200											
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
							$categories = get_categories( );

							foreach($categories as $category):
							?>
								<li><a href="<?php echo esc_url( home_url( '/' ).'categoria/'.$category->slug); ?>"><?php echo $category->name; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="col-md-3">
						<strong>Receba nossas novidades</strong><br/><br/>	
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); } ?>
						<br><br><br><br>
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/nobrecrea.jpg"?>" />
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; <?php echo date('Y') ?> Nobre Arte Design | <a target="_blank" href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
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
