<?php
/**
 * NoonPost functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NoonPost
 */


//Theme functions and definitions.
require get_template_directory() . '/inc/theme-functions.php';

//Enqueue-scripts.
require get_template_directory() . '/inc/enqueue.php';

//Nav-walker.
require get_template_directory() . '/inc/navwalker.php';

//Register widget.
require get_template_directory() . '/inc/widgets.php';

//Theme Option functions and definitions.
require get_template_directory() . '/inc/theme-option/options.php';

//TGM.
require get_template_directory() . '/assets/inc/tgm.php';

//TGM activation.
require get_template_directory() . '/lib/class-tgm-plugin-activation.php';




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


