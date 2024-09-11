<?php /**
 * 
 * Function to enqueue scripts 
 * 
 */?>
<?php
// Linking CSS and Javascripts required for pages
function project_script_enqueue(){
    wp_enqueue_style('typekit', 'https://use.typekit.net/tnb7rgz.css', array(), null);
    wp_enqueue_style('main_style', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/app.css'));
    wp_enqueue_style('support_sytle', get_stylesheet_directory_uri() . '/assets/supports.css', array(), filemtime(get_stylesheet_directory() . '/assets/supports.css'));
    wp_enqueue_script('main_script', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/app.js'), true);
}
add_action('wp_enqueue_scripts', 'project_script_enqueue');