<?php
//menús
register_nav_menus(); 
register_nav_menu( arriba, Arriba );
register_nav_menu( abajo, Abajo );

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


?>
