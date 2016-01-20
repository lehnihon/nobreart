<section id="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-2 news-left"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/novidades-left.jpg"?>" /><span class="textoa">Receba nossas novidades.</span><span class="textob">ENVIAMOS PARA O SEU E-MAIL.</span></div>
			<div class="col-md-6 news-right"><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); } ?></div>				
		</div>	
	</div>
</section>