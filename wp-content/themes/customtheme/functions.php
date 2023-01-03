<?php

/**
 * On Init of wordpress do 
 * the following operations
 * @return void
 */
function inject_menu_scripts()
{
    // Add menus support inside Themes section
    add_theme_support('menus');

    // Add location checkboxes for menus to setup
    register_nav_menu('inside_header', 'Add menus inside header');
    register_nav_menu('inside_footer', 'Add menus inside footer');


    // Make visible Header inside Themes corner that helps to add header images
    add_theme_support('custom-header');

    // This feature helps to add custom background 
    // add_theme_support('custom-background');

    // This feature helps to add thumbnails in post
    // add_theme_support('post-thumbnails');
}
// On Init call the above function
add_action('init', 'inject_menu_scripts');


/**
 * Inject Your styles and scripts from your folders and enquer using wp_enqueue_ hooks
 * @return void
 */
function inject_global_styles_and_scripts()
{
    // Add the global style from css directory
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Add the global script from js directory - bootstrap
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
}
// Fires when scripts and styles are enqueued
add_action('wp_enqueue_scripts', 'inject_global_styles_and_scripts');


/**
 * Add the custom js to footer
 * @return void
 */
function add_scripts_in_footer()
{

    // Add the global script from js directory - site_navbar
    wp_enqueue_script('site_navbar', get_template_directory_uri() . '/js/site-navbar.js', [], true);
}
add_action('wp_footer', 'add_scripts_in_footer');


// Using Menu Functions such as filters etc
require get_template_directory() . '/inc/menu-functions.php';
