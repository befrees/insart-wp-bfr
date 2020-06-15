<?php

/*
Template Name: Wealthtech
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
                <p class="text1_page"><?php echo get_field('wealthtech_title'); ?></p>

            </div>
        </div>
    </div>
    <?php /* ?>
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
                <div class="col-md-6 col-sm-4">
                    <p class="t_cont_menu">
                        <?php
                        echo $redux_demo['email'];
                        ?>
                    </p>
                </div>
                <div class="col-md-6 col-sm-8">
                    <p class="t_cont_menu tell_menu">
                        <?php
                        echo $redux_demo['phone'];
                        ?></p>
                </div>
            </div>
        </div>
        <div class="box_social_menu">
            <?php if ($redux_demo['linkedin']) { ?> <a href="<?php echo $redux_demo['linkedin'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin-logo.svg" alt="" />
                </a><?php } ?>
            <?php if ($redux_demo['facebook']) { ?> <a href="<?php echo $redux_demo['facebook'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt="" />
                </a><?php } ?>
            <?php if ($redux_demo['twitter']) { ?> <a href="<?php echo $redux_demo['twitter'] ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter-logo.svg" alt="" />
                </a><?php } ?>
        </div>
    </div>
    <?php */ ?>
    <?php get_template_part('parts/_top-menu') ?>
</section>
<section class="sect_under_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p class="text2_page "><?php echo get_field('wealthtech_subtitle_text_box_1'); ?></p>
            </div>
            <div class="col-md-6 col-sm-6">
                <p class="text2_page "><?php echo get_field('wealthtech_subtitle_text_box_2'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="section4 s4_wealthtech">
    <img class="figure_s4_approach" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid2_wealthtech.svg" alt="" />
    <div class="container cont1_s4 pos_rel">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2 class="t1_s4"><?php echo  ($components_we_develop_title = get_field('components_we_develop_title')) ? $components_we_develop_title : get_field('wealthtech_components_we_develop_title'); ?></h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <p class="t2_s4"><?php echo ($components_we_develop_subtitle = get_field('components_we_develop_subtitle')) ? $components_we_develop_subtitle : get_field('wealthtech_components_we_develop_subtitle'); ?></p>
            </div>
        </div>
    </div>
    <div class="container ">
        <table class="table_main table_sect7 table_expertise grid-we-dev">
            <?php if($comp_we_dev = get_field('comp_we_dev')):
                $c_rows = array_chunk($comp_we_dev, 3); ?>
            <?php foreach ($c_rows as $k => $row) : ?>
                <tr>
                <?php foreach ($row as $i => $td) : ?>
                    <td class="comp_we_dev__td">
                        <div class="comp_we_dev__inner">
                            <div class="box_expertise">
                            <?php
                            $image = $td['icon'];
                            if (!empty($image)) : ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <p class="t_expertise"><?php echo $td['title'] ?></p>
                            </div>
                            <div class="box_wealthtech">
                                <div class="box_hover_wealthtech">
                                    <p><?php echo $td['text']; ?></p>
                                </div>
                            </div>
                        </div> <!-- .comp_we_dev__inner -->
                    
                </td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
            <?php else: ?>
            <tr>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon1');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title1'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title1_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon2');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title2'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title2_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon3');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title3'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title3_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon4');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title4'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title4_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon5');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title5'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title5_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon6');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title6'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title6_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon7');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title7'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title7_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon8');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title8'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title8_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon9');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title9'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title9_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon10');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title10'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title10_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon11');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title11'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon_title11_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon12');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon12_title'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon12_title_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon13');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon13_title'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon13_title_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon14');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon14_title'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon14_title_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="">
                    <div class="box_expertise">
                        <?php
                        $image = get_field('wealthtech_components_we_develop_icon15');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon15_title'); ?></p>
                        <div class="box_wealthtech">
                            <div class="box_hover_wealthtech">
                                <p><?php echo get_field('wealthtech_components_we_develop_icon15_title_hover'); ?></p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endif; ?>
        </table>
        <?php if($comp_we_dev):
            $c_rows = array_chunk($comp_we_dev, 2); ?>
        <?php foreach ($c_rows as $k => $row) : ?>
            <div class="row disp_b_768">
                <?php foreach ($row as $k => $td) : ?>
                <div class="col-xs-6">
                    <div class="box_expertise">
                        <?php
                        $image = $td['icon'];
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <p class="t_expertise"><?php echo $td['title']; ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
        <?php else: ?>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon1');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title1'); ?></p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon2');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title2'); ?></p>
                </div>
            </div>
        </div>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon3');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title3'); ?></p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon4');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title4'); ?></p>
                </div>
            </div>
        </div>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon5');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title5'); ?></p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon6');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title6'); ?></p>
                </div>
            </div>
        </div>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon7');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title7'); ?></p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon8');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title8'); ?></p>
                </div>
            </div>
        </div>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon9');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title9'); ?></p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon10');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title10'); ?></p>
                </div>
            </div>
        </div>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon11');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon_title11'); ?></p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon12');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon12_title'); ?></p>
                </div>
            </div>
        </div>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon13');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon13_title'); ?></p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon14');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon14_title'); ?></p>
                </div>
            </div>
        </div>
        <div class="row disp_b_768">
            <div class="col-xs-6">
                <div class="box_expertise">
                    <?php
                    $image = get_field('wealthtech_components_we_develop_icon15');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="t_expertise"><?php echo get_field('wealthtech_components_we_develop_icon15_title'); ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<section class="sect_dots s3_wealthtech">
    <div class="container cont1_s3 pos_rel">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2 class="t1_s4"><?php echo ($w_integrations_title = get_field('w_integrations_title')) ? $w_integrations_title : get_field('wealthtech_integrations_we_work_with_title'); ?></h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <p class="t2_s4"><?php echo ($w_integrations_text = get_field('w_integrations_text')) ? $w_integrations_text : get_field('wealthtech_integrations_we_work_with_text_box'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="s5_wealthtech ">
    <img class="cicles_grid3_wealthtech" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid3_wealthtech.svg" alt="" />
    <div class="container">
        <?php if ($w_integrations_list = get_field('w_integrations_list')) : ?>
            <?php foreach ($w_integrations_list as $k => $item) : ?>
                <div class="row">
            <div class="col-md-4 col-sm-4">
                <p class="title_block"><?php echo $item['title']; ?></p>
                <p class="text_block"><?php echo $item['text']; ?></p>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="block_brokers">
                    
                    <?php
                    $image = $item['logo'];
                    if (!empty($image)) : ?>
                        <img class="img_brokers" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
            <?php endforeach ?>
        <?php else: ?>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <p class="title_block"><?php echo get_field('custodians_title'); ?></p>
                <p class="text_block"><?php echo get_field('custodians_subtitle'); ?></p>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="block_brokers">
                    
                    <?php
                    $image = get_field('custodians_logotyps');
                    if (!empty($image)) : ?>
                        <img class="img_brokers" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row row2_s5_wealthtech">
            <div class="col-md-4 col-sm-4">
                <p class="title_block"><?php echo get_field('crm_title'); ?></p>
                <p class="text_block"><?php echo get_field('crm_subtitle'); ?></p>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="block_brokers">
                    
                    <?php
                    $image = get_field('crm_logotyps');
                    if (!empty($image)) : ?>
                        <img class="img_brokers" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row row2_s5_wealthtech">
            <div class="col-md-4 col-sm-4">
                <p class="title_block"><?php echo get_field('market_data_title'); ?></p>
                <p class="text_block"><?php echo get_field('market_data_subtitle'); ?></p>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="block_brokers">
                    
                    <?php
                    $image = get_field('market_data_logotyps');
                    if (!empty($image)) : ?>
                        <img class="img_brokers" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row row2_s5_wealthtech">
            <div class="col-md-4 col-sm-4">
                <p class="title_block"><?php echo get_field('trading_title'); ?></p>
                <p class="text_block"><?php echo get_field('trading_subtitle'); ?></p>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="block_brokers">
                    <!--<div class="col-md-4 col-sm-4 col-xs-6 text-center"><img src="<?php bloginfo('template_url'); ?>/assets/images/trading1.jpg" alt="" /></div>
                           <div class="col-md-4 col-sm-4 col-xs-6"><img class="trading2" src="<?php bloginfo('template_url'); ?>/assets/images/trading2.jpg" alt="" /></div>
                           <div class="col-md-4 col-sm-4 col-xs-6"><img class="" src="<?php bloginfo('template_url'); ?>/assets/images/trading3.jpg" alt="" /></div> -->
                    <?php
                    $image = get_field('trading_logotyps');
                    if (!empty($image)) : ?>
                        <img class="img_brokers" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
</section>

<section class="sect_dots s3_wealthtech">
    <div class="container cont1_s3 pos_rel">
        <div class="row">
            <div class="col-md-6 ">
                <h2 class="t1_s4"><?php echo get_field('featured_clients_title'); ?></h2>
            </div>
        </div>
        <?php if ($clients = get_field('client')) : ?>
            <?php foreach ($clients as $item) :; ?>
                <div class="row row_clients">
                    <div class="col-md-4 col-sm-4">
                        <?php
                        $client_page = $item['client_page'];
                        //                            $image = get_field('featured_clients_logotyp');
                        if (has_post_thumbnail($client_page)) : ?>
                            <?php echo get_the_post_thumbnail($client_page); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <?php
                        $client_text = $item['custom_description'] ? $item['custom_description'] : $client_page->post_content;
                        $client_text = get_extended($client_text);
                        ?>
                        <p class="text_clients"><?php echo $client_text['main']; ?></p>
                        <?php if ($client_text['extended']) : ?>
                            <p class="text_clients text2_clients"><?php echo $client_text['extended'] ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <?php if ($comments = get_field('reviews', $client_page)) : ?>
                    <?php foreach ($comments as $comment) : ?>
                        <div class="row row_clients">
                            <div class="col-md-4 col-sm-4">
                                <?php
                                $image = $comment['img'];
                                if (!empty($image)) : ?>
                                    <img class="clients_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <p class="name_clients"><?php echo $comment['name']; ?></p>
                                <p class="info_clients"><?php echo $comment['position']; ?></p>
                                <p class="text_clients text2_clients"><?php echo $comment['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>
<?php if ($members = get_field('members')) : 
// Section Members    
    ?>
<section class="sect_dots s3_wealthtech">
    <img class="cicles_grid4_wealthtech" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid4_wealthtech.svg" alt="" />
    <div class="container cont1_s3 pos_rel">
        <div class="row">
            <div class="col-md-12">
                <p class="numb_wealthtech"><?php echo ($block_members_number_title = get_field('block_members_number_title')) ? $block_members_number_title : get_field('wealthtech_club_members_number_title'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2 class="t1_s4"><?php echo ($block_members_title = get_field('block_members_title')) ? $block_members_title : get_field('wealthtech_club_members_title'); ?></h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <p class="t2_s4"><?php echo ($block_members_subtitle = get_field('block_members_subtitle')) ? $block_members_subtitle : get_field('wealthtech_club_members_subtitle'); ?></p>
            </div>
        </div>
    </div>
    <div class="container cont2_member box_member">
        <div class="row">
            
                <?php foreach ($members as $member) : ?>
                    <div class="col-md-2 col-sm-4">
                        <img src="<?php echo $member['img']['url']; ?>" alt="<?php echo $member['img']['alt']; ?>" />
                    </div>
                <?php endforeach; ?>
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box_more_member"><a href="<?php echo get_field('wealthtech_club_members_link_view_all'); ?>" class="more_member" target="_blank"><?php echo get_field('wealthtech_club_members_name_view_all'); ?><img class="arrow_member" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a></div>
            </div>
        </div>
    </div>
</section>
            <?php endif ?>

<section class="sect_dots s3_wealthtech s3_wealthtech_m">
    <img class="cicles_grid5_wealthtech" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid5_wealthtech.svg" alt="" />
    <div class="container cont1_s3 pos_rel">
        <div class="row">
            <div class="col-md-6">
                <h2 class="t1_s4"><?php echo get_field('wealthtech_events_we_support_title'); ?></h2>
            </div>
        </div>
    </div>
    <div class="container cont2_member box_event">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <?php
                $image = get_field('wealthtech_events_we_support_logo1');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-4">
                <?php
                $image = get_field('wealthtech_events_we_support_logo2');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-4">
                <?php
                $image = get_field('wealthtech_events_we_support_logo3');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-4">
                <?php
                $image = get_field('wealthtech_events_we_support_logo4');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-4">
                <?php
                $image = get_field('wealthtech_events_we_support_logo5');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-4">
                <?php
                $image = get_field('wealthtech_events_we_support_logo6');
                if (!empty($image)) : ?>
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
                    $the_insights = new WP_Query($args);
                    // The Loop
                    if ($the_insights->have_posts()) {
                        while ($the_insights->have_posts()) {
                            $the_insights->the_post(); ?>
                            <li class="text-center">
                                <div class="box_article">
                                    <img class="img_insights" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" />
                                    <p class="t1_insights1"><a href="<?php echo get_field('our_insights_link'); ?>" target="_blank"><?php the_title(); ?></a></p>
                                    <div class="date_insights">
                                        <p class="date_insights"><?php echo get_the_date('M.j.Y'); ?></p>
                                    </div>
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