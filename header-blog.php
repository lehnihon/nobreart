<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header-blog">
		<div class="back-black">
			<div class="container">
				<div class="row">
					<div class="header-logo col-md-4"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header-logo.png"; ?>"/></a></div>
					<div class="header-busca col-md-4 col-md-offset-4">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<ul class="redes_sociais_header">
										<li class="youtube"><a target="_blank" href="#"></a></li>
										<li class="instagram"><a target="_blank" href="#"></a></li>
										<li class="twitter"><a target="_blank" href="#"></a></li>
										<li class="facebook"><a target="_blank" href="#"></a></li>
									</ul>									
								</div>	
							</div>
							<div class="row">
								<form role="search" method="get" class="col-md-12 search-form" action="<?php echo home_url( '/' ); ?>">
									<input type="hidden" name="post_type" value="blog" /><input type="search" class="pesquisar-input" placeholder="<?php echo esc_attr_x( 'Buscar Blog', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" /><input type="image" class="pesquisar-submit" alt="Search"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-buscar.jpg"; ?>" />
								</form>							
							</div>							
						</div>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="back-yellow">		
		</div>
		<div class="menu-blog">
			<nav class="container">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<?php 
							$categories = get_terms( 'categoria_blog' );
							foreach($categories as $category):
							?>
								<li><a href="<?php echo esc_url( home_url( '/' ).'categoria-blog/'.$category->slug); ?>"><?php echo $category->name; ?></a></li>
							<?php endforeach; ?>
						</ul>						
					</div>		
				</div>
			</nav>			
		</div>
	</header><!-- #masthead -->
