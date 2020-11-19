<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="CarCare  -  Car Repairing  and Servicing Html Template Responsive Template">
    <meta name="keywords" content="Repair ,Servicing ,Mechanic">
    <meta name="author" content="Theme Moor">
    <!-- Page Title -->
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- Apple Touch Icons &Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_mod('favicon');?>">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .header-top-bar {background: <?php echo get_theme_mod('header_top_background')?> none repeat scroll 0 0 !important;}
    .nav_area {background-color: <?php echo get_theme_mod('nav_background')?> !important;}
    .section-gray {background-color: <?php echo get_theme_mod('body_background')?> !important;}
    .post-box,.inner-post-box {	background-color: <?php echo get_theme_mod('post_box_background')?> !important;}
    .btn-primary{background: <?php echo get_theme_mod('post_box_btn_background')?> !important;}
    .post-info .btn{border: 1px solid <?php echo get_theme_mod('post_box_btn_background')?> !important;}
    #footer-area {background: <?php echo get_theme_mod('footer_background')?> none repeat scroll 0 0 !important;}
    #copyright-area {background: <?php echo get_theme_mod('copyright_background')?> none repeat scroll 0 0 !important;}
    </style>
    
    <?php wp_head();?>
</head>

<body <?php body_class(); ?> class="home">
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
    <!-- header start area -->
    <header id="header_area" class="header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="header_top_bar_content">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 company">
                            <div class="company-info">
                                <ul>
                                    <li><i class="flaticon-close-envelope"></i><a href="#"><?php echo get_theme_mod('email');?></a></li>
                                    <li><i class="flaticon-telephone"></i><a href="#"><?php echo get_theme_mod('phone');?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 social">
                           <?php get_search_form();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_area">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('logo');?>"></a>
                            <div class="responsive-menu"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-wrapper">
                                <!-- <nav class="main-navigation">
                                    <ul class="main-menu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">about us</a> </li>
                                        <li><a href="contact-us">Contact Us</a></li>
                                    </ul>
                                </nav> -->
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location'  => 'Header_top_menu',
                                            'container_class' => 'main-navigation',
                                            'items_wrap'      => '<ul class="main-menu">%3$s</ul>',
                                        )
                                    )
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->