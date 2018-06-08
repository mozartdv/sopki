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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44116844-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44116844-11');
</script>

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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49178755 = new Ya.Metrika2({
                    id:49178755,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49178755" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="page" class="site">
	
	
	<header id="masthead" class="site-header">
	

		<nav>
			<div class="nav-wrapper white grey-text text-darken-4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo center"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png"/></a>
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
