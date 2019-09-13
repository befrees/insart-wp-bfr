<?php
get_header();
?>
    <section class="section_contact">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-4">
                        <a href="<?php echo home_url("/"); ?>"><img class="logotip" src="<?php bloginfo('template_url'); ?>/assets/images/logotip.svg" alt="" /></a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-8 text-right">
                        <a class="contact_us" href="<?php echo home_url("/contacts/"); ?>">Contact Us</a>
                       <div class="menu-btn-wrap">
                            <button class="btn-open-menu">
                                <i class="nav-btn"></i>
                                <i class="nav-btn"></i>
                                <i class="nav-btn"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="wrapper-table">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <p class="t1_404">404 error</p>
                        <p class="t2_404">This webpage is not found</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse block_menu" id="collapse">
            <div class="container cont2_block_menu">
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container' => 'ul',
                                'container_class' => 'menu1',
                                'menu_class'        => 'menu1', 
                            ) );
                        ?>
                    </div>
                    <div class="col-md-8 col-sm-7">
                        <p class="t_menu2">Industries</p>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-2',
                                'menu_id'        => 'primary2-menu',
                                'container' => 'ul',
                                'container_class' => 'menu2',
                                'menu_class'        => 'menu2', 
                            ) );
                        ?>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-3',
                                'menu_id'        => 'primary3-menu',
                                'container' => 'ul',
                                'container_class' => ' menu2_2',
                                'menu_class'        => 'menu2 menu2_2', 
                            ) );
                        ?>
                    </div>
                </div>
            </div>
            <div class="container cont3_menu">
                <div class="row">
                    <div class="col-md-6 col-sm-4"><p class="t_cont_menu">
                        <?php
                            echo $redux_demo ['email'];
                         ?>
                    </p></div>
                    <div class="col-md-6 col-sm-8"><p class="t_cont_menu tell_menu">
                        <?php
                            echo $redux_demo ['phone'];
                        ?></p></div>
                </div>
            </div>
            <div class="box_social_menu">
               <?php if($redux_demo['linkedin']) { ?> <a href="<?php echo $redux_demo ['linkedin'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo.svg" alt="" /></a><?php } ?>
                <?php if($redux_demo['facebook']) { ?> <a href="<?php echo $redux_demo ['facebook'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt="" /></a><?php } ?>
                <?php if($redux_demo['twitter']) { ?> <a href="<?php echo $redux_demo ['twitter'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter-logo.svg" alt="" /></a><?php } ?>
            </div>
        </div>
    </section>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/slick.min.js"></script>
    <script>
        $('.btn-open-menu').on('click', function(e) {
            e.preventDefault();
            $('#site-header').toggleClass('open');
        });
    </script> 
    