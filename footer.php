<!--
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'insart-wp' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'insart-wp' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'insart-wp' ), 'insart-wp', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> 
	</footer>
</div> -->
<?php global $redux_demo; ?>
<footer>
        <div class="container-fluid cont_footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_menu">
                        <?php
                            wp_nav_menu( array(
                                // 'theme_location' => 'menufoot-1',
                                'menu' => 'menufoot-1',
                                'menu_id'        => 'foot1-menu',
                                'container' => 'ul',
                                'container_class' => 'menu_foot',
                                'menu_class'        => 'menu_foot', 
                            ) );
                        ?>
                    </div>
                    <div class="footer_menu footer_menu2">
                        <!--<ul class="menu_foot menu_foot2">
                            <li class="title">Industries</li>
                            <li class="li2"><a href="">WealthTech </a></li>
                            <li class="li2"><a href="">PayTech</a></li>
                            <li class="li2"><a href="">InsurTech</a></li>
                        </ul>-->
                        <p class="menu_foot2_title">Industries</p>
                        <?php
                            wp_nav_menu( array(
                                // 'theme_location' => 'menufoot-2',
                                'menu' => 'menufoot-2',
                                'menu_id'        => 'foot2-menu',
                                'container' => 'ul',
                                'container_class' => 'menu_foot menu_foot2',
                                'menu_class'        => 'menu_foot menu_foot2', 
                            ) );
                        ?>
                        <!--<ul class="menu_foot menu_foot2 menu_foot2_li">
                            <li class="li2"><a href="">Trading </a></li>
                            <li class="li2"><a href="">Lending & <br>Fundraising</a></li>
                        </ul> -->
                        
                        <?php
                            wp_nav_menu( array(
                                // 'theme_location' => 'menufoot-3',
                                'menu' => 'menufoot-3',
                                'menu_id'        => 'foot3-menu',
                                'container' => 'ul',
                                'container_class' => 'menu_foot menu_foot2 menu_foot2_li',
                                'menu_class'        => 'menu_foot menu_foot2 menu_foot2_li', 
                            ) );
                        ?>
                        <div class="footer-link-catalog">
                        <?php wp_nav_menu([
                                'menu' => 'Marketplace',
                                'container' => false,
                                // 'items_wrap' => '%3$s'
                            ]) ?>
                            <?php /* ?>
                            <a href="<?= get_permalink(PAGE_CATALOG) ?>">Marketplace</a><?php */ ?>
                        </div>
                    </div>
                    <div class="box_address box_address1">
                        <p class="country_address">
                        <?php
                            echo $redux_demo ['title_address_1'];
                         ?>
                         </p>
                        <p class="adr">
                            <?php
                                echo $redux_demo ['address_1'];
                             ?>
                        </p>    
                        <p class="contacts_adr">
                            <?php
                                echo $redux_demo ['contacts_1'];
                             ?>
                        </p>
                    </div>
                    <div class="box_address box_address2">
                        <p class="country_address">
                        <?php
                            echo $redux_demo ['title_address_2'];
                         ?>
                         </p>
                        <p class="adr">
                            <?php
                                echo $redux_demo ['address_2'];
                             ?>
                        </p>    
                        <p class="contacts_adr">
                            <?php
                                echo $redux_demo ['contacts_2'];
                             ?>
                        </p>
                    </div>
                    <div class="box_social">
                        <div class="soc_icons">
                           <?php if($redux_demo['linkedin']) { ?> <a href="<?php echo $redux_demo ['linkedin'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo.svg" alt="" /></a><?php } ?>
                            <?php if($redux_demo['facebook']) { ?> <a href="<?php echo $redux_demo ['facebook'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt="" /></a><?php } ?>
                            <?php if($redux_demo['twitter']) { ?> <a href="<?php echo $redux_demo ['twitter'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter-logo.svg" alt="" /></a><?php } ?>
                        </div>
                        <p class="copy">
                            <?php
                            $copyright = str_replace('2019', date('Y', time()), $redux_demo['copyright']);
                                echo $copyright;
                             ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
<script>
    $('.btn-open-menu').on('click', function(e) {
        e.preventDefault();
        $('#site-header').toggleClass('open');
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
