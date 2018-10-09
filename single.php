<?php get_header(); ?>	
		<div class="col-2">
			
				<?php get_sidebar();?>				

		</div>
		<div class="col-10 ppal">	
			<?php if (have_posts() ):while ( have_posts() ): the_post(); ?>
	<!--IMPRIMIR POST-->
	<p><?php the_category(" | ");?></p>
				<h1><?php the_title(); ?></h1>
				<h4 style="font-size:100%; padding-top:2%;"><?php the_author_posts_link(); ?> | <?php the_date(); ?></h4>
				<p><?php the_content();?></p>
		<div class="row">		
			<div class="col-md-5 prevnext" style="float:left;"><strong>Entrada anterior</strong><br><?php previous_post_link('<em>%link</em>'); ?></div>
			<div class="col-md-5 prevnext" style="float:right;"><strong>Siguiente entrada</strong><br><?php next_post_link('<em>%link</em>'); ?></div>
		</div>
			<?php endwhile; else: ?>
				<p><?php _e('No hay entradas.'); ?></p>
			<?php endif; ?>
			<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
	<!--COMENTARIOS-->
		<?php comments_template( "comments.php"); ?>
		</div>
		<div class="col-md-2"></div>
		

<?php get_footer(); ?>
