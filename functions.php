<?php
//menús
register_nav_menus(); 
register_nav_menu( "arriba", "Arriba" );
register_nav_menu( "abajo", "Abajo" );
register_nav_menu( "sidebar", "Sidebar");

//Cabecera
add_theme_support( 'custom-header' );

//Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1600, 910, true);

//Logo
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 100,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

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

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

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

function mytheme_customize_register( $wp_customize ) {
   $wp_customize->add_setting( 'header_textcolor' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );
}
add_action( 'customize_register', 'mytheme_customize_register' );
