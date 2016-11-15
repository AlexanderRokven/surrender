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

	$ministudio_sidebars = array ( 'sidebar-slider' => 'sidebar-slider', 'sidebar-wie' => 'sidebar-wie', 'sidebar-wat' => 'sidebar-wat', 'sidebar-waarom' => 'sidebar-waarom', 'sidebar-winkel' => 'sidebar-winkel' );

	/* Register sidebars */
	foreach ( $ministudio_sidebars as $ministudio_sidebar ):

		if( $ministudio_sidebar == 'sidebar-slider' ):

			$ministudio_name = __('Slider widget', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-wie' ):

			$ministudio_name = __('Wie zijn we widget', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-wat' ):

			$ministudio_name = __('Wat doen we widget', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-waarom' ):

			$ministudio_name = __('Waarom doen we dit widget', 'ministudio');

		elseif( $ministudio_sidebar == 'sidebar-winkel' ):

			$ministudio_name = __('Winkel widget', 'ministudio');

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
