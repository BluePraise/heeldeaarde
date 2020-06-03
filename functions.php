<?php
function theme_features() {
    add_theme_support(
        'title-tag'
    );
}

add_action( 'after_theme_setup', 'theme_features' );

add_action( 'wp_enqueue_scripts', function() {
    $styles = wp_styles();
    $styles->add_data( 'twentytwenty-style', 'after', array() );
}, 20 );


function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';

    // return
    return $paths;
}
// ACF JSON https://www.advancedcustomfields.com/resources/local-json/
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function wpb_remove_version() {
    return '';
}
add_filter('the_generator', 'wpb_remove_version');


// allow svg upload
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types');





// Remove Actions
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

function remove_footer_admin () {

echo 'Need help? <a href="http://www.magalielinda.me" target="_blank">Ask Maggie.</a> | Phone: <a href="tel://0031652841683">0652841683</a></p>';

}
add_filter('admin_footer_text', 'remove_footer_admin');

add_filter( 'wpcf7_autop_or_not', '__return_false' );

?>