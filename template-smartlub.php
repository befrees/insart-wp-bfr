<?php
/*
Template Name: SMART Club
*/
get_header();
?>

<section class="section1_about">
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
        <div class="container cont_about">
            <div class="row">
                <div class="col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3 col-xs-12">
                    <p class="text1_about"><?php echo get_field('smart_club_title1'); ?></p>
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
    <section class="sect2_about">
        <img class="cicles_grid1_about disp_n_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_about.svg" alt="" />
        <img class="cicles_grid1_about disp_b_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_about_m.svg" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class=""><?php echo get_field('smart_club_title2'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="t2_s4"><?php echo get_field('smart_club_title2_textbox1'); ?></p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p class="t2_s4"><?php echo get_field('smart_club_title2_textbox2'); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="sect_dots sect3_about sect_events">
        <div class="container cont1_s3">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h2 class=""><?php echo get_field('smart_club_events_title'); ?></h2>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4"><?php echo get_field('smart_club_events_textbox1'); ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4"><?php echo get_field('smart_club_events_textbox2'); ?></p>
                </div>
            </div>
        </div>
        <div class="container cont_events">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    
                                    <?php 
                                        $image = get_field('smart_club_events1_image');
                                        if( !empty($image) ): ?>
                                        <img class="events_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                
                    <p class="title_events"><?php echo get_field('smart_club_events1_title'); ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
					
                                    <?php 
                                        $image = get_field('smart_club_events2_image');
                                        if( !empty($image) ): ?>
                                        <img class="events_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                
                    <p class="title_events"><?php echo get_field('smart_club_events2_title'); ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
					
                                    <?php 
                                        $image = get_field('smart_club_events3_image');
                                        if( !empty($image) ): ?>
                                        <img class="events_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                
                    <p class="title_events"><?php echo get_field('smart_club_events3_title'); ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box_more_member box_more_events"><a href="<?php echo get_field('events_button_link_load_more'); ?>" class="more_member more_events"><?php echo get_field('events_button_name__load_more'); ?> <img class="arrow_events" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section4 s4_wealthtech s4_paytech">
         <div class="container cont1_s4 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="t1_s4"><?php echo get_field('financial_literacy_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="t2_s4"><?php echo get_field('financial_literacy_textbox1'); ?></p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p class="t2_s4"><?php echo get_field('financial_literacy_textbox2'); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>