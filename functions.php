<?php
/**
* Theme Setup Functions
*/
require get_template_directory() . '/_functions/theme-setup.php';

/**
* Widget Setup Functions
*/
require get_template_directory() . '/_functions/widget-setup.php';

/**
* Enqueue scripts and styles.
*/
require get_template_directory() . '/_functions/scripts-setup.php';


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

/*======================================
=            MOOSE INCLUDES            =
======================================*/

/**
* Bootstrap 4 Nav Walker
*/
require get_template_directory() . '/_functions/bootstrap-navwalker.php';
/**
* Helper Functions
*/
require get_template_directory() . '/_functions/helpers-setup.php';

/**
*
* React App Setup
*
*/
require get_template_directory() . '/_functions/react-setup.php';

/**
*
* React App Setup
*
*/
require get_template_directory() . '/_functions/d3-apps-setup.php';




/*=====  End of MOOSE INCLUDES  ======*/