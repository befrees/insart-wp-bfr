<?php

/*

Template Name: Trading

*/

get_header();

?>



<section class="section1_approach section1_wealthtech">

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

        <img class="cicles_grid1_wealthtech disp_n_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_wealthtech.svg" alt="" />

        <img class="cicles_grid1_page_m disp_b_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_page_m.svg" alt="" />

        <div class="container cont2_s1_approach">

            <div class="row">

                <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-12">

                    <p class="text1_page text1_page_trading"><?php echo get_field('trading_engineering_services_title'); ?></p>

                    

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

    <section class="sect_under_page">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <p class="text2_page "><?php echo get_field('trading_engineering_services_textbox1'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="text2_page "><?php echo get_field('trading_engineering_services_textbox2'); ?></p>

                </div>

            </div>

        </div>

    </section>

    <section class="section4 s4_wealthtech">

       <img class="figure_s4_approach" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid2_wealthtech.svg" alt="" />

         <div class="container cont1_s4 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('trading_software_development_title'); ?></h2>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="t2_s4"><?php echo get_field('trading_software_development_textbox'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('interactive_charts_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('interactive_charts_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block "><?php echo get_field('predictive_analytics_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('predictive_analytics_subtitle'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block mr120 "><?php echo get_field('real-time_market_analysis_title'); ?></p>

                    <p class="text2_page mt30 mar_30"><?php echo get_field('real-time_market_analysis_subtitle'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <p class="title_block mr140"><?php echo get_field('trading_order_execution_title'); ?></p>

                    <p class="text2_page mt30 "><?php echo get_field('trading_order_execution_subtitle'); ?></p>

                </div>

            </div>

        </div>

        

    </section>

    <section class="section7 sect_dots">

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6">

                    <h2 class="t_h2_approach"><?php echo get_field('trading_engineering_advantages_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container ">

            <table class="table_main table_sect7 table_expertise">

                <tr>

                	<td class="td_trading">

                        <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages1_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('trading_engineering_advantages1_title'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('trading_engineering_advantages1_hover'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                	<td class="td_trading">

                        <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages2_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('trading_engineering_advantages2_title'); ?></p>

                             <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('trading_engineering_advantages2_hover'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                    <td class="td_trading">

                        <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages3_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('trading_engineering_advantages3_title'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('trading_engineering_advantages3_hover'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                </tr>

                <tr>

                	<td class="td_trading">

                        <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages4_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('trading_engineering_advantages4_title'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('trading_engineering_advantages4_hover'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                	<td class="td_trading">

                        <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages5_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('trading_engineering_advantages5_title'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('trading_engineering_advantages5_hover'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                    <td class="td_trading">

                        <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages6_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('trading_engineering_advantages6_title'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('trading_engineering_advantages6_hover'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                </tr>

            </table>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages1_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('trading_engineering_advantages1_title'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages2_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('trading_engineering_advantages2_title'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages3_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('trading_engineering_advantages3_title'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages4_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('trading_engineering_advantages4_title'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages5_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('trading_engineering_advantages5_title'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">

                            		<?php 
                                        $image = get_field('trading_engineering_advantages6_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('trading_engineering_advantages6_title'); ?></p>

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
            <div class="row row_clients row_pt_clients">

                <div class="col-md-12 col-sm-12">
                    <?php
                    $client_page = $item['client_page'];
                    //                            $image = get_field('featured_clients_logotyp');
                    if (has_post_thumbnail($client_page)): ?>
                        <?php echo get_the_post_thumbnail($client_page, 'full'); ?>
                    <?php endif; ?>
                    <?php
                        /*$image = get_field('featured_trading_clients_logo');
                        if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif;*/ ?>

                </div>

            </div>

            <div class="row  ">
                <?php
                $client_text = $item['custom_description'] ? $item['custom_description'] : $client_page->post_content;
                $client_text = get_extended($client_text);
                ?>
                <div class="<?= $client_text['extended'] ? 'col-md-6 col-sm-6' : 'col-md-12' ?>">

                    <p class="text_clients mt30 mar_30"><?php echo $client_text['main']; ?>/p>

                </div>
        <?php if($client_text['extended']): ?>
                <div class="col-md-6 col-sm-6">
                    <p class="text_clients mt30"><?php echo $client_text['extended'] ?></p>
                </div>
                <?php endif; ?>
            </div>

        <?php if ($comments = get_field('reviews', $client_page)): ?>
            <?php foreach ($comments as $comment): ?>
        <div class="container cont_clients_trading">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <?php
                        $image = $comment['img'];
                        if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-md-6 col-sm-6">

                    <p class="t1_trading_clients"><?php echo $comment['name']; ?></p>

                    <p class="t2_trading_clients"><?php echo $comment['position']; ?></p>

                    <p class="t3_trading_clients"><?php echo $comment['description']; ?></p>

                </div>

            </div>

        </div>

            <?php endforeach; ?>
        <?php endif; ?>

        <?php endforeach; ?>
        <?php endif; ?>

        </div>
    </section>

    

    <section class="sect_dots s3_wealthtech s3_wealthtech_m s3_paytech_m">

        <img class="cicles_grid5_wealthtech" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid5_wealthtech.svg" alt="" />

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('fintech_events_we_partner_with_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container cont2_member box_event">

            <div class="row">

                <div class="col-md-4 col-sm-4 text-center">

                                    <?php 

                                        $image = get_field('events_logo_1');

                                        if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                </div>

                <div class="col-md-4 col-sm-4 text-center">

                                    <?php 

                                        $image = get_field('events_logo_2');

                                        if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                </div>

                <div class="col-md-4 col-sm-4 text-center">

                                    <?php 

                                        $image = get_field('events_logo_3');

                                        if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                </div>

                <div class="col-md-4 col-sm-4 text-center">

                                    <?php 

                                        $image = get_field('events_logo_4');

                                        if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                </div>

                <div class="col-md-4 col-sm-4 text-center">

                                    <?php 

                                        $image = get_field('events_logo_5');

                                        if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                </div>

                <div class="col-md-4 col-sm-4 text-center">

                                    <?php 

                                        $image = get_field('events_logo_6');

                                        if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

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

                        $the_insights = new WP_Query( $args );

                        // The Loop
                        if ( $the_insights->have_posts() ) {
                            while ( $the_insights->have_posts() ) {
                                $the_insights->the_post(); ?>

                                <li class="text-center">  
                                    <div class="box_article">
                                        <img class="img_insights" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"/>
                                        <p class="t1_insights1"><a href="<?php echo get_field('our_insights_link'); ?>" target="_blank"><?php the_title(); ?></a></p>
                                        <div class="date_insights"><p class="date_insights"><?php echo get_the_date('M.j.Y'); ?></p></div>
                                        <div class="box_hover_article">
                                            <div>
                                                <p>Read the Article</p>
                                                <a href="<?php echo get_field('our_insights_link'); ?>" target="_blank"><img class="arrow_article" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
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