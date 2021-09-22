<?php

/**
 * Header template
 * @package NM_OZ
 */

global $nm3webet;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

    <title><?php echo get_bloginfo('name').' || '.get_bloginfo('description'); ?></title>
    <meta name="description" content="You can earn up to 50% welcome bonus when you open an online betting account with 3WEBET. Know the betting trends and statistics in Singapore and earn real money." />
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://casino.3webetsg.com" />
    <meta name="keywords" content="Best Online Betting Singapore" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="OZ || Online Gambling Review" />
    <meta property="og:description" content="You can earn up to 50% welcome bonus when you open an online betting account with 3WEBET. Know the betting trends and statistics in Singapore and earn real money." />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="OZ - ONLINE GAMBLING SITE IN SINGAPORE" />
    <meta property="og:image" content="/3welogo.gif" />

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/src/assets/img/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="content-body">

        <div class="t-header">
            <section class="header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="logo">
                                <?php
                                if ($nm3webet['nm3betLogoUpload']) : ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $nm3webet['nm3betLogoUpload']['url']; ?>"></a>
                                    <?php else :

                                    if (is_front_page() && is_home()) :
                                    ?>
                                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                    <?php
                                    else :
                                    ?>
                                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                                    <?php
                                    endif;
                                    $nmbet_description = get_bloginfo('description', 'display');
                                    if ($nmbet_description) :
                                    ?>
                                        <p class="site-description">
                                            <?php echo $nmbet_description;
                                            ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="header-menu">
                <div class="container-fluid nm-no-pad">
                    <!-- <div class="row text-center">
                        <div class="col-md-12 col-sm-12 col-xs-12"> -->
                            <div class="main-menu">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'main-menu',
                                        'menu'        => 'main-menu',
                                    )
                                );
                                ?>
                            </div>
                        <!-- </div>
                    </div> -->
                </div>
            </section>
        </div>