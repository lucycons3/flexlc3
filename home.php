<?php get_header(); ?>
			<div class="jumbotron opac" style="background-image:url('<?php header_image(); ?>');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size:cover;height:400px; padding:0px;">
				<div class="opac encate fondopre" style="margin:0;height:400px;align-items: center;display: flex">
					<h2 style="font-size:30pt;font-weight:bold;padding-left:5%;padding-right:5%;text-align:left;">
						Estudio de diseño transdisciplinar
					</h2>
				</div>
			</div>
			<hr>
			<h2 style="text-align:center;font-style:italic;">El diseño es el proceso de creación con un propósito.</h2>
			<p style="text-align:center;">Wucius Wong</p>
			<hr>
		<?php if ( have_posts() ) { the_post();} ?>
			<div class="jumbotron" style="background-image:url('<?php echo atrib_imagen_destacada();?>');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size:cover;word-break:normal;padding:0px;">	
				<div class="opac encate fondopre" style="align-items: center;font-size:30pt;font-weight:bold;padding-left:5%;padding-right:5%;padding-top:2%;padding-bottom:2%;text-align:left;">
					<h2 style="font-weight:bold;"><?php the_title();?></h2>
					<p class="fechajumbo"><?php the_date();?>
					<?php the_excerpt();?></p>
				</div>
			</div>
		</div>
<?php get_footer();?>