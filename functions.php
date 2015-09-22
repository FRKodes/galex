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
	'main_menu' => 'Menu principal',
) );

add_theme_support( 'post-thumbnails', array( 'page', 'promocion', 'sucursal' ) );

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

add_action( 'init', 'create_sucursal_post_type' );

function create_sucursal_post_type() {
	register_post_type( 'sucursal',
		array(
			'labels' => array(
				'name' => __( 'Sucursales' ),
				'singular_name' => __( 'Sucursal' )
			),
			'public' => true,
			'has_archive' => false,
			'supports' => array(
					'title',
					'revisions',
					'thumbnail',
					)
		)
	);
}

add_action( 'init', 'create_sucursal_taxonomies', 0 );

function create_sucursal_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Unidades', 'taxonomy general name' ),
		'singular_name'     => _x( 'unidad', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Unidades' ),
		'all_items'         => __( 'All Unidades' ),
		'parent_item'       => __( 'Parent unidad' ),
		'parent_item_colon' => __( 'Parent unidad:' ),
		'edit_item'         => __( 'Edit unidad' ),
		'update_item'       => __( 'Update unidad' ),
		'add_new_item'      => __( 'Add New unidad' ),
		'new_item_name'     => __( 'New unidad Name' ),
		'menu_name'         => __( 'unidad' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'unidad' ),
	);

	register_taxonomy( 'unidad', array( 'sucursal' ), $args );

}

function destino_final($host){
	$extra = "";
	if ($host != 'galex.dev') {
		$extra = "/galex";
	}
	return $extra;
}