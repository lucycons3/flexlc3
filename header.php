<!Doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<title><?php bloginfo('name'); ?></title>
		<link rel="shortcut icon" href="<?php bloginfo( 'template_url'); ?>/favicon.ico" />
		
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link rel=stylesheet href="<?php bloginfo( 'template_url'); ?>/css/bootstrap.css">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<LINK REL=StyleSheet HREF="<?php bloginfo( 'stylesheet_url'); ?>" TYPE="text/css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="container-fluid" style="background:white; color:black;padding-top:1%;">
				     	<div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
					      <a class="navbar-brand" href="<?php bloginfo( 'home' ); ?>" style="color:#ddd;">
					      
					      <?php the_custom_logo(); ?>

					      </a>
					    </div>
				    	<div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
					        <?php wp_nav_menu(array(
					        	'container'=>'ul',
					        	'menu_class'=>'nav navbar-nav',
					        	'theme_location'=>'arriba')
					        	); 
					        ?>
					    	<ul class="nav navbar-nav navbar-right">
					   			<li><a href="#"><img src="https://lucycons3.eu/wp-content/themes/flexlc3/images/twitter.png" height="20px"></img></a></li>
					   			<li><a href="#"><img src="https://lucycons3.eu/wp-content/themes/flexlc3/images/pinterest.png" height="30px"></img></a></li>
					   			<li><a href="#"><img src="https://lucycons3.eu/wp-content/themes/flexlc3/images/linkedin.svg" height="20px"></img></a></li>
					      	</ul>
				    	</div>
				  </div>
			</nav>
			<hr>