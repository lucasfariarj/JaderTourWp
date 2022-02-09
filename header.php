<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
    <mate name="description" content="<?php bloginfo('name') ?> <?php bloginfo('description'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website"/>
    <meta property="og:title" conent="<?php bloginfo('name'); ?>"/>
    <meta property="og:url" content="https://jadertour.com.br"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Work+Sans&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body>
    <nav>
        <div>
            <a href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt=""></a>
        </div>
        <button data-menu="button" aria-expanded="false" aria-controls="menu">Menu</button>
        <ul data-menu="list" id="menu">
            <?php $args_menu = array(
                'menu' => 'menu-principal',
                'container' => false,
            );
            wp_nav_menu($args_menu);
            ?>
        </ul>
    </nav>
    <header>
        <video autoplay muted loop>
            <source type="video/mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/drone_video.mp4">
        </video>
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>

    </header>