<?php
//Include Files
require get_stylesheet_directory() . '/inc/theme-functions.php';
require get_stylesheet_directory() . '/inc/theme-options.php';
?>
<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'ministudio' for the surrender theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<?php
function ministudio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ministudio' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ministudio' ),
		'before_widget' => '<section id="%1$s" class="sidebar_wrap category-detail wow  fadeInUp animated">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'ministudio_widgets_init' );

/*****************************************/
/******          WIDGETS     *************/
/*****************************************/

add_action('widgets_init', 'ministudio_register_widgets');

function ministudio_register_widgets() {

	register_widget('ministudio_slider');
	register_widget('ministudio_about');
	register_widget('ministudio_services');
	register_widget('ministudio_portfolio');
	register_widget('ministudio_pricing');

	$ministudio_sidebars = array ( 'sidebar-slider' => 'sidebar-slider', 'sidebar-about' => 'sidebar-about', 'sidebar-services' => 'sidebar-services', 'sidebar-portfolio' => 'sidebar-portfolio', 'sidebar-pricing' => 'sidebar-pricing' );

	/* Register sidebars */
	foreach ( $ministudio_sidebars as $ministudio_sidebar ):

		if( $ministudio_sidebar == 'sidebar-slider' ):

			$ministudio_name = __('Slider widget', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-about' ):

			$ministudio_name = __('Wie widgets', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-services' ):

			$ministudio_name = __('Wat widgets', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-portfolio' ):

			$ministudio_name = __('Waarom widgets', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-pricing' ):

			$ministudio_name = __('Winkel widgets', 'ministudio');

		else:

			$ministudio_name = $ministudio_sidebar;

		endif;

        register_sidebar(
            array (
                'name'          => $ministudio_name,
                'id'            => $ministudio_sidebar,
                'before_widget' => '',
                'after_widget'  => ''
            )
        );

    endforeach;
}
?>
