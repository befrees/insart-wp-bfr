<?php

/*

Template Name: Approach

*/

get_header();

?>



<section class="section1_approach ">

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

        <img class="cicles_grid1_page disp_n_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_page.png" alt="" />

        <img class="cicles_grid1_page_m disp_b_768" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_page_m.svg" alt="" />

        <div class="container cont2_s1_approach">

            <div class="row">

                <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-12">

                    <p class="text1_page"><?php echo get_field('approach_title'); ?></p>

                    

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

    <section class="sect_under_page sect_under_approach">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-12">

                    <p class="text2_page text2_page_approach"><?php echo get_field('approach_subtitle'); ?></p>

                </div>

            </div>

        </div>

    </section>

    <section class="section4 s4_approach">

       <img class="figure_s4_approach" src="<?php bloginfo('template_url'); ?>/assets/images/figure_s4_approach.png" alt="" />

         <div class="container cont2_s4 pos_rel">

            <div class="row">

                <div class="col-md-12">

                    <div class="box_ellipse">

                        <div class="box_ellipse_center"><p><?php echo get_field('fintech_engineering_approach_circle_center'); ?></p></div>

                        <div class="box1_ell box_ell" onmouseover="$('.box1_ell').addClass('active');$('.box1_text').addClass('hover');$('.arrow1_s4').addClass('act');" onmouseout="$('.box1_ell').removeClass('active');$('.box1_text').removeClass('hover');$('.arrow1_s4').removeClass('act');"><p class="fin_dom"><?php echo get_field('fintech_engineering_approach_part_1_title'); ?></p></div>

                        <div class="box2_ell box_ell" onmouseover="$('.box2_ell').addClass('active');$('.box2_text').addClass('hover');$('.arrow2_s4').addClass('act');" onmouseout="$('.box2_ell').removeClass('active');$('.box2_text').removeClass('hover');$('.arrow2_s4').removeClass('act');" ><p><?php echo get_field('fintech_engineering_approach_part_2_title'); ?></p></div>

                        <div class="box3_ell box_ell" onmouseover="$('.box3_ell').addClass('active');$('.box3_text').addClass('hover');$('.arrow3_s4').addClass('act');" onmouseout="$('.box3_ell').removeClass('active');$('.box3_text').removeClass('hover');$('.arrow3_s4').removeClass('act');"><p><?php echo get_field('fintech_engineering_approach_part_3_title'); ?></p></div>

                        <div class="box4_ell box_ell" onmouseover="$('.box4_ell').addClass('active');$('.box4_text').addClass('hover');$('.arrow4_s4').addClass('act');" onmouseout="$('.box4_ell').removeClass('active');$('.box4_text').removeClass('hover');$('.arrow4_s4').removeClass('act');"><p><?php echo get_field('fintech_engineering_approach_part_4_title'); ?></p></div>

                    </div>

                    <div class="box1_text box_ellipse_text"  onmouseover="$('.box1_ell').addClass('active');" onmouseout="$('.box_ell').removeClass('active');">

                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_engineering_approach_part_1_title'); ?></p>

                        <?php echo get_field('fintech_engineering_approach_part_1_description'); ?>

                        <a href="<?php echo get_field('fintech_engineering_approach_part_1_link'); ?>" class="scroll-link"><img class="arrow_s4 arrow1_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>

                    </div>

                    <div class="box2_text box_ellipse_text" onmouseover="$('.box2_ell').addClass('active');" onmouseout="$('.box2_ell').removeClass('active');">

                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_engineering_approach_part_2_title'); ?></p>

                        <?php echo get_field('fintech_engineering_approach_part_2_description'); ?>

                        <a href="<?php echo get_field('fintech_engineering_approach_part_2_link'); ?>" class="scroll-link"><img class="arrow_s4 arrow2_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>

                    </div>

                    <div class="box3_text box_ellipse_text" onmouseover="$('.box3_ell').addClass('active');" onmouseout="$('.box3_ell').removeClass('active');">

                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_engineering_approach_part_3_title'); ?></p>

                        <?php echo get_field('fintech_engineering_approach_part_3_description'); ?>

                        <a href="<?php echo get_field('fintech_engineering_approach_part_3_link'); ?>" class="scroll-link"><img class="arrow_s4 arrow3_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>

                    </div>

                    <div class="box4_text box_ellipse_text" onmouseover="$('.box4_ell').addClass('active');" onmouseout="$('.box4_ell').removeClass('active');">

                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_engineering_approach_part_4_title'); ?></p>

                        <?php echo get_field('fintech_engineering_approach_part_4_description'); ?>

                        <a href="<?php echo get_field('fintech_engineering_approach_part_4_link'); ?>" class="scroll-link"><img class="arrow_s4 arrow4_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section3_approach sect_dots" id="fin_domain">

        <img class="figure_s3_approach" src="<?php bloginfo('template_url'); ?>/assets/images/figure_s3_approach.svg" alt="" />

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6">

                    <h2 class="t_h2_approach" ><?php echo get_field('financial_domain_expertise'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container cont2_section3_approach">

            <div class="row">

                <div class="col-md-12">

                    <p class="title_block"><?php echo get_field('why_we_need_it'); ?></p>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('why_we_need_it_box_text_1'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('why_we_need_it_box_text_2'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('why_we_need_it_box_text_3'); ?></p>

                </div>

            </div>

        </div>

        <div class="container cont2_section3_approach">

            <div class="row">

                <div class="col-md-12">

                    <p class="title_block"><?php echo get_field('how_we_gain_it_title'); ?></p>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('how_we_gain_it_box_text_1'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('how_we_gain_it_box_text_2'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('how_we_gain_it_box_text_3'); ?></p>

                </div>

            </div>

        </div>

        <div class="container cont2_section3_approach">

            <div class="row">

                <div class="col-md-12">

                    <p class="title_block"><?php echo get_field('what_our_clients_get_title'); ?></p>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('what_our_clients_get_box_1'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('what_our_clients_get_box_2'); ?></p>

                </div>

                <div class="col-md-4 col-sm-4">

                    <p class="text_block"><?php echo get_field('what_our_clients_get_box_3'); ?></p>

                </div>

            </div>

        </div>

    </section>

    <section class="section7 sect_dots" id="architecture">

        <div class="container cont1_s3 pos_rel">

            <div class="row">

                <div class="col-md-6">

                    <h2 class="t_h2_approach"><?php echo get_field('engineering_expertise_in_fintech_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container ">

            <table class="table_main table_sect7 table_expertise">

                <tr>

                	<td class="">

                        <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text1'); ?></p>

                        </div>

                    </td>

                	<td class="">

                        <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon2');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text2'); ?></p>

                        </div>

                    </td>

                    <td class="">

                        <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon3');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text3'); ?></p>

                        </div>

                    </td>

                </tr>

                <tr>

                	<td class="">

                        <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon4');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text4'); ?></p>

                        </div>

                    </td>

                	<td class="">

                        <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon5');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text5'); ?></p>

                        </div>

                    </td>

                    <td class="">

                        <div class="box_expertise">


                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon6');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text6'); ?></p>

                        </div>

                    </td>

                </tr>

                <tr>

                	<td class="">

                        <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon7');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text7'); ?></p>

                        </div>

                    </td>

                	<td class="">

                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon8');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text8'); ?></p>

                        </div>

                    </td>

                    <td class="">

                        <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon9');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                            <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text9'); ?></p>

                        </div>

                    </td>

                </tr>

            </table>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text1'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon2');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text2'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon3');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text3'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon4');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text4'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon5');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text5'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon6');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text6'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon7');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text7'); ?></p>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon8');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text8'); ?></p>

                    </div>

                </div>

            </div>

            <div class="row disp_b_768">

                <div class="col-xs-6">

                    <div class="box_expertise">

                                    <?php 
                                        $image = get_field('engineering_expertise_in_fintech_icon9');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                        <p class="t_expertise"><?php echo get_field('engineering_expertise_in_fintech_text9'); ?></p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section_processes sect_dots" id="processes">

        <img class="figure_processes_approach" src="<?php bloginfo('template_url'); ?>/assets/images/figure_processes_approach.svg" alt="" />

        <img class="figure2_processes_approach" src="<?php bloginfo('template_url'); ?>/assets/images/figure2_processes_approach.svg" alt="" />

        <div class="container cont1_s3">

            <div class="row">

                <div class="col-md-12">

                    <h2 class="t_h2_approach"><?php echo get_field('processes_workflows_title'); ?></h2>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <p class="text_block"><?php echo get_field('processes_workflows_text_box_1'); ?></p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="text_block"><?php echo get_field('processes_workflows_text_box_2'); ?> </p>

                </div>

            </div>

        </div>

        <div class="container cont3_section_processes">

            <div class="row">

                <div class="col-md-5 col-sm-6">
                                    <?php 
                                        $image = get_field('processes_images_1');
                                        if( !empty($image) ): ?>
                                        <img class="processes_workflows" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                </div>

                <div class="col-md-4 col-md-offset-3 col-sm-6">

                    <div class="block_step_processes">

                        <div class="box_step_processes">

                            <p class="t1_step"><?php echo get_field('processes_step_1'); ?></p>

                            <p class="t2_step t2_step_bef"><?php echo get_field('processes_step_1_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('processes_step_1_subtitle'); ?></p>

                        </div>

                        <div class="box_step_processes">

                            <p class="t1_step"><?php echo get_field('processes_step_2'); ?></p>

                            <p class="t2_step t2_step_bef"><?php echo get_field('processes_step_2_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('processes_step_2_subtitle'); ?></p>

                        </div>

                        <div class="box_step_processes">

                            <p class="t1_step"><?php echo get_field('processes_step_3'); ?></p>

                            <p class="t2_step t2_step_bef"><?php echo get_field('processes_step_3_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('processes_step_3_subtitle'); ?></p>

                        </div>

                        <div class="box_step_processes">

                            <p class="t1_step"><?php echo get_field('processes_step_4'); ?></p>

                            <p class="t2_step t2_step_bef"><?php echo get_field('processes_step_4_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('processes_step_4_subtitle'); ?></p>

                        </div>

                        <div class="box_step_processes">

                            <p class="t1_step"><?php echo get_field('processes_step_5'); ?></p>

                            <p class="t2_step t2_step_bef"><?php echo get_field('processes_step_5_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('processes_step_5_subtitle'); ?></p>

                        </div>

                        <div class="box_step_processes">

                            <p class="t1_step"><?php echo get_field('processes_step_6'); ?></p>

                            <p class="t2_step t2_step_bef"><?php echo get_field('processes_step_6_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('processes_step_6_subtitle'); ?></p>

                        </div>

                        <div class="box_step_processes">

                            <p class="t1_step"><?php echo get_field('processes_step_7'); ?></p>

                            <p class="t2_step t2_step_bef"><?php echo get_field('processes_step_7_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('processes_step_7_subtitle'); ?></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    

    <section class="section_talents sect_dots" id="structuring">

        <img class="figure_talents_approach" src="<?php bloginfo('template_url'); ?>/assets/images/figure_talents_approach.svg" alt="" />

        <div class="container cont1_s3">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h2 class="t_h2_approach"><?php echo get_field('talents_pipeline_title'); ?></h2>

                </div>

                <div class="col-md-6 col-sm-6">

                    <p class="text_block"><?php echo get_field('talents_pipeline_text_box'); ?></p>

                </div>

            </div>

        </div>

        <div class="container cont2_section_talents">

            <div class="row">

                <div class="col-md-6 col-sm-6">

                                    <?php 
                                        $image = get_field('talents_pipeline_images');
                                        if( !empty($image) ): ?>
                                        <img class="talents_pipeline_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                </div>

                <div class="col-md-6 col-sm-6">

                    <div class="block_step2_processes">

                        <div class="box_step2_processes">

                            <p class="t1_step"><?php echo get_field('talents_step_1'); ?></p>

                            <p class="t2_step "><?php echo get_field('talents_pipeline_setap_1_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('talents_pipeline_setap_1_subtitle'); ?></p>

                        </div>

                        <div class="box_step2_processes">

                            <p class="t1_step"><?php echo get_field('talents_step_2'); ?></p>

                            <p class="t2_step"><?php echo get_field('talents_pipeline_setap_2_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('talents_pipeline_setap_2_subtitle'); ?></p>

                        </div>

                        <div class="box_step2_processes">

                            <p class="t1_step"><?php echo get_field('talents_step_3'); ?></p>

                            <p class="t2_step"><?php echo get_field('talents_pipeline_setap_3_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('talents_pipeline_setap_3_subtitle'); ?></p>

                        </div>

                        <div class="box_step2_processes">

                            <p class="t1_step"><?php echo get_field('talents_step_4'); ?></p>

                            <p class="t2_step"><?php echo get_field('talents_pipeline_setap_4_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('talents_pipeline_setap_4_subtitle'); ?></p>

                        </div>

                        <div class="box_step2_processes">

                            <p class="t1_step"><?php echo get_field('talents_step_5'); ?></p>

                            <p class="t2_step"><?php echo get_field('talents_pipeline_setap_5_title'); ?></p>

                            <p class="t3_step"><?php echo get_field('talents_pipeline_setap_5_subtitle'); ?></p>

                        </div>

                    </div>

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