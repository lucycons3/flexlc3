<!Doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<title><?php bloginfo('name'); ?></title>
		
		<link rel="shortcut icon" href="<?php bloginfo( 'template_url'); ?>/favicon.ico" />
		
		<LINK REL=stylesheet HREF="<?php bloginfo( 'stylesheet_url'); ?>" TYPE="text/css">
		
		<?php
		#twitter cards hack
		if(is_single() || is_page()) {
		  	$twitter_url    = get_permalink();
		 	$twitter_title  = get_the_title();
		 	$twitter_desc   = get_the_excerpt();
	   	$twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full" );
	  		$twitter_name   = str_replace('@', '', get_the_author_meta('twitter'));
		?>
		<meta name="twitter:card" value="summary" />
		<meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
		<meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
		<meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
		<meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
		<?
		  if($twitter_name) {
		?>
		<meta name="twitter:creator" value="@<?php echo $twitter_name; ?>" />
		<?
		  }
		}
		?>

  	</head>

	<body>
	<header>
		<div class="topnav" id="myTopnav" style="margin:0% auto;">
	 		<?php the_custom_logo();?>
	 		<?php wp_nav_menu(array(
		 		'container' => 'ul',
		 		'menu_class' => 'top-nav',
		 		'theme_location'=> 'arriba')
		 		);
	 	 	?>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	 			<i class="fa fa-bars"></i>
	 		</a>
		</div>

	</header>