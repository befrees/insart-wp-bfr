<?php

/*

Template Name: About

*/

get_header();

?>

<?php global $redux_demo; ?>


<section class="section1_about ">

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

                    <p class="text1_about"><?php echo get_field('about_us_page_title'); ?></p>

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

               <?php if($redux_demo['linkedin']) { ?> <a onclick="$('body').removeClass('menu_hid');" href="<?php echo $redux_demo ['linkedin'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo.svg" alt="" /></a><?php } ?>

                <?php if($redux_demo['facebook']) { ?> <a onclick="$('body').removeClass('menu_hid');" href="<?php echo $redux_demo ['facebook'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt="" /></a><?php } ?>

                <?php if($redux_demo['twitter']) { ?> <a onclick="$('body').removeClass('menu_hid');" href="<?php echo $redux_demo ['twitter'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter-logo.svg" alt="" /></a><?php } ?>

            </div>

        </div>

    </section>

    <section class="sect2_about">

        <img class="cicles_grid1_about disp_n_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_about.svg" alt="" />

        <img class="cicles_grid1_about disp_b_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_about_m.svg" alt="" />

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class=""><?php echo get_field('about_us_page_section2_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <p class="t2_s4"><?php echo get_field('about_us_page_section2_text1'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="t2_s4"><?php echo get_field('about_us_page_section2_text2'); ?></p>

                </div>

            </div>

        </div>

    </section>

    

    <section class="sect_dots sect3_about">

        <img class="cicles_grid2_about" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid2_about.svg" alt="" />

        <div class="container cont1_s3">

            <table class="table_main  table_about">

                <tr>

                	<td class="t1_table_about box_table_about">

                        Values

                    </td>

                	<td class="box_table_about">

                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon1');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('values_title1'); ?></p>

                             <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('values_text_hover1'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                    <td class="box_table_about">

                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon2');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('values_text2'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('values_text_hover2'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                </tr>

                <tr>

                	<td class="box_table_about">

                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon3');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('values_text3'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('values_text_hover3'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                	<td class="box_table_about">

                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon4');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('values_text4'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('values_text_hover4'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                    <td class="box_table_about">

                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon5');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('values_text5'); ?></p>

                            <div class="box_wealthtech">

                                <div class="box_hover_wealthtech">

                                    <p><?php echo get_field('values_text_hover5'); ?></p>

                                </div>

                            </div>

                        </div>

                    </td>

                </tr>

            </table>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="t1_table_about">

                        Values

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon1');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('values_title1'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon2');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('values_text2'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon3');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('values_text3'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon4');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('values_text4'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('values_icon5');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('values_text5'); ?></p>

                    </div>

                </div>

            </div>

            

        </div>

    </section>

    

    

    <section class="sect4_about   sect_dots ">

        <img class="cicles_grid3_about" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid3_about.svg" alt="" />

         <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4">Team</h2>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img1');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover1'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name1'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position1'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img2');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover2'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name2'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position2'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img3');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover3'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name3'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position3'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img4');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover4'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name4'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position4'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img5');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover5'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name5'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position5'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img6');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover6'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name6'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position6'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img7');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover7'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name7'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position7'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_team">
                                    <?php 
                                        $image = get_field('team_page_img8');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <div class="box_hover_team">

                            <p><?php echo get_field('team_page_hover8'); ?></p>

                        </div>

                    </div>

                    <p class="name_team"><?php echo get_field('team_page_name8'); ?></p>

                    <p class="under_name_team"><?php echo get_field('team_page_position8'); ?></p>

                </div>

            </div>

        </div>

    </section>

    

    <section class="sect4_about   sect_dots">

        <img class="cicles_grid4_about" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid4_about.svg" alt="" />

        <img class="cicles_grid5_about" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid5_about.svg" alt="" />

         <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t1_s4"><?php echo get_field('partnership_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_partnership"><div>
						<a href="<?php echo get_field('partnership1_link'); ?>" target="_blank">
                                    <?php 
                                        $image = get_field('partnership1_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						</a>
						</div>
					</div>

                    <p class="t2_s4"><?php echo get_field('partnership1_text'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_partnership"><div><a href="<?php echo get_field('partnership2_link'); ?>" target="_blank">
						<?php 
                                        $image = get_field('partnership2_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						</a></div></div>

                    <p class="t2_s4"><?php echo get_field('partnership2_text'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_partnership"><div><a href="<?php echo get_field('partnership3_link'); ?>" target="_blank">
                                    <?php 
                                        $image = get_field('partnership3_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						</a></div></div>

                    <p class="t2_s4"><?php echo get_field('partnership3_text'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_partnership"><div><a href="<?php echo get_field('partnership4_link'); ?>" target="_blank">
                                    <?php 
                                        $image = get_field('partnership4_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						</a></div></div>

                    <p class="t2_s4"><?php echo get_field('partnership4_text'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_partnership"><div><a href="<?php echo get_field('partnership5_link'); ?>" target="_blank">
                                    <?php 
                                        $image = get_field('partnership5_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						</a></div></div>

                    <p class="t2_s4"><?php echo get_field('partnership5_text'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_partnership"><div><a href="<?php echo get_field('partnership6_link'); ?>" target="_blank">
                                    <?php 
                                        $image = get_field('partnership6_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						</a></div></div>

                    <p class="t2_s4"><?php echo get_field('partnership6_text'); ?></p>

                </div>

            </div>

        </div>

        <div class="container mt100">

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="box_partnership"><div><a href="<?php echo get_field('partnership7_link'); ?>" target="_blank">
                                    <?php 
                                        $image = get_field('partnership7_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						</a></div></div>

                    <p class="t2_s4"><?php echo get_field('partnership7_text'); ?></p>

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
                    <!--
                        <li class="text-center">  
                            <div class="box_article">
                                <img class="img_insights" src="<?php bloginfo('template_url'); ?>/assets/images/insights1.png"/>
                                <p class="t1_insights1">Research & Analysis: MacroRisk Analytics</p>
                                <p class="date_insights">Mar.14.2019</p>
                                <div class="box_hover_article">
                                    <div>
                                        <p>Read the Article</p>
                                        <a href=""><img class="arrow_article" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">    
                            <div class="box_article">
                                <img class="img_insights" src="<?php bloginfo('template_url'); ?>/assets/images/insights2.png"/>
                                <p class="t1_insights1">Research & Analysis: FinMason</p>
                                <p class="date_insights">Mar.12.2019</p>
                                <div class="box_hover_article">
                                    <div>
                                        <p>Read the Article</p>
                                        <a href=""><img class="arrow_article" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">
                            <div class="box_article">
                                <img class="img_insights" src="<?php bloginfo('template_url'); ?>/assets/images/insights3.png"/>
                                <p class="t1_insights1">Research & Analysis: Nest Wealth</p>
                                <p class="date_insights">Mar.10.2019</p>
                                <div class="box_hover_article">
                                    <div>
                                        <p>Read the Article</p>
                                        <a href=""><img class="arrow_article" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">  
                            <div class="box_article">
                                <img class="img_insights" src="<?php bloginfo('template_url'); ?>/assets/images/insights1.png"/>
                                <p class="t1_insights1">Research & Analysis: MacroRisk Analytics</p>
                                <p class="date_insights">Mar.14.2019</p>
                                <div class="box_hover_article">
                                    <div>
                                        <p>Read the Article</p>
                                        <a href=""><img class="arrow_article" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">    
                            <div class="box_article">
                                <img class="img_insights" src="<?php bloginfo('template_url'); ?>/assets/images/insights2.png"/>
                                <p class="t1_insights1">Research & Analysis: FinMason</p>
                                <p class="date_insights">Mar.12.2019</p>
                                <div class="box_hover_article">
                                    <div>
                                        <p>Read the Article</p>
                                        <a href=""><img class="arrow_article" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">
                            <div class="box_article">
                                <img class="img_insights" src="<?php bloginfo('template_url'); ?>/assets/images/insights3.png"/>
                                <p class="t1_insights1">Research & Analysis: Nest Wealth</p>
                                <p class="date_insights">Mar.10.2019</p>
                                <div class="box_hover_article">
                                    <div>
                                        <p>Read the Article</p>
                                        <a href=""><img class="arrow_article" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>-->
                    </ul>
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>