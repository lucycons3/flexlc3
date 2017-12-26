<?php get_header(); ?>
	
<!--PÁGINA-->
		
		<!-- IMPRIMIRPOST -->
			<div class="row">
			<div class="col-md-2 side col-xs-12"><?php get_sidebar(); ?></div>
			<div class="col-md-10 col-xs-12">
				<div class="row">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>"><div class="col-md-4 encate" style="background:url('<?php echo atrib_imagen_destacada();?>') no-repeat 100%;">
						<div class="opac">
							<h3 class="catego"><?php the_title();?></h3><br>
							<ol class="menu"><?php the_category();?></ul>
						</div></a>
					</div>
						<?php endwhile; else: ?>
						<p><?php _e( 'No hay entradas' ); ?></p>
						<?php endif; ?>
				</div>
			</div>
		
		
<!--FINAL-->
<?php get_footer();?>
