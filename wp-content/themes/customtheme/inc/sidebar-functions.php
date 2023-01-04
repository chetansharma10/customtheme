<?php

function custom_sidebar_setup(){
    register_sidebar([
        'name' => 'Sidebar',
        'id' =>'sidebar',
        'class'=>'sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ]);
}
add_action('widgets_init', 'custom_sidebar_setup');