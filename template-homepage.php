<?php
/*
Template Name: Homepage
*/
get_header();
?>
<?php global $redux_demo; ?>
<section class="section1">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text1">
                        <?php echo get_field('title_h1'); ?>
                    </h1>
                    <p class="text2"><?php echo get_field('header_text_2'); ?></p>
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
<section class="section2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-offset-1">
                    <h2 class="t1_sect2"><?php echo get_field('home_section2_title_h2'); ?></h2>
                    <p class="t2_sect2"><?php echo get_field('home_section2_text_2'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section3">
        <div class="container cont1_s3 pos_rel">
            <table class="table_main table_main_sect3">
                <tr>
                	<td class="td_first"><?php echo get_field('title_industries'); ?></td>
                	<td class="box_s3">
                            <p class="t1_table"><?php echo get_field('industries1_title'); ?></p>
                            <p class="t2_table"><?php echo get_field('industries1_text'); ?></p>
                            <div class="box_link_s3">
                                <div class="box_hover_s3">
                                    <p><?php echo get_field('industries1_hover'); ?></p>
                                    <a href="<?php echo get_field('industries_link1'); ?>"><img class="arrow_s3" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                                </div>
                            </div>
                    </td>
                	<td class="box_s3">
                        <p class="t1_table"><?php echo get_field('industries2_title'); ?></p>
                        <p class="t2_table"><?php echo get_field('industries2_text'); ?></p>
                        <div class="box_link_s3">
                            <div class="box_hover_s3">
                                <p><?php echo get_field('industries2_hover'); ?></p>
                                <a href="<?php echo get_field('industries_link2'); ?>"><img class="arrow_s3" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                	<td style="padding-left: 0;" class="box_s3">
                        <p class="t1_table"><?php echo get_field('industries3_title'); ?></p>
                        <p class="t2_table"><?php echo get_field('industries3_text'); ?></p>
                        <div class="box_link_s3">
                            <div class="box_hover_s3">
                                <p><?php echo get_field('industries3_hover'); ?></p>
                                <a href="<?php echo get_field('industries_link3'); ?>"><img class="arrow_s3" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                            </div>
                        </div>
                    </td>
                	<td class="box_s3">
                        <p class="t1_table"><?php echo get_field('industries4_title'); ?></p>
                        <p class="t2_table"><?php echo get_field('industries4_text'); ?></p>
                        <div class="box_link_s3">
                            <div class="box_hover_s3">
                                <p><?php echo get_field('industries4_hover'); ?></p>
                                <a href="<?php echo get_field('industries_link4'); ?>"><img class="arrow_s3" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                            </div>
                        </div>
                    </td>
                	<td class="box_s3">
                        <p class="t1_table"><?php echo get_field('industries5_title'); ?></p>
                        <p class="t2_table"><?php echo get_field('industries5_text'); ?></p>
                         <div class="box_link_s3">
                            <div class="box_hover_s3">
                                <p><?php echo get_field('industries5_hover'); ?></p>
                                <a href="<?php echo get_field('industries_link5'); ?>"><img class="arrow_s3" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <section class="section4">
        <img class="figure_s4" src="<?php bloginfo('template_url'); ?>/assets/images/figure_s4.svg" alt="" />
        <div class="container cont1_s4 pos_rel">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="t1_s4"><?php echo get_field('fintech_engineering_approach_title'); ?></h2>
                </div>
                <div class="col-md-6">
                    <p class="t2_s4"><?php echo get_field('fintech_engineering_approach_under_the_heading'); ?></p>
                </div>
            </div>
        </div>
         <div class="container cont2_s4 pos_rel">
            <div class="row">
                <div class="col-md-12">
                    <div class="box_ellipse">
                        <div class="box_ellipse_center"><p><?php echo get_field('fintech_software_product_circle_center'); ?></p></div>
                        <div class="box1_ell box_ell" onmouseover="$('.box1_ell').addClass('active');$('.box1_text').addClass('hover');$('.arrow1_s4').addClass('act');" onmouseout="$('.box1_ell').removeClass('active');$('.box1_text').removeClass('hover');$('.arrow1_s4').removeClass('act');"><p class="fin_dom"><?php echo get_field('fintech_software_product_part_1_title'); ?></p></div>
                        <div class="box2_ell box_ell" onmouseover="$('.box2_ell').addClass('active');$('.box2_text').addClass('hover');$('.arrow2_s4').addClass('act');" onmouseout="$('.box2_ell').removeClass('active');$('.box2_text').removeClass('hover');$('.arrow2_s4').removeClass('act');" ><p><?php echo get_field('fintech_software_product_part_2_title'); ?></p></div>
                        <div class="box3_ell box_ell" onmouseover="$('.box3_ell').addClass('active');$('.box3_text').addClass('hover');$('.arrow3_s4').addClass('act');" onmouseout="$('.box3_ell').removeClass('active');$('.box3_text').removeClass('hover');$('.arrow3_s4').removeClass('act');"><p><?php echo get_field('fintech_software_product_part_3_title'); ?></p></div>
                        <div class="box4_ell box_ell" onmouseover="$('.box4_ell').addClass('active');$('.box4_text').addClass('hover');$('.arrow4_s4').addClass('act');" onmouseout="$('.box4_ell').removeClass('active');$('.box4_text').removeClass('hover');$('.arrow4_s4').removeClass('act');"><p><?php echo get_field('fintech_software_product_part_4_title'); ?></p></div>
                    </div>
                    <div class="box1_text box_ellipse_text"  onmouseover="$('.box1_ell').addClass('active');" onmouseout="$('.box_ell').removeClass('active');">
                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_software_product_part_1_title'); ?></p>
                        <?php echo get_field('fintech_software_product_part_1_description'); ?>
                        <a href="<?php echo get_field('fintech_software_product_part_1_link'); ?>" class=""><img class="arrow_s4 arrow1_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                    </div>
                    <div class="box2_text box_ellipse_text" onmouseover="$('.box2_ell').addClass('active');" onmouseout="$('.box2_ell').removeClass('active');">
                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_software_product_part_2_title'); ?></p>
                        <?php echo get_field('fintech_software_product_part_2_description'); ?>
                        <a href="<?php echo get_field('fintech_software_product_part_2_link'); ?>"><img class="arrow_s4 arrow2_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                    </div>
                    <div class="box3_text box_ellipse_text" onmouseover="$('.box3_ell').addClass('active');" onmouseout="$('.box3_ell').removeClass('active');">
                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_software_product_part_3_title'); ?></p>
                        <?php echo get_field('fintech_software_product_part_3_description'); ?>
                        <a href="<?php echo get_field('fintech_software_product_part_3_link'); ?>"><img class="arrow_s4 arrow3_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                    </div>
                    <div class="box4_text box_ellipse_text" onmouseover="$('.box4_ell').addClass('active');" onmouseout="$('.box4_ell').removeClass('active');">
                        <p class="disp_b_768 t_title_s4"><?php echo get_field('fintech_software_product_part_4_title'); ?></p>
                        <?php echo get_field('fintech_software_product_part_4_description'); ?>
                        <a href="<?php echo get_field('fintech_software_product_part_4_link'); ?>"><img class="arrow_s4 arrow4_s4" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container cont_more">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo get_field('fintech_software_product_link_learn_more'); ?>" class="more">Learn More <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="" /></a>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="section5" >
        <img class="figure_s5" src="<?php bloginfo('template_url'); ?>/assets/images/figure_s5.svg" alt="" />
        <div class="container cont1_s3 pos_rel">
            <table class="table_sect5">
                <tr>
                	<td class="td_s5"><?php echo get_field('fintech_communities_we_run_support_title'); ?></td>
                	<td class="box_s5">
                        <p class="t1_table"><?php echo get_field('communities1_title'); ?></p>
                        <p class="t2_table_sect5"><?php echo get_field('communities1_text'); ?></p>
                        <div class="box_link_s5">
                            <a href="<?php echo get_field('communities1_link'); ?>" target="_blank">
                            <div class="box_hover_s5">
                                <p>
                                    <?php 
                                        $image = get_field('communities1_hover_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </p>
                            </div>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                	<td style="padding-left: 0;" class="box_s5">
                        <p class="t1_table"><?php echo get_field('communities2_title'); ?></p>
                        <p class="t2_table_sect5"><?php echo get_field('communities2_text'); ?></p>
                        <div class="box_link_s5">
                            <a href="<?php echo get_field('communities2_link'); ?>" target="_blank">
                            <div class="box_hover_s5">
                                <p>
                                    <?php 
                                        $image = get_field('communities2_hover_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </p>
                            </div>
                            </a>
                        </div>
                    </td>
                	<td class="box_s5">
                        <p class="t1_table"><?php echo get_field('communities3_title'); ?></p>
                        <p class="t2_table_sect5"><?php echo get_field('communities3_text'); ?></p>
                        <div class="box_link_s5">
                            <a href="<?php echo get_field('communities3_link'); ?>" target="_blank">
                            <div class="box_hover_s5">
                                <p>
                                    <?php 
                                        $image = get_field('communities3_hover_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </p>
                            </div>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                	<td style="padding-left: 0;" class="box_s5">
                        <p class="t1_table"><?php echo get_field('communities4_title'); ?></p>
                        <p class="t2_table_sect5"><?php echo get_field('communities4_text'); ?></p>
                        <div class="box_link_s5">
                            <a href="<?php echo get_field('communities4_link'); ?>" target="_blank">
                            <div class="box_hover_s5">
                                <p>
                                    <?php 
                                        $image = get_field('communities4_hover_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </p>
                            </div>
							</a>
                        </div>
                    </td>
                	<td class="box_s5">
                        <p class="t1_table"><?php echo get_field('communities5_title'); ?></p>
                        <p class="t2_table_sect5"><?php echo get_field('communities5_text'); ?></p>
                        <div class="box_link_s5">
                            <a href="<?php echo get_field('communities5_link'); ?>" target="_blank">
                            <div class="box_hover_s5">
                                <p>
                                    <?php 
                                        $image = get_field('communities5_hover_logo');
                                        if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </p>
                            </div>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <section class="section6">
        <img class="figure_s6" src="<?php bloginfo('template_url'); ?>/assets/images/figure_s6.svg" alt="" />
        <div class="container cont1_s3 pos_rel">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="t1_s4"><?php echo get_field('fintech_events_we_partner_with_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container cont2_s6 pos_rel">
            <div class="row box_partner">
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
            </div>
            <div class="row box_partner">
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
    <section class="section7 ">
        <div class="container cont1_s3 pos_rel">
            <table class="table_main table_sect7">
                <tr>
                	<td class="td_s5 td_s7"><?php echo get_field('in_news_title'); ?></td>
                	<td>
                        <a href="<?php echo get_field('in_news_link_1'); ?>" target="_blank">
							<?php 
                             $image = get_field('in_news_logo1');
                             if( !empty($image) ): ?>
                             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
						</a>
                        <p class="t2_table_sect7"><?php echo get_field('in_news_text1'); ?></p>
                    </td>
                    <td>
                        <a href="<?php echo get_field('in_news_link_2'); ?>" target="_blank">
                        <?php 
                             $image = get_field('in_news_logo2');
                             if( !empty($image) ): ?>
                             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
						</a>
                        <p class="t2_table_sect7"><?php echo get_field('in_news_text2'); ?></p>
                    </td>
                </tr>
                <tr>
                	<td>
                        <a href="<?php echo get_field('in_news_link_3'); ?>" target="_blank">
                        <?php 
                             $image = get_field('in_news_logo3');
                             if( !empty($image) ): ?>
                             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
						</a>
                        <p class="t2_table_sect7"><?php echo get_field('in_news_text3'); ?></p>
                    </td>
                	<td>
                        <a href="<?php echo get_field('in_news_link_4'); ?>" target="_blank">
                        <?php 
                             $image = get_field('in_news_logo4');
                             if( !empty($image) ): ?>
                             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
						</a>
                        <p class="t2_table_sect7"><?php echo get_field('in_news_text4'); ?></p>
                    </td>
                    <td>
                        <a href="<?php echo get_field('in_news_link_5'); ?>" target="_blank">
                        <?php 
                             $image = get_field('in_news_logo5');
                             if( !empty($image) ): ?>
                             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
						</a>
                        <p class="t2_table_sect7"><?php echo get_field('in_news_text5'); ?></p>
                    </td>
                </tr>
            </table>
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
		                                <a href="<?php echo get_field('our_insights_link'); ?>" target="_blank"><p class="t1_insights1 block"><?php the_title(); ?></p></a>
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
<script>
(function($) {
    var truncate = function(el) {
        var text = el.text(),
            height = el.height(),
            clone = el.clone();

	  clone.css({
            position: 'absolute',
            visibility: 'hidden',
            height: 'auto'
        });
        el.after(clone);

        var l = text.length - 1;
        for (; l >= 0 && clone.height() > height; --l) {
            clone.text(text.substring(0, l) + '...');
        }

        el.text(clone.text());
        clone.remove();
    };

    $.fn.truncateText = function() {
        return this.each(function () {
            truncate($(this));
        });
    };
}(jQuery));
	$(function() {
    $('.block').truncateText();
});


</script>