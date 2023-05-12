

    </main>

    <!-- footer-->
    <footer class="c-footer" role="contentinfo">
        <div class="c-container c-footer-main">
            <div class="c-row">
                <div class="c-col-4 ">
                    <a href="<?php echo get_home_url(); ?>">
                    <div class="c-footer-logo"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/assets/images/ruffener-logo-retina-w.png" alt="" /></div></a>
                    <div class="c-footer-line c-line">
                        <?= apply_filters('c_get_option','company_address'); ?>
                        <a href="mailto:<?= apply_filters('c_get_option','company_email'); ?>"><?= apply_filters('c_get_option','company_email'); ?></a></br>
                        <a href="tel:<?= apply_filters('c_get_option','company_phone'); ?>"><?= apply_filters('c_get_option','company_phone'); ?></a>
                    </div>
                    
                    <?= do_shortcode("[c_socialmedia_list]"); ?>

                </div>
                <!--div class="c-col-3">
                    <?php wp_nav_menu( 
                        array( 
                            'theme_location'    => 'header-menu',
                            'container'         => false,
                            'menu_class'        => 'c-footer-nav-list',
                        )
                    ); ?>                    
                </div-->                  
                <div class="c-col-5">
                    <p class="c-title-footer"><?= __('Öffnungszeiten','ruffener');?></p>
                    <?= apply_filters('c_get_option','opening_hours'); ?>
                </div>
                <div class="c-col-3">
                <a class="f-widget" href="https://www.provenexpert.com/wohn-und-kuechenstudio-ruffener/?utm_source=Widget&utm_medium=Widget&utm_campaign=Widget" target="_blank"><img class="c-footer-widget"src="<?= apply_filters('c_get_option','company_certificate'); ?>" alt="Provenexpert" /></a>
                </div>
            </div>
        </div>
        
        <div class="c-container c-container-no-padding c-footer-disclaimer">
            <div class="c-row c-row-reverse">
                <div class="c-col-6 c-text-right">
                    <?php wp_nav_menu( 
                        array( 
                            'theme_location'    => 'footer-menu',
                            'container'         => false,
                            'menu_class'        => 'c-footer-disclaimer-list',
                        )
                    ); ?>
                </div>
                <div class="c-col-6">
                    <?= __('&copy; ruffener','ruffener');?>
                </div>                  

            </div>
        </div>
    </footer>


    <div id="back-top"><a href="/#" title="Back to top"><?= __('Nach oben','ruffener');?></a></div> 

    <!-- cookie notice-->
    <div class="c-cookie-notice c-text-light c-text-small c-text-block" id="cookie-notice">
        <?= apply_filters('c_get_option','archive_cookie_message'); ?>
    </div>

    <script type="text/javascript">
    var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    /* <![CDATA[ */
    var myAjax = {"ajaxurl":"<?=  str_replace("/", "\/", admin_url('admin-ajax.php') ); ?>"};
    /* ]]> */
    </script>

    <script src="<?= get_stylesheet_directory_uri(); ?>/dist/assets/js/minimal.1.min.js?v=<?= do_shortcode('[wp_version]') ;?>"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157866086-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-157866086-1');
    </script>

    <!-- Matomo -->
    <script>
      var _paq = window._paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//piwik.sofasurfer.org/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '46']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->


</body>
</html>
