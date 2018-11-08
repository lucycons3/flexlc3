<?php
//menús
register_nav_menus(); 
register_nav_menu( "arriba", "Arriba" );
register_nav_menu( "abajo", "Abajo" );
register_nav_menu( "sidebar", "Sidebar");

// Register Sidebars
function custom_sidebar() {

	$args = array(
		'id'            => 'sidebar-lateral',
		'name'          => __( 'Sidebar lateral', 'flexlc3' ),
		'description'   => __( 'Aparece en el lado.', 'flexlc3' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebar' );


//Cabecera
add_theme_support( 'custom-header' );

//Ancho de los contenidos
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

//Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1600, 910, true);

	//Default WordPress
	the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
	the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
	the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
	the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
	the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)
	 
	//With WooCommerce
	the_post_thumbnail( 'shop_thumbnail' ); // Shop thumbnail (180 x 180 hard cropped)
	the_post_thumbnail( 'shop_catalog' );   // Shop catalog (300 x 300 hard cropped)
	the_post_thumbnail( 'shop_single' );    // Shop single (600 x 600 hard cropped)

//Logo
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 100,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// Title de la pagina

add_theme_support( 'title-tag' );

/*
 * Función para imprimir la ruta de la imagen destacada.
 * Ejemplo de utilización: echo atrib_imagen_destacada();
 */
function atrib_imagen_destacada() {
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' ); // Sustituir por thumbnail, medium, large o full
    return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
}

/*Comments*/

/* Gutenberg*/

add_theme_support( 'gutenberg', array(
 
    // Theme supports wide images, galleries and videos.
    'wide-images' => true,
 
    // Make specific theme colors available in the editor.
    'colors' => array(
        '#ffffff',
        '#000000',
        '#cccccc',
    ),
 
) );

add_theme_support( 'align-wide' );

/**
* Enqueue editor styles for Gutenberg
*/
 
function theme_slug_editor_styles() {
    wp_enqueue_style( 'theme-slug-editor-style', get_template_directory_uri() . '/assets/stylesheets/editor-style.css' );
}
add_action( 'enqueue_block_editor_assets', 'theme_slug_editor_styles' );


add_theme_support( 'automatic-feed-links' );

// numbered pagination
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\">";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
add_action( 'after_setup_theme', 'pagination' );

function FlexLC3_customize_register( $wp_customize ) {
	
	$wp_customize->add_section("redessociales", array(
		"title" => "Redes sociales",
		"priority" => 20,
	));

	//color del h1
	
   $wp_customize->add_setting( 'header_textcolor' , array(
    'default'   => '#000000',
    'sanitize_callback' => 'sanitize_hex_color_no_hash',
    'transport' => 'refresh',
	));

	// color de los links
		
	$wp_customize->add_setting('link_textcolor', array(
	'default' => '#b65864',
   'sanitize_callback' => 'sanitize_hex_color_no_hash',
	'type' => 'theme_mod',
	'transport' => 'refresh'	
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'my_theme_link_textcolor',
		array(
			'label' => __( 'Color de los links', 'flexlc3' ),
			'settings'   => 'link_textcolor',
			'priority'   => 10,
			'section'    => 'colors',		
		)	
	));
	
	// color:hover de los links
		
	$wp_customize->add_setting('linkhover_textcolor', array(
	'default' => '#55a2b4',
   'sanitize_callback' => 'sanitize_hex_color_no_hash',
	'type' => 'theme_mod',
	'transport' => 'refresh'	
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'my_theme_linkhover_textcolor',
		array(
			'label' => __( 'Color hover de los links', 'flexlc3' ),
			'settings'   => 'linkhover_textcolor',
			'priority'   => 10,
			'section'    => 'colors',		
		)	
	));
	
	// background
		
	$wp_customize->add_setting('background_color', array(
	'default' => '#f6f1ec',
   'sanitize_callback' => 'sanitize_hex_color_no_hash',
	'type' => 'theme_mod',
	'transport' => 'refresh'	
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'my_theme_background_color',
		array(
			'label' => __( 'Color de fondo', 'flexlc3' ),
			'settings'   => 'background_color',
			'priority'   => 1,
			'section'    => 'colors',		
		)	
	));
	
	//base_textcolor (p)
	
	$wp_customize->add_setting('base_textcolor', array(
	'default' => '#000',
	'type' => 'theme_mod',
   'sanitize_callback' => 'sanitize_hex_color_no_hash',
	'transport' => 'refresh'	
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'my_theme_base_textcolor',
		array(
			'label' => __( 'Color de texto', 'flexlc3' ),
			'settings'   => 'base_textcolor',
			'priority'   => 2,
			'section'    => 'colors',		
		)	
	));
	
	//twitter
	
	$wp_customize->add_setting('twitter_account', array(
	'default' => '',
	'type' => 'theme_mod',
	'transport' => 'refresh'	
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'my_theme_twitter_account',
		array(
			'label' => __( 'Perfil de Twitter', 'flexlc3' ),
			'section'    => 'redessociales',		
			'settings'   => 'twitter_account',
			'priority'   => 2,
			'type' => 'text'
		)	
	));
	
	//github
	
	$wp_customize->add_setting('github_account', array(
	'default' => '',
	'type' => 'theme_mod',
	'transport' => 'refresh'	
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'my_theme_github_account',
		array(
			'label' => __( 'Perfil de GitHub', 'flexlc3' ),
			'section'    => 'redessociales',		
			'settings'   => 'github_account',
			'priority'   => 3,
			'type' => 'text'
		)	
	));
}
add_action( 'customize_register', 'FlexLC3_customize_register' );

// fondo 

$args = array(
	'default-color' => 'fff',
);
add_theme_support( 'custom-background', $args );
