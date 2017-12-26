<?php get_header(); ?>	
		<div class="col-md-2 side">
					<?php get_sidebar(); ?>
		</div>
		<div class="col-md-10">	
			<?php if (have_posts() ):while ( have_posts() ): the_post(); ?>
	<!--IMPRIMIR POST-->
				<h2><?php the_title(); ?></h2>
				<h4 style="font-size:100%; padding-top:2%;"><?php the_author();?></a> | <?php the_date(); ?></h4>
				<p><?php the_excerpt();?></p>
			<?php endwhile; else: ?>
				<p><?php _e('No hay entradas.'); ?></p>
			<?php endif; ?>
	<!--COMENTARIOS-->
		<?php comments_template(); ?>

<?php get_footer(); ?>