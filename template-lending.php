<?php

/*

Template Name: Lending

*/
get_header();
?>
    <section class="section1_approach section1_wealthtech">

        <header>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-4">

                        <a href="<?php echo home_url("/"); ?>"><img class="logotip"
                                                                    src="<?php bloginfo('template_url'); ?>/assets/images/logotip.svg"
                                                                    alt=""/></a>

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

        <img class="cicles_grid1_wealthtech disp_n_768"
             src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_wealthtech.svg" alt=""/>

        <img class="cicles_grid1_page_m disp_b_768"
             src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_page_m.svg" alt=""/>

        <div class="container cont2_s1_approach">

            <div class="row">

                <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-12">

                    <p class="text1_page"><?php echo get_field('lending_fundraising_title'); ?></p>


                </div>

            </div>

        </div>

        <div class="collapse navbar-collapse block_menu" id="collapse">

            <div class="container cont2_block_menu">

                <div class="row">

                    <div class="col-md-4 col-sm-5">

                        <?php

                        wp_nav_menu(array(

                            'theme_location' => 'menu-1',

                            'menu_id' => 'primary-menu',

                            'container' => 'ul',

                            'container_class' => 'menu1',

                            'menu_class' => 'menu1',

                        ));

                        ?>

                    </div>

                    <div class="col-md-8 col-sm-7">

                        <p class="t_menu2">Industries</p>

                        <?php

                        wp_nav_menu(array(

                            'theme_location' => 'menu-2',

                            'menu_id' => 'primary2-menu',

                            'container' => 'ul',

                            'container_class' => 'menu2',

                            'menu_class' => 'menu2',

                        ));

                        ?>

                        <?php

                        wp_nav_menu(array(

                            'theme_location' => 'menu-3',

                            'menu_id' => 'primary3-menu',

                            'container' => 'ul',

                            'container_class' => ' menu2_2',

                            'menu_class' => 'menu2 menu2_2',

                        ));

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

                <?php if ($redux_demo['linkedin']) { ?> <a href="<?php echo $redux_demo ['linkedin'] ?>"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo.svg" alt=""/>
                    </a><?php } ?>

                <?php if ($redux_demo['facebook']) { ?> <a href="<?php echo $redux_demo ['facebook'] ?>"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt=""/>
                    </a><?php } ?>

                <?php if ($redux_demo['twitter']) { ?> <a href="<?php echo $redux_demo ['twitter'] ?>"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/twitter-logo.svg" alt=""/>
                    </a><?php } ?>

            </div>

        </div>

    </section>

    <section class="sect_under">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <p class="text2_page "><?php echo get_field('lending_fundraising_subtitle_textbox1'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="text2_page "><?php echo get_field('lending_fundraising_subtitle_textbox2'); ?></p>

                </div>

            </div>

        </div>

    </section>

    <section class="section4 s4_wealthtech s4_paytech s4_it sect_lend">

        <img class="figure_s4_approach"
             src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid2_wealthtech.svg" alt=""/>

        <div class="container cont1_s4 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('types_of_lending_solutions_we_develop_title'); ?></h2>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="t2_s4"><?php echo get_field('types_of_lending_solutions_we_develop_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('lending_platforms_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('lending_platforms_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('mortgage_solutions_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('mortgage_solutions_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="pr120"><p
                                class="title_block mr120 "><?php echo get_field('commercial_lending_software_title'); ?></p>
                    </div>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('commercial_lending_software_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="pr120"><p
                                class="title_block "><?php echo get_field('debt_collection_software_title'); ?></p>
                    </div>

                    <p class="text2_page mt30 "><?php echo get_field('debt_collection_software_subtitle'); ?></p>

                </div>

            </div>

        </div>


    </section>


    <section class="section4 s4_wealthtech s4_lending">

        <div class="container cont1_s4 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('types_of_fundraising_solutions_we_develop_title'); ?></h2>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="t2_s4"><?php echo get_field('types_of_fundraising_solutions_we_develop_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('fundraising_software_tools_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('fundraising_software_tools_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('crowdfunding_software_development_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('crowdfunding_software_development_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block mr120 "><?php echo get_field('real_estate_funding_platforms_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('real_estate_funding_platforms_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('fundraising_automation_platforms_title'); ?></p>

                    <p class="text2_page mt30 "><?php echo get_field('fundraising_automation_platforms_subtitle'); ?></p>

                </div>

            </div>

        </div>


    </section>

    <section class="sect_dots s3_paytech ">

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('integrations_with_major_fintech_platforms_to_digitize_your_entire_loan_lifecycle_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container cont_payments">

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('integrations_with_major_fintech_platforms_to_digitize_your_entire_loan_lifecycle_subtitle'); ?></p>

                </div>

                <div class="col-md-8 col-sm-8">

                    <div class="block_lend">

                        <!--<div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend1.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend2.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend3.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend4.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend5.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend6.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend7.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend8.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend9.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend10.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend11.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend12.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend13.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend14.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend15.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/lend16.jpg" alt="" /></div> -->

                        <?php
                        $image = get_field('integrations_with_major_fintech_platforms_to_digitize_your_entire_loan_lifecycle_logotyps');
                        if (!empty($image)): ?>
                            <img class="img_brokers" src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>

                    </div>

                </div>

            </div>


        </div>

    </section>


    <section class="sect_dots s3_wealthtech">

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4 mr80"><?php echo get_field('featured_trading_clients_title'); ?></h2>

                </div>

            </div>
            <?php if ($clients = get_field('client')): ?>
                <?php foreach ($clients as $item): ; ?>
                    <div class="row row_clients">
                        <div class="col-md-4 col-sm-4">
                            <?php
                            $client_page = $item['client_page'];
                            //                            $image = get_field('featured_clients_logotyp');
                            if (has_post_thumbnail($client_page)): ?>
                                <?php echo get_the_post_thumbnail($client_page, 'full', ['class' => 'lend_client_img']); ?>
                            <?php endif; ?>

                        </div>
                        <?php $client_text = $item['custom_description'] ? $item['custom_description'] : $client_page->post_content; ?>
                        <div class="col-md-8 col-sm-8">
                            <p class="text_clients"><?php echo $client_text; ?></p>
                        </div>
                    </div>
        <?php if ($comments = get_field('reviews', $client_page)): ?>
            <?php foreach ($comments as $comment): ?>
                    <div class="row row_clients">

                        <div class="col-md-4 col-sm-4">

                            <?php
                            $image = $comment['img'];
                            if (!empty($image)): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            <?php endif; ?>

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <p class="name_clients"><?php echo $comment['name']; ?></p>

                            <p class="info_clients"><?php echo $comment['position']; ?></p>

                            <p class="text_clients"><?php echo $comment['description']; ?></p>

                        </div>

                    </div>
                        <?php endforeach; ?>
                    <?php endif ?>
                <?php endforeach; ?>
            <?php endif ?>

        </div>


    </section>


    <section class="sect_dots s3_wealthtech s3_wealthtech_m s3_paytech_m">

        <img class="cicles_grid5_wealthtech"
             src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid5_wealthtech.svg" alt=""/>

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('lending_fundraising_events_we_support_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container cont2_member box_event">

            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('lending_fundraising_events_we_support_logo1');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('lending_fundraising_events_we_support_logo2');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('lending_fundraising_events_we_support_logo3');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('lending_fundraising_events_we_support_logo4');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('lending_fundraising_events_we_support_logo5');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('lending_fundraising_events_we_support_logo6');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

            </div>

        </div>

    </section>


    <section class="section8">

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6">

                    <h2 class="t1_s4"><?php echo get_field('our_insights_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container cont2_s6 pos_rel">

            <div class="row">
                <div class="trusted-slider">
                    <ul class="slides">
                        <?php
                        $args = array(
                            'post_type' => 'insights',
                            'posts_per_page' => 8
                        );

                        $the_insights = new WP_Query($args);

                        // The Loop
                        if ($the_insights->have_posts()) {
                            while ($the_insights->have_posts()) {
                                $the_insights->the_post(); ?>

                                <li class="text-center">
                                    <div class="box_article">
                                        <img class="img_insights"
                                             src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"/>
                                        <p class="t1_insights1"><a
                                                    href="<?php echo get_field('our_insights_link'); ?>"><?php the_title(); ?></a>
                                        </p>
                                        <div class="date_insights"><p
                                                    class="date_insights"><?php echo get_the_date('M.j.Y'); ?></p></div>
                                        <div class="box_hover_article">
                                            <div>
                                                <p>Read the Article</p>
                                                <a href="<?php echo get_field('our_insights_link'); ?>" target="_blank"><img
                                                            class="arrow_article"
                                                            src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg"
                                                            alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <?php }
                            wp_reset_postdata();
                        } else {
                            echo "no post";
                        }
                        ?>

                    </ul>
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>