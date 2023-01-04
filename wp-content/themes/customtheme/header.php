<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme</title>

    <!-- Injecting wordpress scripts,styles etc  -->
    <?= wp_head(); ?>

</head>

<!-- 
  
    Add dynamic classes of wordpress
    body_class() = It simply adds the wordpress by default classes, means when you
                   visit on any page then it will simply add classes according to the
                   page etc.
    body_class(['my-class']) = Add your custom static class on
                               every page body
    
    body_class([$wp_query->query['pagename']])= Helps to add
                                class according to the page name
    
-->

<body <?php
        $pageName = $wp_query->query['pagename']??'';
        body_class([$pageName]) ?>>
    <?php get_template_part('template-parts/header/site-navbar'); ?>

    <!-- Custom Header image Location -->
    <img  src="<?=header_image()?>"
        width="<?=get_custom_header()->width?>"
        height="<?=get_custom_header()->height?>">