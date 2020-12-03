<?php
/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'theme_add_scripts_styles');
function theme_add_scripts_styles()
{
    // Parent stylesheet.
    wp_enqueue_style( 'twentytwenty-parent', get_template_directory_uri() . '/style.css' );

    // Theme stylesheet.
    wp_enqueue_style( 'theme', get_template_directory_uri() . '-child/assets/css/style.min.css', array(), wp_get_theme()->get( 'Version' ) );

}
// END Action wp_enqueue_scripts
