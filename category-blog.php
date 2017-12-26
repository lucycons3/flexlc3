<?php get_header(); ?>
	
<!--PÁGINA-->
		
		<!-- IMPRIMIRPOST -->
			<div class="row">
				<div class="col-md-2">
					<h3>Temas</h3>
					<?php wp_tag_cloud(array(
						'smallest'                  => 10, 
						'largest'                   => 10,
						'format'		=>'list',
					)); ?>
				</div>
				
				<div class="col-md-10 col-sm-10 col-12">
					<div class="row">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink(); ?>"><div class="col-md-4 col-sm-12 col-12 encate fondopre" style="background-image:url('<?php echo atrib_imagen_destacada();?>');">
							<div class="opac encate fondopre" style="align-items: center;padding-left:5%;padding-right:5%;padding-top:2%;padding-bottom:2%;text-align:left;">
								<h3><?php the_title();?></h3>
								<p><?php the_date();?></p>
							</div>
						</a>
					</div>
							<?php endwhile; else: ?>
							<p><?php _e( 'No hay entradas' ); ?></p>
							<?php endif; ?>
				</div>
			</div>
		
		
<!--FINAL-->
<?php get_footer();?>
