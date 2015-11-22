<?php
get_header('blog'); ?>
</header><!--#header-->
<div id="content">
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>	
				</div>
			</div>
		</div>
	</section>


</div><!-- #content -->
<?php get_footer(); ?>
