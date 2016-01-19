<!DOCTYPE html>
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
							</div><br>
							<div class="row">
								<form role="search" method="get" class="col-md-12 search-form" action="<?php echo home_url( '/' ); ?>">
									<input type="hidden" name="post_type" value="post" /><input type="search" class="pesquisar-input" placeholder="<?php echo esc_attr_x( 'Buscar Produto', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" /><input type="image" class="pesquisar-submit e-claro" alt="Search"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-buscar.jpg"; ?>" />
								</form>							
							</div>							
						</div>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="back-yellow">
			<nav class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="btn-group botao-menu-responsivo">
							<li class="item">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="<?php echo esc_url( home_url( '/' )."sobre"); ?>">A EMPRESA</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' )."servicos"); ?>">SERVIÇOS</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' )."localizacao"); ?>">LOCALIZAÇÃO</a></li>
									<li><a target="_blank" href="<?php echo esc_url( home_url( '/' )."blog"); ?>">BLOG</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' )."contato"); ?>">CONTATO</a></li>
								</ul>								
							</li>
							<li class="item">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									PRODUTOS
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<?php 
									$categories = get_categories( );
									foreach($categories as $category):
									?>
										<li><a href="<?php echo esc_url( home_url( '/' ).'categoria/'.$category->slug); ?>"><?php echo $category->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>
							<li class="item">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									DECORAÇÃO
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<?php 
									$categories = get_terms( 'categoria_decoracao' );
									foreach($categories as $category):
									?>
										<li><a href="<?php echo esc_url( home_url( '/' ).'categoria-decoracao/'.$category->slug); ?>"><?php echo $category->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>
						</ul>
						<ul class="menu-princ">
							<li class="item"><a href="<?php echo esc_url( home_url( '/' )."sobre"); ?>">A EMPRESA</a></li>
							<li class="item">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									PRODUTOS
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<?php 
									$categories = get_categories( );
									foreach($categories as $category):
									?>
										<li><a href="<?php echo esc_url( home_url( '/' ).'categoria/'.$category->slug); ?>"><?php echo $category->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>
							<li class="item">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									DECORAÇÃO
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<?php 
									$categories = get_terms( 'categoria_decoracao' );
									foreach($categories as $category):
									?>
										<li><a href="<?php echo esc_url( home_url( '/' ).'categoria-decoracao/'.$category->slug); ?>"><?php echo $category->name; ?></a></li>
									<?php endforeach; ?>
								</ul>								
							</li>
							<li class="item"><a href="<?php echo esc_url( home_url( '/' )."servicos"); ?>">SERVIÇOS</a></li>
							<li class="item"><a href="<?php echo esc_url( home_url( '/' )."localizacao"); ?>">LOCALIZAÇÃO</a></li>
							<li class="item"><a href="<?php echo esc_url( home_url( '/' )."blog"); ?>">BLOG</a></li>
							<li class="item"><a href="<?php echo esc_url( home_url( '/' )."contato"); ?>">CONTATO</a></li>
						</ul>						
					</div>
				</div>
			</nav>			
		</div>
	</header><!-- #masthead -->

