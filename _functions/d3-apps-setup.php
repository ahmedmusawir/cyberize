<?php

/**
*
* THIS IS THE LINK FOR ALL REACT APPS WHILE IN DEV
*
*/
// wp_enqueue_script( 'cyberize-react-todo-app', 'http://localhost:8080/bundle.js', array(), '20151215', true );


function moose_d3_setup() {
    if ( is_page_template( 'template-d3-donut.php' ) ) {
        
        wp_enqueue_script( 'd3-donut-index-script', get_template_directory_uri() . '/assets/dist/js/d3-donut-index.min.js', array(), '20151215', true );
        wp_enqueue_script( 'd3-donut-graph-script', get_template_directory_uri() . '/assets/dist/js/d3-donut-graph.min.js', array(), '20151215', true );
        
    } else if ( is_page_template( 'template-d3-linechart.php' ) )  {
        
        wp_enqueue_script( 'd3-linechart-index-script', get_template_directory_uri() . '/assets/dist/js/d3-linechart-index.min.js', array(), '20151215', true );
        wp_enqueue_script( 'd3-linechart-graph-script', get_template_directory_uri() . '/assets/dist/js/d3-linechart-graph.min.js', array(), '20151215', true );
        
    }
}
add_action( 'wp_enqueue_scripts', 'moose_d3_setup' );