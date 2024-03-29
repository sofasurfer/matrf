<!DOCTYPE html>
<html <?php language_attributes(); ?> id="open-navigation" class="close-navigation">
    <head>
        <meta charset="utf-8">
        <title><?= apply_filters('c_get_pagetitle',''); ?></title>
        <meta name="author" content="Ruffener">
        <meta name="description" content="<?= get_field('rev_header_metadescription'); ?>">

        <?php
        $og_info = apply_filters('c_get_ogobj','');
        ?>

        <meta property="og:locale" content="<?= $og_info['locale']; ?>"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="<?= $og_info['title']; ?>"/>
        <meta property="og:url" content="<?= $og_info['url']; ?>"/>
        <meta property="og:description" content="<?= $og_info['description']; ?>"/>
        <meta property="og:image" content="<?= $og_info['image'][0]; ?>"/>
        <meta property="og:image:width" content="<?= $og_info['image'][1]; ?>" />
        <meta property="og:image:height" content="<?= $og_info['image'][2]; ?>" />

        <!-- favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/dist/assets/images/ico/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/dist/assets/images/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/dist/assets/images/ico/favicon-16x16.png">
        <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/dist/assets/images/ico/safari-pinned-tab.svg" color="#8fb844">
        <meta name="msapplication-TileColor" content="#8fb844">
        <meta name="theme-color" content="#ffffff">



        <!-- Preventing IE11 to request by default the /browserconfig.xml more than one time -->
        <meta name="msapplication-config" content="none">
        <!-- Disable touch highlighting in IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- Ensure edge compatibility in IE (HTTP header can be set in web server config) -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <!-- Force viewport width and pixel density. Plus, disable shrinking. -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Disable Skype browser-plugin -->
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">


        <script>
        /*
            Enable JavaScript
        */
        var doc = window.document,
        docElem = doc.documentElement;
        docElem.classList.add("js-enabled"); 
        </script>
       
        <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/dist/assets/css/main.1.min.css?v=<?= do_shortcode('[wp_version]') ;?>">

    <body>

        <!-- header-- class c-text-light hinzufügen bei headern mit hintergrund-bild-->
        <header class="c-header <?= (get_field('rev_header_image_desktop')) ? 'c-text-light' : '';?>" role="banner">
            
            <div class="c-container c-container-no-padding">
                <div class="c-header-logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <figure class="c-header-logo-fallback text dark">
                            <img alt="Ruffener logo dark" class="logo-dark" src="<?= get_stylesheet_directory_uri(); ?>/dist/assets/images/ruffener-logo-retina-d.png" />
                            <img alt="Ruffener logo light" class="logo-light" src="<?= get_stylesheet_directory_uri(); ?>/dist/assets/images/ruffener-logo-retina-w.png" />
                        </figure>
                        <h2 class="c-hide-visually"><?= apply_filters('c_get_option','company_title'); ?></h2>
                        <h3 class="c-hide-visually"><?= apply_filters('c_get_option','company_slogan'); ?></h3>
                    </a>
                </div>
                <?= do_shortcode('[c_post_languages ulclass="c-offcanvas-lang-list" ]'); ?>
                <!-- navigation open toggle -->
                <a href="#open-navigation" class="c-nav open c-button c-offcanvas-toggle" tab-index="0">
                    <span class="c-hide-visually"><?= __('Navigation öffnen','ruffener');?></span>
                </a>
            </div>
            <!-- offcanvas -->
            <div class="c-off-canvas">
                <div class="c-inner-off-canvas c-container">
                    <div class="c-decoration">

                    </div>
                    <!-- navigation close toggle -->
                    <a href="#" class="c-nav close c-button c-offcanvas-toggle" tab-index="0">
                        <span class="c-hide-visually"><?= __('Zurück zum Inhalt','ruffener');?></span>
                    </a>

                    <nav class="c-offcanvas-nav c-additional-content">
                        <!-- navigation -->
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location'    => 'header-menu',
                                'container'         => false,
                                'menu_class'        => 'c-header-navigation',
                            )
                        ); ?>
                    </nav>
                    <!-- additional content -->
                    <div class="c-line c-additional-content">
                        <p>
                            <a href="mailto:<?= apply_filters('c_get_option','company_email'); ?>"><?= apply_filters('c_get_option','company_email'); ?></a>
                        </p>
                        <p>
                            <a href="tel:<?= apply_filters('c_get_option','company_phone'); ?>"><?= apply_filters('c_get_option','company_phone'); ?></a>
                        </p>
                         <?= do_shortcode("[c_socialmedia_list]"); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- content-->
        <main class="c-content" role="main">
