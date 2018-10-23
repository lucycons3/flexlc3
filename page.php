<?php get_header(); ?>	
		<div class="prede">	
			<?php if (have_posts() ):while ( have_posts() ): the_post(); ?>
	<!--IMPRIMIR POST-->
				<h1><?php the_title(); ?></h1>
				<p><?php the_content();?></p>
			<?php endwhile; else: ?>
				<p><?php _e('No hay entradas.', 'es'); ?></p>
			<?php endif; ?>	
		</div>

<?php get_footer(); ?>