<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<div class="back-black">
			<div class="container">
				<div class="row">
					<div class="header-logo col-md-4"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header-logo.png"; ?>"/></a></div>
					<div class="header-busca col-md-7 col-md-offset-1">
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="back-yellow">
			<nav class="container">
				<ul class="row">
					<li><a href="#">A EMPRESA</a></li>
					<li><a href="#">PRODUTOS</a></li>
					<li><a href="#">DECORAÇÃO</a></li>
					<li><a href="#">SERVIÇOS</a></li>
					<li><a href="#">LOCALIZAÇÃO</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">CONTATO</a></li>
				</ul>
			</nav>			
		</div>
	</header><!-- #masthead -->

