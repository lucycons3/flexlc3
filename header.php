<!Doctype html>
<html>
	<head>
		<link rel="canonical" href="<?php bloginfo('url');?>">
		<link rel="alternate" href="<?php bloginfo('url');?>" hreflang="es">
		<link rel="alternate" href="<?php bloginfo('url');?>/en" hreflang="en">
		
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<title><?php bloginfo('name'); ?></title>
		
		<link rel="shortcut icon" href="<?php echo site_icon_url(); ?>" />
		
		<LINK REL=stylesheet HREF="<?php bloginfo( 'stylesheet_url'); ?>" TYPE="text/css">
		
		<style type="text/css">
			*{color:#<?php echo get_theme_mod('base_textcolor', '000000'); ?>;}
			body{background-color:#<?php echo get_theme_mod('background_color', '000000'); ?>;}
			h1{color:#<?php echo get_theme_mod('header_textcolor', '000000'); ?>;}
			a, .topnav a{color:#<?php echo get_theme_mod('link_textcolor', '000000'); ?>;}
			a:hover, .topnav a:hover{color:#<?php echo get_theme_mod('linkhover_textcolor', '000000'); ?>;}
		</style>
		
		<?php
		#twitter cards hack
		if(is_single() || is_page()) {
		  $twitter_url    = get_permalink();
		 $twitter_title  = get_the_title();
		 $twitter_desc   = get_the_excerpt();
		   $twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full" );
		    $twitter_thumb  = $twitter_thumbs[0];
		      if(!$twitter_thumb) {
		      $twitter_thumb = 'http://www.gravatar.com/avatar/8eb9ee80d39f13cbbad56da88ef3a6ee?rating=PG&size=75';
		    }
		  $twitter_name   = str_replace('@', '', get_the_author_meta('twitter'));
		?>
		<meta name="twitter:card" value="summary" />
		<meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
		<meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
		<meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
		<meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
		<?php
		  if($twitter_name) {
		?>
		<meta name="twitter:creator" value="@<?php echo $twitter_name; ?>" />
		<?php
		  }
		}
		?>

  	</head>

	<body>
	<header>
		<div class="topnav" id="myTopnav" style="margin:0% auto;">
	 		<?php the_custom_logo()?>
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