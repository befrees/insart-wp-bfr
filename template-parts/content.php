<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package insart-wp
 */

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
                    <p class="text1_page text1_job"><?php the_title(); ?></p>
                    
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
    <section class="sect_under">
        <img class="cicles_grid1_job" src="<?php bloginfo('template_url'); ?>/assets/images/cicles_grid1_job.svg" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h2 class=""><?php the_field('project'); ?></h2>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4"><?php the_field('about1_project'); ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4"><?php the_field('about2_project'); ?></p>
                </div>
            </div>
        </div>
        <div class="container mt100">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="title_block"><?php the_field('skills1'); ?></p>
                    <ul class="list_job">
						<?php 
							if($li_full_skills1= get_field('li_full_skills1')){
							echo strip_tags($li_full_skills1, '<li>');
						} /*
							$li1_skills1= get_field('li1_skills1');
							if( !empty($li1_skills1) ) {
								echo "<li>$li1_skills1</li>";
							}
						?>
						<?php 
							$li2_skills1= get_field('li2_skills1');
							if( !empty($li2_skills1) ) {
								echo "<li>$li2_skills1</li>";
							}
						?>
						<?php 
							$li3_skills1= get_field('li3_skills1');
							if( !empty($li3_skills1) ) {
								echo "<li>$li3_skills1</li>";
							}
						?>
						<?php 
							$li4_skills1= get_field('li4_skills1');
							if( !empty($li4_skills1) ) {
								echo "<li>$li4_skills1</li>";
							}
						?>
						<?php 
							$li5_skills1= get_field('li5_skills1');
							if( !empty($li5_skills1) ) {
								echo "<li>$li5_skills1</li>";
							} */
						?>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p class="title_block"><?php the_field('skills2'); ?></p>
                    <ul class="list_job">
                        <?php 
							if($li_full_skills2= get_field('li_full_skills2')){
							echo strip_tags($li_full_skills2, '<li>');
						} /*
							$li1_skills2= get_field('li1_skills2');
							if( !empty($li1_skills2) ) {
								echo "<li>$li1_skills2</li>";
							}
						?>
						<?php 
							$li2_skills2= get_field('li2_skills2');
							if( !empty($li2_skills2) ) {
								echo "<li>$li2_skills2</li>";
							}
						?>
						<?php 
							$li3_skills2= get_field('li3_skills2');
							if( !empty($li3_skills2) ) {
								echo "<li>$li3_skills2</li>";
							}
						?>
						<?php 
							$li4_skills2= get_field('li4_skills2');
							if( !empty($li4_skills2) ) {
								echo "<li>$li4_skills2</li>";
							}
						?>
						<?php 
							$li5_skills2= get_field('li5_skills2');
							if( !empty($li5_skills2) ) {
								echo "<li>$li5_skills2</li>";
							} */
						?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt100">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="title_block"><?php the_field('skills3'); ?></p>
                    <ul class="list_job">
                        <?php 
							if($li_full_skills3= get_field('li_full_skills3')){
							echo strip_tags($li_full_skills3, '<li>');
						} /*
							$li1_skills3= get_field('li1_skills3');
							if( !empty($li1_skills3) ) {
								echo "<li>$li1_skills3</li>";
							}
						?>
						<?php 
							$li2_skills3= get_field('li2_skills3');
							if( !empty($li2_skills3) ) {
								echo "<li>$li2_skills3</li>";
							}
						?>
						<?php 
							$li3_skills3= get_field('li3_skills3');
							if( !empty($li3_skills3) ) {
								echo "<li>$li3_skills3</li>";
							}
						?>
						<?php 
							$li4_skills3= get_field('li4_skills3');
							if( !empty($li4_skills3) ) {
								echo "<li>$li4_skills3</li>";
							}
						?>
						<?php 
							$li5_skills3= get_field('li5_skills3');
							if( !empty($li5_skills3) ) {
								echo "<li>$li5_skills3</li>";
							} */
						?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section4 s4_wealthtech s4_paytech s4_it sect_lend">
         <div class="container cont1_s4 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="t1_s4"><?php the_field('we_offer'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container mt30">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="list_job">
                        <?php 
							if($li_full_offer= get_field('li_full_offer')){
							echo strip_tags($li_full_offer, '<li>');
						} /*
							$li1_offer1= get_field('li1_offer1');
							if( !empty($li1_offer1) ) {
								echo "<li>$li1_offer1</li>";
							}
						?>
						<?php 
							$li2_offer1= get_field('li2_offer1');
							if( !empty($li2_offer1) ) {
								echo "<li>$li2_offer1</li>";
							}
						?>
						<?php 
							$li3_offer1= get_field('li3_offer1');
							if( !empty($li3_offer1) ) {
								echo "<li>$li3_offer1</li>";
							}
						?>
						<?php 
							$li4_offer1= get_field('li4_offer1');
							if( !empty($li4_offer1) ) {
								echo "<li>$li4_offer1</li>";
							}
						?>
						<?php 
							$li5_offer1= get_field('li5_offer1');
							if( !empty($li5_offer1) ) {
								echo "<li>$li5_offer1</li>";
							} */
						?>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="list_job">
                        <?php 
							if($li_full_offer2= get_field('li_full_offer2')){
							echo strip_tags($li_full_offer2, '<li>');
						} /*
							$li1_offer2= get_field('li1_offer2');
							if( !empty($li1_offer2) ) {
								echo "<li>$li1_offer2</li>";
							}
						?>
						<?php 
							$li2_offer2= get_field('li2_offer2');
							if( !empty($li2_offer2) ) {
								echo "<li>$li2_offer2</li>";
							}
						?>
						<?php 
							$li3_offer2= get_field('li3_offer2');
							if( !empty($li3_offer2) ) {
								echo "<li>$li3_offer2</li>";
							}
						?>
						<?php 
							$li4_offer2= get_field('li4_offer2');
							if( !empty($li4_offer2) ) {
								echo "<li>$li4_offer2</li>";
							}
						?>
						<?php 
							$li5_offer2= get_field('li5_offer2');
							if( !empty($li5_offer2) ) {
								echo "<li>$li5_offer2</li>";
							} */
						?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section4 s4_wealthtech s4_job">
         <div class="container cont1_s4 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="t1_s4">Ready to Apply?</h2>
                </div>
            </div>
        </div>
        <div class="container mt100">
            <?php echo do_shortcode("[contact-form-7 id='269' title='form job']"); ?>
        </div>
        
    </section>
<?php get_footer(); ?>
<script>
    $(document).ready(function() {

        $('#file').change(function(){
            var value = $("#file").val();
            $('.js-value').text(value);
        });
        
      $('#file2').change(function(){
            var value = $("#file2").val();
            $('.js-value2').text(value);
        });
    });
</script>
