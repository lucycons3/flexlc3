<?php get_header(); ?>
	<div class="col-md-2"><?php get_sidebar(); ?></div>	
	<div class="col-md-10">
		<div class="row">
			<div class="col-md-4">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_title(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>