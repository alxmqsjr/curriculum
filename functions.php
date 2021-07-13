<?php
/**
 * Tema Boostrap convertido para Wordpress por Alexandre Marques (alexandre-marques@live.com)
 */


if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'curriculum_setup' ) ) :

	function curriculum_setup() {

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'curriculum_custom_background_args',
				array(
					'default-color' => 'ffffff',	
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_image_size( 'cr_image_cropped', 500, 500 );

	}
endif;
add_action( 'after_setup_theme', 'curriculum_setup' );

function curriculum_menus() {
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Secundário', 'curriculum' ),
		)
	);
}
add_action( 'init', 'curriculum_menus' );


function curriculum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'curriculum_content_width', 640 );
}
add_action( 'after_setup_theme', 'curriculum_content_width', 0 );

// Controle do excerpt
function curriculum_excerpt( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'curriculum_excerpt', 999 );


//Scripts, comentários e arquivos de estilos
function curriculum_scripts() {
	wp_enqueue_style( 'curriculum-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'curriculum-style', 'rtl', 'replace' );
	wp_enqueue_script( 'curriculum-jq-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'curriculum-js-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), null, true );
	wp_enqueue_script( 'curriculum-jq-plugin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array(), null, true );
	wp_enqueue_script( 'curriculum-js', get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'curriculum_scripts' );

// Puxando o Customizer
require get_template_directory() . '/inc/customizer.php';
