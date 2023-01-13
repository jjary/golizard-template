<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <!-- Meta tags -->
    <meta name="author" content="golizard"/>
    <meta name="copyright" content="Copyright Golizard"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="geo.region" content="PL">


    <meta property="og:site_name" content="example.pl">
    <meta property="og:title" content="Title">
    <meta property="og:description" content="...">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.example.pl">
    <meta property="og:image" content="...">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="350">
    <meta property="og:image:height" content="170">
    <!-- Meta tags -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<!-- Start header -->
<header class="header">
    <div class="container">
        <div class="row header-container">
            <!-- Site logo start-->
            <div class="col-2 col-xxl-2 header--logo">
                <a href="<?php echo get_home_url();?>">
                    <?php 
                        $logo_id = get_theme_mod( 'custom_logo' );
                        echo wp_get_attachment_image( $logo_id , 'small' )
                    ;?>
                </a>
            </div>
            <!-- Site logo end-->
            
            <!-- Site navigation start-->
            <div class="col-9 col-xxl-9 header--wrapper">
                <!-- Start Menu dropdown -->
                    <?= wp_nav_menu([
                        'menu' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'menu',
                        'container_aria_label' => 'main menu of page',
                        'theme_location' => 'main-menu',
                        'menu_class'     => 'primary-menu',
                        'menu_id'     => 'nav-menu',
                        'add_a_class'     => 'menuItem',
                        'fallback_cb' => false
                    ]) ?>

                    <div class="header--wrapper__toggle">
                        <i class="fas fa-bars menuIcon"></i>
                        <i class="fa-regular fa-rectangle-xmark closeIcon"></i>
                    </div>
                <!-- End Menu dropdown -->

                <nav class="header--wrapper__nav">
                    <!-- Start navigation -->
                    <?= wp_nav_menu([
                        'menu' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'menu-wrapper',
                        'container_aria_label' => 'main menu of page',
                        'theme_location' => 'main-menu',
                        'menu_class'     => 'primary-menu',
                        'menu_id'     => 'nav-menu',
                        'add_a_class'     => 'menuItem',
                        'fallback_cb' => false
                    ]) ?>
                    <!-- End navigation -->

                </nav>
            </div>        
            <!-- Site navigation end-->

            <!-- Social medial icons start -->
            <div class="col-1 col-xxl-1 header--wrapper">
                <div class="header--wrapper__socials">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <!-- Social medial icons end -->
        </div>
    </div>
</header>
<!-- End header -->
