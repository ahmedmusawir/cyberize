<?php

/**
* Enqueue scripts and styles.
*/
function cyberize_scripts() {
    //CYBERIZE FRAMEWORK 1.0 STYLES UNIFIED & MINIFIED
    wp_enqueue_style( 'cyberize-framework-1-main-style', get_template_directory_uri() . '/assets/dist/css/main.min.css', '', 7.0 );
    
    //CYBERIZE FRAMEWORK 1.0 STYLES UNIFIED & MINIFIED
    wp_enqueue_style( 'cyberize-framework-1-feather-light-style', get_template_directory_uri() . '/assets/dist/css/featherlight.min.css', '', 2.0 );
    wp_enqueue_style( 'cyberize-framework-1-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css', '', 3.0 );
    
    //CYBERIZE FRAMEWORK 1.0 STYLE.CSS - USED FOR POST PRODUCTION UPDATES ONLY
    wp_enqueue_style( 'cyberize-framework-1-style', get_stylesheet_uri(), '', 3.0 );
    
    //CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
    wp_enqueue_script( 'cyberize-framework-1-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js', array(jquery), '20151215', true );
    
    //CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
    // wp_enqueue_script( 'cyberize-framework-1-script', get_template_directory_uri() . '/assets/dist/js/script.min.js', array(jquery), '20151215', true );
    
    // FIREBASE SETUP
    wp_enqueue_script( 'firebase-app', 'https://www.gstatic.com/firebasejs/5.7.2/firebase-app.js', array(), '20151215', true );
    wp_enqueue_script( 'firebase-firestore', 'https://www.gstatic.com/firebasejs/5.7.2/firebase-firestore.js', array(), '20151215', true );
    wp_enqueue_script( 'firebase-config', get_template_directory_uri() . '/assets/dist/js/firebaseConfig.js', array(), '20151215', true );
    
    
    // D3 DONUT GRAPH APP FILES
    wp_enqueue_script( 'd3-main-script', 'https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js', array(), '20151215', true );
    wp_enqueue_script( 'd3-donut-index-script', get_template_directory_uri() . '/assets/dist/js/d3-donut-index.min.js', array(), '20151215', true );
    wp_enqueue_script( 'd3-donut-graph-script', get_template_directory_uri() . '/assets/dist/js/d3-donut-graph.min.js', array(), '20151215', true );
    
    //CYBERIZE FRAMEWORK 1.0 JAVASCRIPTS UNIFIED AND MINIFIED
    wp_enqueue_script( 'cyberize-framework-1-feather-light-js', get_template_directory_uri() . '/assets/dist/js/featherlight.min.js', array(jquery), '20181105', true );
    
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'cyberize_scripts' );