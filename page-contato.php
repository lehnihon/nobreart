<?php
get_header('sem-banner'); ?>

<main id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h4>Contato</h4>
					<p>Envie suas dúvidas ou sugestões, responderemos em breve!</p>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
				</div>
				<div class="col-md-6 text-left">
					<p><strong>Unidade Tatuapé</strong> </p>
					<p>Rua Coelho Lisboa, 675 - Tatuapé</p>
					<p>São Paulo - SP</p>
					<p>11 3232-1732</p><br>
					<p><strong>Unidade Santa Clara</strong> </p>
					<p>Rua Buenópolis, 134 - Santa Clara</p>
					<p>São Paulo - SP</p>
					<p>11 3554-7555</p><br>
					<p><strong>Reclamações Unidade Tatuapé</strong> </p>
					<p>atendimento1@xtremegoldteam.com.br</p>
					<br><p><strong>Reclamações Unidade Santa Clara</strong> </p>
					<p>atendimento2@xtremegoldteam.com.br</p>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</main><!-- #content -->

<?php get_footer(); ?>
