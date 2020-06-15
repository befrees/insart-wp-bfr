
<?php global $redux_demo; ?>
<footer class="footer-api">
        <div class="container-big footer-api__inner">
            <div class="footer-api__row">
                <div class="footer-api__col"><a href="/" class="footer-api__logo"><img src="<?= get_template_directory_uri() ?>/img/logo-white.svg" alt="Insart Logo"></a></div>
                <div class="footer-api__col">
                    <div class="footer-menu">
                        <h3 class="footer-menu__title">Company</h3>
                        <?php
                            wp_nav_menu( array(
                                // 'theme_location' => 'menufoot-1',
                                'menu' => 'menufoot-1',
                                'menu_id'        => 'foot1-menu',
                                'container' => 'ul',
                                'container_class' => 'footer-menu__links',
                                'menu_class'        => 'footer-menu__links', 
                            ) );
                        ?>
                    </div>
                </div>
                <div class="footer-api__col">
                    <div class="footer-menu">
                        <h3 class="footer-menu__title">Industries</h3>
                        <?php
                            wp_nav_menu( array(
                                // 'theme_location' => 'menufoot-2',
                                'menu' => 'menufoot-2',
                                'menu_id'        => 'foot2-menu',
                                'container' => 'ul',
                                'container_class' => 'footer-menu__links',
                                'menu_class'        => 'footer-menu__links', 
                            ) );
                        ?>
                        
                        <?php
                            wp_nav_menu( array(
                                // 'theme_location' => 'menufoot-3',
                                'menu' => 'menufoot-3',
                                'menu_id'        => 'foot3-menu',
                                'container' => 'ul',
                                'container_class' => 'footer-menu__links',
                                'menu_class'        => 'footer-menu__links', 
                            ) );
                        ?>
                    </div>
                </div>
                <div class="footer-api__col">
                <div class="footer-menu">
                        <h3 class="footer-menu__title">For API Providers</h3>
                        <ul class="footer-menu__links">
                            <li><a href="#">How it Works</a></li>
                        </ul>
                </div>
                </div>
                <div class="footer-api__col col-last">
                    
                    <div class="footer-api__social">
                           <?php if($redux_demo['linkedin']) { ?> <a href="<?php echo $redux_demo ['linkedin'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo.svg" alt="" /></a><?php } ?>
                            <?php if($redux_demo['facebook']) { ?> <a href="<?php echo $redux_demo ['facebook'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt="" /></a><?php } ?>
                            <?php if($redux_demo['twitter']) { ?> <a href="<?php echo $redux_demo ['twitter'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter-logo.svg" alt="" /></a><?php } ?>
                        
                    </div>
                    <div class="footer-api__email"><a href="mailto:sales@insart.com">sales@insart.com</a></div>
                </div>
            </div> <!-- .footer-api__row -->
            <div class="footer-api__row">
            <div class="footer-api__copy">
            <p>© <?= date('Y', time()) ?> INSART SOFTWARE LLC</p>
                <?php
                //$copyright = str_replace('2019', date('Y', time()), $redux_demo['copyright']);
                  //  echo $copyright;
                    ?>
            </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
<script>
    $('.btn-open-menu').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('open');
    });
    $(".scroll-link").on("touchend, click", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top ;
        $('body,html').animate({scrollTop: top}, 1500);
    });
</script>
<!--<div class="cookies">
        <p>We use cookies to ensure your best experience. through your continued use of this site you accept this use. for more information, please see our privacy policy. </p>
        <a class="btn_cookies close-cookies">Accept<br /><img class="arrow_cookies" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
       
    </div> 
 <script>
        $('.close-cookies').click(function() {
                $('.cookies').hide();
            });
    </script> -->
    <svg display="none" xmlns="http://www.w3.org/2000/svg">
        <symbol id="icon-ic-spin" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path opacity=".8" d="M5.783 5.051A2 2 0 1 0 2.315 3.06a2 2 0 0 0 3.468 1.992z"/>
            <path opacity=".4" d="M15.363 15.364a2 2 0 1 0-2.829-2.828 2 2 0 0 0 2.829 2.828z"/>
            <path opacity=".1" d="M9 4a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path opacity=".5" d="M9 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path opacity=".2" d="M15.362 5.464a2 2 0 1 0-2.828-2.829 2 2 0 0 0 2.828 2.829z"/>
            <path opacity=".6" d="M5.462 15.365a2 2 0 1 0-2.828-2.829 2 2 0 0 0 2.828 2.829z"/>
            <path opacity=".3" d="M16 11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path opacity=".7" d="M2 11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
        </symbol>
    </svg>
</body>
</html>
