<?php
/*
Template Name: Job
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
                    <p class="text1_page text1_job">ReactJS + NodeJS Developer</p>
                    
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
                    <h2 class="">FinTech Project</h2>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4">Architecture — AWS serverless (lambda) & docker / jenkins (implementing for email message parsing)</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="t2_s4">back end frameworks — node.js, express.js
front end libraries — react.js, websockets, redux, webpack</p>
                </div>
            </div>
        </div>
        <div class="container mt100">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="title_block">Technical Skills</p>
                    <ul class="list_job">
                        <li>2+ years’ experience in ReactJS</li>
                        <li>1+ years’ experience in NodeJS</li>
                        <li>Familiarity with Agile methodologies and project management tools (knowledge of JIRA is a must)</li>
                        <li>Experience with continuous process improvement</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p class="title_block">Personal Skills</p>
                    <ul class="list_job">
                        <li>Communication skills</li>
                        <li>Problem-solving skills</li>
                        <li>Communication skills</li>
                        <li>Communication skiProblem-solving skillslls</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt100">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="title_block">Bonus Skill</p>
                    <ul class="list_job">
                        <li>Fintech domain expertise: payments, wealth management, lending, fundraising, InsurTech, blockchain, etc.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section4 s4_wealthtech s4_paytech s4_it sect_lend">
         <div class="container cont1_s4 pos_rel">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="t1_s4">We Offer</h2>
                </div>
            </div>
        </div>
        <div class="container mt30">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="list_job">
                        <li>Full-time position</li>
                        <li>Work in friendly and professional team</li>
                        <li>Comfortable office located in the center of Kharkiv</li>
                        <li>3 weeks of paid vacation</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="list_job">
                        <li>Paid benefits for self-development</li>
                        <li>Corporate library</li>
                        <li>Corporate club (for some relax during workday)</li>
                        <li>English classes</li>
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
