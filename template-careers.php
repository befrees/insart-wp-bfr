<?php
/*
Template Name: Careers
*/
get_header();
?>

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
                    <p class="text1_about"><?php echo get_field('careers_title'); ?></p>
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
               <?php if($redux_demo['linkedin']) { ?> <a  href="<?php echo $redux_demo ['linkedin'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo.svg" alt="" /></a><?php } ?>
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
                <div class="col-md-4 col-sm-4">
                    <h2 class=""><?php echo get_field('careers_together_with_insart_title'); ?></h2>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4"><?php echo get_field('careers_together_with_insart_text_box_1'); ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4"><?php echo get_field('careers_together_with_insart_text_box_2'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_dots sect3_about">
        <div class="container cont1_s3 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class=""><?php the_field('we_are_hiring_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container ">
            <table class="table_main  table_careers">
                 <tr>
                    <?php $the_query = new WP_Query('cat=9&showposts=8'); ?>        
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                	<td class="box_table_about box_table_careers">
                        
                                        
                        <div class="box_expertise">
                            
                            <p class="t1_careers_table"><?php the_field('jobs_location'); ?></p>
                            <p class="title_block_jobs"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p><h2>
                             <div class="box_wealthtech">
                                <div class="box_hover_wealthtech">
                                    <p class="more_careers_table">Learn More</p>
                                    <a href="<?php the_permalink() ?>"><img class="arrow_careers" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </td>
                     <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </tr>                
            </table>
        </div>
    </section>
    <section class="sect_dots sect3_about">
        <img class="cicles_grid1_careers" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_careers.svg" alt="" />
        <div class="container cont1_s3 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class=""><?php echo get_field('our_perks_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container ">
            <table class="table_main  table_perks">
                <tr>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo1');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo1_text'); ?></p>
                        </div>
                    </td>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo2');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo2_text'); ?></p>
                        </div>
                    </td>
                    <td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo3');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo3_text'); ?></p>
                        </div>
                    </td>
                </tr>
                <tr>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo4');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo4_text'); ?></p>
                        </div>
                    </td>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo5');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo5_text'); ?></p>
                        </div>
                    </td>
                    <td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo6');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo6_text'); ?></p>
                        </div>
                    </td>
                </tr>
                <tr>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo7');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo7_text'); ?></p>
                        </div>
                    </td>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo8');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo8_text'); ?></p>
                        </div>
                    </td>
                    <td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo9');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo9_text'); ?></p>
                        </div>
                    </td>
                </tr>
                <tr>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo10');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo10_text'); ?></p>
                        </div>
                    </td>
                	<td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo11');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo11_text'); ?></p>
                        </div>
                    </td>
                    <td class="box_table_about">
                        <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo12');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                            <p class="t_expertise"><?php echo get_field('our_perks_logo12_text'); ?></p>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="row disp_b_768">
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo1');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo1_text'); ?></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo2');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo2_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row disp_b_768">
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo3');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo3_text'); ?></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo4');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo4_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row disp_b_768">
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo5');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo5_text'); ?></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo6');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo6_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row disp_b_768">
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo7');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo7_text'); ?></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo8');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo8_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row disp_b_768">
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo9');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo9_text'); ?></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo10');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo10_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row disp_b_768">
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo11');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo11_text'); ?></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box_expertise">
                                    <?php 
                                        $image = get_field('our_perks_logo12');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('our_perks_logo12_text'); ?></p>
                    </div>
                </div>
            </div>
             
        </div>
    </section>
    
    
    <section class="sect4_about  sect_dots ">
        <img class="cicles_grid2_careers" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid2_careers.svg" alt="" />
         <div class="container cont1_s3 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="t1_s4"><?php echo get_field('insart_life_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container cont_life">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                        
                                    <?php 
                                        $image = get_field('insart_life_image1');
                                        if( !empty($image) ): ?>
                                        <img class="life1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        
                                    <?php 
                                        $image = get_field('insart_life_image2');
                                        if( !empty($image) ): ?>
                                        <img class="life2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                      
                                    <?php 
                                        $image = get_field('insart_life_image3');
                                        if( !empty($image) ): ?>
                                        <img class="life3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                        <div class="clearfix"></div>
                        
                                    <?php 
                                        $image = get_field('insart_life_image4');
                                        if( !empty($image) ): ?>
                                        <img class="life4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                    <?php 
                                        $image = get_field('insart_life_image5');
                                        if( !empty($image) ): ?>
                                        <img class="life5" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="sect4_about   sect_dots">
         <div class="container cont1_s3 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="t1_s4"><?php echo get_field('smart_club_financial_literacy_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container cont_careers">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p class="t2_s4"><?php echo get_field('smart_club_financial_literacy_text_box1'); ?></p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p class="t2_s4"><?php echo get_field('smart_club_financial_literacy_text_box2'); ?></p>
                    <p class="t_arrow_careers"><a href="<?php echo get_field('smart_club_&_financial_literacy_link_learn_more'); ?>" class="more_member">Learn more <img class="arrow_member arrow1_careers" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a></p>
                </div>
            </div>
        </div>
    </section>
    
     <section class="sect4_about   sect_dots">
         <div class="container cont1_s3 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="t1_s4"><?php echo get_field('get_in_touch_with_our_hr_team_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container cont_careers">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php 
                                        $image = get_field('get_in_touch_with_our_hr_team_contact1_image');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                    <p class="name_hr"><?php echo get_field('get_in_touch_with_our_hr_team_contact1_name'); ?></p>
                    <p class="under_name_hr"><?php echo get_field('get_in_touch_with_our_hr_team_contact1_position'); ?></p>
                    <p class="info_hr"><span>Tel:</span> <?php echo get_field('get_in_touch_with_our_hr_team_contact1_phone'); ?></p>
                    <p class="info_hr"><span>Email:</span> <?php echo get_field('get_in_touch_with_our_hr_team_contact1_email'); ?></p>
                    <p class="info_hr"><span>Skype:</span> <?php echo get_field('get_in_touch_with_our_hr_team_contact1_skype'); ?></p>
                    <div class="block_logo2">
                        <a href="<?php echo get_field('get_in_touch_with_our_hr_team_contact1_link_in'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo2.svg" alt="" /></a>
                        <a href="<?php echo get_field('get_in_touch_with_our_hr_team_contact1_link_fb'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo2.svg" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php 
                                        $image = get_field('get_in_touch_with_our_hr_team_contact2_image');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
						
                    <p class="name_hr"><?php echo get_field('get_in_touch_with_our_hr_team_contact2_name'); ?></p>
                    <p class="under_name_hr"><?php echo get_field('get_in_touch_with_our_hr_team_contact2_position'); ?></p>
                    <p class="info_hr"><span>Tel:</span> <?php echo get_field('get_in_touch_with_our_hr_team_contact2_phone'); ?></p>
                    <p class="info_hr"><span>Email:</span> <?php echo get_field('get_in_touch_with_our_hr_team_contact2_email'); ?></p>
                    <p class="info_hr"><span>Skype:</span> <?php echo get_field('get_in_touch_with_our_hr_team_contact2_skype'); ?></p>
                    <div class="block_logo2">
                        <a href="<?php echo get_field('get_in_touch_with_our_hr_team_contact2_link_in'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo2.svg" alt="" /></a>
                        <a href="<?php echo get_field('get_in_touch_with_our_hr_team_contact2_link_fb'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo2.svg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>