<ul class="side" id="menudesp">
	<li class="side"><a href="http://www.lucycons3.eu">
		<img class="logo" src="<?php bloginfo( 'template_url'); ?>/logo.png" /></a>
	</li>
	<li class="side">
		<?php wp_nav_menu( array ( 'menu' => 'side') ); ?>
	</li>
	<li>
		<a href="https://www.twitter.com/lucycons3"><img src="https://www.lucycons3.eu/wp-content/themes/lc3/images/twitter.png" width="20%" style="padding:2%;" class="rss"/></a>
		<a href="https://www.linkedin.com/in/lucycons3"><img src="https://www.lucycons3.eu/wp-content/themes/lc3/images/linkedin.svg" width="20%" style="padding:2%;" class="rss"/></a>

		<a href="https://es.pinterest.com/lucycons3/"><img src="https://www.lucycons3.eu/wp-content/themes/lc3/images/pinterest.jpg" width="20%" style="padding:2%;" class="rss"/></a>
	</li>
	<li>
<p></p>
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; padding-top:2%; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
</div>

<!--End mc_embed_signup-->
		</li>
<li style=padding: 2%"><?php get_search_form(); ?></li>
	<?php echo qtranxf_generateLanguageSelectCode('image'); ?> 
</ul>
