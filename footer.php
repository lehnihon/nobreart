<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'site' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'site' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'site' ), 'site', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
