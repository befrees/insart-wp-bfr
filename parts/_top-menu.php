<?php global $redux_demo;
// global $pageCatalog; ?>
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
                        <div class="header-link-catalog">
                            <?php wp_nav_menu([
                                'menu' => 'Marketplace',
                                'container' => false,
                                // 'items_wrap' => '%3$s'
                            ]) ?>
                            <?php /* ?><a href="<?= get_permalink(PAGE_CATALOG) ?>">Marketplace</a> <?php */ ?>
                        </div>
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