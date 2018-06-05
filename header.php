<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sopki
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	
	<header id="masthead" class="site-header">
	<div class='container center-align'>
		<div class="site-branding ">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$sopki_description = get_bloginfo( 'description', 'display' );
			if ( $sopki_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sopki_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</div>	

		<nav>
			<div class="nav-wrapper white grey-text text-darken-4">
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="menu-font left hide-on-med-and-down">
			
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'container' => '', 'items_wrap'  => '%3$s' ) ); ?>
			</ul>
			
			</div>
		</nav>
		<ul class="menu-font sidenav" id="mobile-demo">
        		<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'container' => '', 'items_wrap'  => '%3$s' ) ); ?>
        		<!--<li ><a class="link-navigation" href="/contact/">Контакты</a></li>-->
        
      		</ul>
		
		<!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="container">
	<div id="content" class="site-content">
