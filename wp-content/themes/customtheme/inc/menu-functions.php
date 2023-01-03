<?php
/**
 * Wordpress filter : nav_menu_css_class
 * This will add class on li
 * @param mixed $classes
 * @param mixed $item
 * @param mixed $args
 * @return mixed
 */
function add_additional_class_on_li($classes, $item, $args)
{   
    // If menu item has nested children
    $isNested = in_array('menu-item-has-children',$classes);

    // If class add_li_class defined in wp_nav_menu config
    $is_class_exited =isset($args->add_li_class);

    // If true,then add classes
    $is_class_exited?array_push($classes,$args->add_li_class):''; 
    // If class and items has nested children
    $is_nested_and_class_exited = $isNested && $is_class_exited;

    // If true,then add dropdown for children otherwise pass through
    $is_nested_and_class_exited ? array_push($classes, ' dropdown') : '';

    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);



function add_sub_menu_ul_class($classes, $args, $depth ){
  
    $classes[] = $args->add_sub_menu_ul_class;
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'add_sub_menu_ul_class', 10, 3);


function add_additional_class_on_anchor($atts, $item, $args,$depth)
{
    $isNested = in_array('menu-item-has-children',$item->classes);
    $is_active_item = in_array('current-menu-item', $item->classes)?' active':'';
    if($depth>1){
        if (property_exists($args, 'add_li_a_class')) {
            $atts['class'] = 'dropdown-item';
        }
    }
    else{
        if($isNested){
            if (property_exists($args, 'add_li_a_class')) {
                $atts['class'] = ($args->add_li_a_class).' dropdown-toggle'.$is_active_item;
                $atts['id'] = 'navbarDropdown';
                $atts['href'] = '#';
                $atts['role'] = "button";
                $atts['data-bs-toggle'] = "dropdown";
            }
        }
        else{
            if (property_exists($args, 'add_li_a_class')) {
                $atts['class'] = $args->add_li_a_class. $is_active_item;
            }
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_anchor', 10, 4);
