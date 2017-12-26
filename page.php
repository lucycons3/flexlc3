<?php get_header(); ?>	
		<div class="col-md-12">	
			<?php if (have_posts() ):while ( have_posts() ): the_post(); ?>
	<!--IMPRIMIR POST-->
				<h2><?php the_title(); ?></h2>
				<p><?php the_content();?></p>
			<?php endwhile; else: ?>
				<p><?php _e('No hay entradas.'); ?></p>
			<?php endif; ?>

<?php get_footer(); ?>