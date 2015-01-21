<?php
/*
Template Name: Header
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" dir="<?php bloginfo(
'text_direction'); ?>" xml:lang="<?php bloginfo('language'); ?>">
	<head>
		<meta name="google-site-verification" content="aEWFuVlletNYIolx8kR5u6bvyxwHVNiZ4H9SF1oaviQ" />
		<meta name="google-site-verification" content="Wr_HKVGTUntHMTWb5cEGe-ykfULKAs5H8sk-rMp4RoA" />
		<meta name="google-site-verification" content="fcKv5Fy5IHZZrr_KHAV5tRvKEafOGU0LVfQvSpzZZdY" />

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php 
bloginfo('charset'); ?>" />
		<title><?php wp_title ( '|', true,'right' ); ?></title>
		<meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/outlook-favicon.ico"
 type="image/x-icon" />

		<?php $my_theme = wp_get_theme(); ?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"
 />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel=
'stylesheet' type='text/css' />

	<link rel="apple-touch-icon" href="/images/apple-touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-iphone4.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-icon-ipad3.png" />

		<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo(
'template_url'); ?>/ie.css" /><![endif]-->
		<?php
			wp_enqueue_script('jquery');
			wp_enqueue_script('cycle', get_template_directory_uri() . '/js/jquery.cycle.all.min.js', 
'jquery', false);
			wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', 
'jquery', false);
			if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
			wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', 
false);
		?>

		<?php wp_head(); ?>

	<meta property="fb:admins" content="788999812" />

		<?php if ( is_home() && !get_option('ss_disable') ) : ?>
		<script type="text/javascript">
			(function($) {
				$(function() {
					$('#slideshow').cycle({
						fx:     'scrollHorz',
						timeout: <?php echo (get_option('ss_timeout')) ? get_option('ss_timeout') : 
'7000' ?>,
						next:   '#rarr',
						prev:   '#larr'
					});
				})
			})(jQuery)
		</script>
		<?php endif; ?>

	<!-- Google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-28769773-1', 'aragonoutlook.org');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script>
	
	<!-- Google DFP ads -->
	<script type='text/javascript'>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
		(function() {
		var gads = document.createElement('script');
		gads.async = true;
		gads.type = 'text/javascript';
		var useSSL = 'https:' == document.location.protocol;
		gads.src = (useSSL ? 'https:' : 'http:') + 
		'//www.googletagservices.com/tag/js/gpt.js';
		var node = document.getElementsByTagName('script')[0];
		node.parentNode.insertBefore(gads, node);
		})();
	</script>

	<!-- page-type targeting -->
	<?php if ( is_front_page() ) { ?>
		<script>googletag.cmd.push(function() { googletag.pubads().setTargeting("page-type","home"); 
});</script>
	<?php } elseif ( is_single() ) { ?>
		<script>googletag.cmd.push(function() { 
googletag.pubads().setTargeting("page-type","article"); });</script>
	<?php } ?>

	<!-- category targeting disabled for now -->
	<?php
	/* if ( is_single() || is_category() ) {
		foreach ( get_the_category() as $category ) {
			echo '<script>googletag.cmd.push(function() { 
googletag.pubads().setTargeting("section","' . $category . '"); });</script>';
		}
	} */
	?>

	<script type='text/javascript'>
		googletag.cmd.push(function() {
		googletag.defineSlot('/29271107/Outlook-article-BTF-468x60', [468, 60], 
'div-gpt-ad-1392342608875-0').addService(googletag.pubads());
		googletag.defineSlot('/29271107/Outlook-sidebar-ATF-300x250', [[300, 250], [300, 100]], 
'div-gpt-ad-1392342608875-1').addService(googletag.pubads());
		googletag.defineSlot('/29271107/Outlook-sidebar-BTF-300x600', [[300, 250], [300, 600]], 
'div-gpt-ad-1392342608875-2').addService(googletag.pubads());
		googletag.pubads().enableSingleRequest();
		googletag.enableServices();
		});
	</script>
	<!-- end Google DFP ads -->

	</head>

	<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=146716895537285";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class="wrapper">

			<!-- Leaderboard ad wrapper -->
			<div style="background: #eee; padding: 10px 0 15px; display: none;">
				<!-- Leaderboard ad -->
				<div style="width: 728px; min-height: 0px; max-height: 90px; margin: -20px auto 0;">
				</div>
			</div>

			<div class="header clear">
				<div class="logo">
					<a data-instant href="<?php bloginfo('home'); ?>"><img 
src="http://aragonoutlook.org/images/flag9.png" alt="<?php bloginfo('name'); 
?>"/></a>
				</div>

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Site 
description') ) ?>

				<?php get_search_form(); ?>

				<?php wp_nav_menu(array('menu' => 'Top menu', 'theme_location' => 'Top menu', 'depth' 
=> 1, 'container' => 'div', 'container_class' => 'menu', 'menu_id' => false, 
'menu_class' => false)); ?>

			</div> <!-- end topmost header (site logo, search field, etc.) -->

			<?php wp_nav_menu(array('menu' => 'Navigation', 'theme_location' => 'Navigation', 'depth' 
=> 2, 'container' => 'div', 'container_class' => 'nav', 'menu_class' => 'dd', 'menu_id' 
=> 'dd', 'walker' => new extended_walker())); ?>

			<?php if ( is_home() && !get_option('ss_disable') ) get_template_part('slideshow'); ?>

			<!-- Container -->
			<div id="container" class="clear">