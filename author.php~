<?php get_header(); ?>	
		<div class="col-2 side">
					<?php get_sidebar(); ?>
		</div>
		<div class="col-10" style="padding-left:15%">	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-6 entrada" style="background-image:url('<?php echo atrib_imagen_destacada();?>');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size:cover;word-break:normal;">
					<div class="post_flexlc3">								
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<p class="fecha">Publicado el <?php the_time();?> por <a><?php the_author_posts_link(); ?></a> en <?php the_category( ', ' ); ?></p>
						<p><?php the_excerpt();?></p>
					</div>
				</div>
				<?php endwhile; ?>
				<div class="paginacion"><?php posts_nav_link(' &bull; ','<span class="ultimos">&laquo; Últimos posts</span>','<span class="antiguos">Posts antiguos &raquo;</span>'); ?></div>
			
				<?php 
				// clean up after the query and pagination
				wp_reset_postdata(); 
				?>
				
				<?php else:  ?>
				<p><?php _e( 'Lo siento no hemos encontrado posts con tu búsqueda.','flexlc3' ); ?></p>
				<?php endif; ?>
			</div>

<?php get_footer(); ?>