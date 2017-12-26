				<?php get_header(); ?>
					<div class="col-md-3 side">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-md-9">	
						<?php if (have_posts() ):while ( have_posts() ): the_post(); ?>
							<!--IMPRIMIR POST-->
							<?php the_title(); ?>
							<?php endwhile; else: ?>
							<p><?php _e('No hay entradas.'); ?></p>
							<?php endif; ?>
					</div>
				<?php get_footer(); ?>