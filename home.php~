<?php get_header(); ?>
			<div class="jumbotron" style="background-image:url('<?php header_image(); ?>');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size:cover;height:400px; padding:0px;">
				<div class="encate fondopre" style="background:rgba(255,255,255,0.5);margin:0;height:400px;align-items: center;display: flex;">
					<h1 style="font-size:30pt;margin-left:5%;font-weight:bold;text-align:left;">
						<?php echo get_bloginfo('description')?>
					</h1>
				</div>
			</div>

		<?php if ( have_posts() ) { the_post();} ?>
			<div class="jumbotron" style="background-image:url('<?php echo atrib_imagen_destacada();?>');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size:cover;word-break:normal;padding:0px;">	
				<div class="opac encate fondopre ent" style="align-items: center;text-align:center;">
					<a href="<?php the_permalink(); ?>"><h2 style="font-weight:bold;"><?php the_title();?></h2></a>
					<p class="fechajumbo"><?php the_date();?> | <?php the_author_posts_link(); ?> </p>
					<?php the_excerpt();?></p>
				</div>
			</div>
		</div>
<?php get_footer();?>