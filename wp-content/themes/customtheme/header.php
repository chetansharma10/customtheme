<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme</title>

    <!-- Injecting styles,and scripts of custom theme -->
    <?= wp_head(); ?>

    <header>
        <!-- Injecting Primary Nav Menu - Header -->
        <?= wp_nav_menu(["theme_location" => "primary"]) ?>
    </header>


</head>

<body>