	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>
							<strong>Sobre a Arte Nobre Design.</strong><br><br>
							O Hotel Beach Hills fica localizado na bela praia de Taperapuã, a 6 km do centro histórico de Porto Seguro, o hotel oferece uma grande piscina rodeada por jardins, um restaurante regional, WIFI e quartos com varanda.
						</p>
					</div>
					<div class="col-md-2 col-md-offset-1">
						<strong>Institucional</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ))."hotel/"; ?>">A Empresa</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."localizacao/"; ?>">Localização</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
						</ul><br><br>
						<strong>Serviços</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ))."hotel/"; ?>">lista</a></li>
						</ul>						
					</div>
					<div class="col-md-2">
						<strong>Produtos</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ))."hotel/"; ?>">lista</a></li>
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
