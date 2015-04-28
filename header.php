<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"><![endif]-->
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<header id="header">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="A logo with scaffolding being designed." id="header-logo"><br>
			<img src="<?php bloginfo('template_directory'); ?>/img/divide_long.png"><br>
			<h1>Something&#8217;s<br>coming&hellip;</h1><br>
			<img src="<?php bloginfo('template_directory'); ?>/img/divide_short.png"><br>
			<h2 class="description">June 8-10, 2015</h2><br>
			<?php if(function_exists('mc4wp_form')) { 
				mc4wp_form();
			} ?>
		</header>

