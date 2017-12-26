<?php get_header(); ?>	
		<div class="col-md-2">
			<div class="col-md-2 side" style="text-align:justify;">
				<h3>Temas</h3>
				<?php wp_tag_cloud(array(
					'smallest'                  => 10, 
					'largest'                   => 10,
					'format'		=>'list',
				)); ?>
			</div>
		</div>
		<div class="col-md-10">	
			<?php if (have_posts() ):while ( have_posts() ): the_post(); ?>
	<!--IMPRIMIR POST-->
	<p><?php the_category(",");?> | <?php the_tags(" ",","," ");?></p>
				<h2><?php the_title(); ?></h2>
				<h4 style="font-size:100%; padding-top:2%;"><?php the_author();?> | <?php the_date(); ?></h4>
				<p><?php the_content();?></p>
			<?php endwhile; else: ?>
				<p><?php _e('No hay entradas.'); ?></p>
			<?php endif; ?>
			<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
	<!--COMENTARIOS-->
		<?php comments_template(); ?>
		</div>

<?php get_footer(); ?>
