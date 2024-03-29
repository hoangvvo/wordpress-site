<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoangvvo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-dark pt-4">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Expanded">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img height="32" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>" />
					<span><a href=""></a></span>
				</a><!-- .site-branding -->
				<ul class="navbar-nav flex-row d-none d-md-flex nav-social-link">
					<li class="nav-item">
						<a href="<?php echo get_theme_mod( 'linkedin-link' ); ?>" class="nav-link"><i><svg viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg></i></a>
					</li>
				</ul>
				<div class="collapse navbar-collapse" id="navbarHeader">
					<ul class="navbar-nav ml-md-auto ">
					<?php
					$menuParameters = array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'echo'           => false,
						'items_wrap'     => '%3$s',
						'depth'			 => 0
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );
					?>
					</ul>
				</div><!-- #site-navigation -->
			</div>	
		</nav>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
