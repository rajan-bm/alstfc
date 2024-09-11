<?php // miscellaneous functions

// handy tandy print function
function dd($var){
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}

// function extractMapId($input) {
//     if(empty($input)){
//         return null;
//     }
//     // Check if the input is an iframe tag and extract the src attribute
//     if (preg_match('/<iframe.*?src="([^"]*)"/', $input, $matches)) {
//         $input = $matches[1];
//     }
//     // Extract the map ID from the src URL
//     $pattern = '/1s([^!]+)!2s/';
//     if (preg_match($pattern, $input, $matches)) {
//         return $matches[1];
//     } else {
//         return null;
//     }
// }

// Function to extract the src attribute from the iframe tag
function extract_src($iframe_tag) {
    preg_match('/src="([^"]+)"/', $iframe_tag, $matches);
    return isset($matches[1]) ? $matches[1] : null;
}

// Function to extract the mapid from the iframe URL
function extract_mapid($url) {
    preg_match('/pb=(.*)/', $url, $matches);
    return isset($matches[1]) ? $matches[1] : null;
}


/**
 * Disable the emoji's
 */
// function disable_emojis() {
//     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
//     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
//     remove_action( 'wp_print_styles', 'print_emoji_styles' );
//     remove_action( 'admin_print_styles', 'print_emoji_styles' );  
//     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
//     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
//     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    
//     // Remove from TinyMCE
//     add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
// }
// add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
// function disable_emojis_tinymce( $plugins ) {
//     if ( is_array( $plugins ) ) {
//     return array_diff( $plugins, array( 'wpemoji' ) );
//     } else {
//     return array();
//     }
// }
