				<?php get_header(); ?>
				<div class="row">
					<div class="col-2 side">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-10 ppal">	
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="col-6 entrada" style="background-image:url('<?php echo atrib_imagen_destacada();?>');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size:cover;word-break:normal;">
								<div class="post_flexlc3">								
									<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									<p class="fecha">Publicado el <?php the_time('j \d\e F \d\e Y ');?> por <a><?php the_author_posts_link(); ?></a> en <?php the_category( ', ' ); ?></p>
									<p><?php the_excerpt();?></p>
								</div>
							</div>
							<?php endwhile; ?>
							
							<?php $args = array(
								'base'               => '%_%',
								'format'             => '?paged=%#%',
								'total'              => 1,
								'current'            => 0,
								'show_all'           => false,
								'end_size'           => 1,
								'mid_size'           => 2,
								'prev_next'          => true,
								'prev_text'          => __('&laquo; Anterior','flexlc3'),
								'next_text'          => __('Siguiente &raquo;','flexlc3'),
								'type'               => 'plain',
								'add_args'           => false,
								'add_fragment'       => '',
								'before_page_number' => '',
								'after_page_number'  => ''
							); 
							
							echo wp_link_pages($args);?>

						<div class="paginacion"><?php posts_nav_link(' &bull; ','<span class="ultimos">&laquo; Posts recientes</span>','<span class="antiguos">Posts antiguos &raquo;</span>'); ?></div>
							
							<?php 
							// clean up after the query and pagination
							wp_reset_postdata(); 
							?>
							
							<?php else:  ?>
							<p><?php _e( 'Lo siento no hemos encontrado posts.','flexlc3' ); ?></p>
							<?php endif; ?>
					</div>
				</div>
				<?php get_footer(); ?>

