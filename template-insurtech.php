<?php

/*

Template Name: InsurTech

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

                    <p class="text1_page"><?php echo get_field('insurtech_title'); ?></p>


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

    <section class="sect_under_page">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <p class="text2_page "><?php echo get_field('insurtech_subtitle_box_1'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="text2_page "><?php echo get_field('insurtech_subtitle_box_2'); ?></p>

                </div>

            </div>

        </div>

    </section>

    <section class="section4 s4_wealthtech s4_paytech s4_it">

        <img class="figure_s4_approach"
             src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid2_wealthtech.svg" alt=""/>

        <div class="container cont1_s4 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('insurance_software_developmen_title'); ?></h2>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="t2_s4"><?php echo get_field('insurance_software_developmen_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block mr80"><?php echo get_field('insurance_software_developmen_post1_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('insurance_software_developmen_post1_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('insurance_software_developmen_post2_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('insurance_software_developmen_post2_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block mr80 "><?php echo get_field('insurance_software_developmen_post3_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('insurance_software_developmen_post3_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block mr80"><?php echo get_field('insurance_software_developmen_post4_title'); ?></p>

                    <p class="text2_page mt30 "><?php echo get_field('insurance_software_developmen_post4_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block mr120 "><?php echo get_field('insurance_software_developmen_post5_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('insurance_software_developmen_post5_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('insurance_software_developmen_post6_title'); ?></p>

                    <p class="text2_page mt30 "><?php echo get_field('insurance_software_developmen_post6_subtitle'); ?></p>

                </div>

            </div>

        </div>


    </section>

    <section class="sect_dots s3_paytech ">

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('insurtech_solutions_we_integrate_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container cont_payments">

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('insurtech_solutions_we_integrate_text_box'); ?></p>

                </div>

                <div class="col-md-8 col-sm-8">

                    <div class="block_it_solution">

                        <!--<div class="col-md-4 col-sm-6 col-xs-6 hig_m"><img src="<?php bloginfo('template_url'); ?>/assets/images/it_solution1.jpg" alt="" /></div>

                            <div class="col-md-4 col-sm-6 col-xs-6 hig_m"><div><img class="" src="<?php bloginfo('template_url'); ?>/assets/images/it_solution2.jpg" alt="" /></div></div>

                            <div class="col-md-4 col-sm-6 col-xs-6"><div><img class="" src="<?php bloginfo('template_url'); ?>/assets/images/it_solution3.jpg" alt="" /></div></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/it_solution4.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/it_solution5.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/it_solution6.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img class="" src="<?php bloginfo('template_url'); ?>/assets/images/it_solution7.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_url'); ?>/assets/images/it_solution8.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6 h100"><img class="" src="<?php bloginfo('template_url'); ?>/assets/images/it_solution9.jpg" alt="" /></div>

                            <div class="col-md-3 col-sm-6 col-xs-6"><img class="" src="<?php bloginfo('template_url'); ?>/assets/images/it_solution10.jpg" alt="" /></div> -->
                        <?php
                        $image = get_field('insurtech_solutions_we_integrate_logotyps');
                        if (!empty($image)): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>

                    </div>

                </div>

            </div>


        </div>

    </section>


    <section class="section4 s4_wealthtech s4_paytech">

        <div class="container cont1_s4 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('custom_insurance_development_services_title'); ?></h2>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="t2_s4"><?php echo get_field('custom_insurance_development_services_text_box'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <p class="title_block mr80"><?php echo get_field('custom_insurance_development_services_post_1_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('custom_insurance_development_services_post_1_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="title_block mr80"><?php echo get_field('custom_insurance_development_services_post_2_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('custom_insurance_development_services_post_2_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <p class="title_block mr80"><?php echo get_field('custom_insurance_development_services_post_3_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('custom_insurance_development_services_post_3_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="title_block"><?php echo get_field('custom_insurance_development_services_post_4_title'); ?></p>

                    <p class="text2_page mt30"><?php echo get_field('custom_insurance_development_services_post_4_subtitle'); ?></p>

                </div>

            </div>

        </div>


    </section>


    <section class="sect_dots s3_wealthtech">

        <img class="cicles_grid1_insurance"
             src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_insurance.svg" alt=""/>

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4 mr80"><?php echo get_field('featured_insurtech_clients_title'); ?></h2>

                </div>

            </div>
            <?php if ($clients = get_field('client')): ?>
                <?php foreach ($clients as $item): ; ?>
                    <div class="row row_clients row_pt_clients">
                        <div class="col-md-12 col-sm-12">
                            <?php
                            $client_page = $item['client_page'];
                            if (has_post_thumbnail($client_page)): ?>
                                <?php echo get_the_post_thumbnail($client_page, 'full'); ?>
                            <?php endif; ?>
                            <?php /* ?>
//                            $image = get_field('featured_insurtech_clients_logo');
//                            $image = get_post_th;
//                            if (!empty($image)): ?>
                                <img class="pt_clients_img" src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt']; ?>"/>
                            <?php endif;*/ ?>

                        </div>
                    </div>
                <?php $client_text = $item['custom_description'] ? $item['custom_description'] : $client_page->post_content;
                $client_text = get_extended($client_text);
                ?>
                    <div class="row  ">
                        <div class="<?= $client_text['extended'] ? 'col-md-6 col-sm-6' : 'col-md-12' ?>">
                            <p class="text_clients mt30 mar_30">
                                <?php echo $client_text['main']; ?>
                            </p>
                        </div>
                        <?php if($client_text['extended']): ?>
                        <div class="col-md-6 col-sm-6">
                            <p class="text_clients mt30"><?php echo $client_text['extended']; ?>
                            </p>
                        </div>
        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
    </section>

    <section class="sect_dots s3_wealthtech">

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4 t1_s4_it"><?php echo get_field('insurtech_book_title'); ?></h2>

                    <p class="title_block"><?php echo get_field('insurtech_book_post_title'); ?></p>

                    <p class="text_clients text_clients_it"><?php echo get_field('insurtech_book_post_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">
                    <?php
                    $image = get_field('insurtech_book_post_images');
                    if (!empty($image)): ?>
                        <img class="it_book" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>

                    <div class="box_more_it"><a href="<?php echo get_field('insurtech_book_post_read_abstract'); ?>"
                                                class="more_it"
                                                target="_blank"><?php echo get_field('insurtech_book_post_read_abstract_name_link'); ?>
                            <img class="arrow_it" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg"
                                 alt=""/></a></div>

                </div>

            </div>

        </div>

    </section>


    <section class="sect_dots s3_wealthtech s3_wealthtech_m s3_paytech_m">

        <img class="cicles_grid5_wealthtech"
             src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid5_wealthtech.svg" alt=""/>

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('insurtech_events_we_support_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container cont2_member box_event">

            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('insurtech_events_we_support_logo1');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('insurtech_events_we_support_logo2');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('insurtech_events_we_support_logo3');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('insurtech_events_we_support_logo4');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('insurtech_events_we_support_logo5');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 col-sm-4">
                    <?php
                    $image = get_field('insurtech_events_we_support_logo6');
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
                                        <p class="t1_insights1"><a href="<?php echo get_field('our_insights_link'); ?>"
                                                                   target="_blank"><?php the_title(); ?></a></p>
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