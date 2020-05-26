<?php

/**
 * Enqueue Twenty Twenty stylesheet.
 */
add_action( 'wp_enqueue_scripts', 'heeldeaarde_enqueue_styles' );
function heeldeaarde_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
/**
 * Enqueue previous post JavaScript.
 */
