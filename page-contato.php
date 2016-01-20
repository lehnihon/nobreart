<?php
get_header('sem-banner'); ?>

<main id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h4>Contato</h4>
					<p>Envie suas dúvidas ou sugestões, responderemos em breve!</p>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 9 ); } ?>
				</div>
				<div class="col-md-6 text-left">
					<p><strong>Localização</strong> </p>
					<p>Rua São Jorge, 86 - Tatuapé, São Paulo</p>
					<p>Telefone (11) 3938-0200</p>
					<p>contato@nobreartedesign.com.br</p>				
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</main><!-- #content -->

<?php get_footer(); ?>
