<?php

// Enqueue the styles and javascript scripts in header and footer
function custom_script_enqueue()
{   
    // Version Details, For Future reference
    $version = "1.0.0";
    
    // Include the style from css/customstyle.css
    wp_enqueue_style('customstyle',get_template_directory_uri().'/css/customstyle-1.css',[],$version,"all");

    // Include the script from js/customstyle.js
    wp_enqueue_script('customjs',get_template_directory_uri().'/js/customscript-1.js',array(),$version,true);


}
add_action('wp_enqueue_scripts', 'custom_script_enqueue');




function custom_theme_support_setup(){

    // Include menus feature in your theme
    add_theme_support('menus');

    // Register Navbar location,where to put your menu items
    register_nav_menu("primary", "Add it to Header");
    register_nav_menu("secondary", "Add it to Footer");


}
add_action('init','custom_theme_support_setup');


// Enable feature for themes
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');

// Enable post formats - activate the post formats
add_theme_support('post-formats',['aside','image','video']);