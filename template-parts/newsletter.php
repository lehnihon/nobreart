<section id="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-2 news-left"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/novidades-left.png"?>" /></div>
			<div class="col-md-6 news-right"><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?></div>				
		</div>	
	</div>
</section>