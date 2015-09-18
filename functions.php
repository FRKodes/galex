<?php
/**
 * Proper way to enqueue scripts and styles
 */
function css_and_js() {
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/all.js', array(), '1.0.1', true );
}

add_action( 'wp_enqueue_scripts', 'css_and_js' );

register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'main_menu' => 'Menu principal',
) );

add_theme_support( 'post-thumbnails', array( 'page', 'promocion' ) );

add_action( 'init', 'create_promo_post_type' );

function create_promo_post_type() {
  register_post_type( 'promocion',
    array(
      'labels' => array(
        'name' => __( 'Promociones' ),
        'singular_name' => __( 'Promoción' )
      ),
      'public' => true,
      'has_archive' => false,
      'supports' => array(
          'title',
          'editor',
          'revisions',
          'thumbnail',
          )
    )
  );
}

function destino_final($host){
  $extra = "";
  if ($host != 'galex.dev') {
    $extra = "/galex";
  }
  return $extra;
}