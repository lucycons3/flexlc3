<?php get_header(); ?>	
		<div class="col-2 side">
					<?php get_sidebar(); ?>
		</div>
		<div class="col-10" style="padding-left:15%">	
			<?php
				// set the "paged" parameter (use 'page' if the query is on a static front page)
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				
				// the query
				$the_query = new WP_Query( array(
	                'posts_per_page' => 6,
	                'paged'=>$paged
	            ) ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
				
				<?php
				// the loop
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
				?>
				<div class="col-6 entrada" style="background-image:url('<?php echo atrib_imagen_destacada();?>');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size:cover;word-break:normal;">
					<div class="post">								
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<p class="fecha">Publicado el <?php the_time();?> por <a><?php the_author_posts_link(); ?></a> en <?php the_category( ', ' ); ?></p>
						<p><?php the_excerpt();?></p>
					</div>
				</div>
				<?php endwhile; ?>
			<div class="">
				<?php if (function_exists("pagination")) {
	   		 pagination($the_query->max_num_pages);
				} ?>
			</div>
				
				<?php 
				// clean up after the query and pagination
				wp_reset_postdata(); 
				?>
				
				<?php else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>

<?php get_footer(); ?>