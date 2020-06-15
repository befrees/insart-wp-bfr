    <?php get_header('api') ?>
    <?php
    $page_api = bfr_get_post_by_tpl('catalog-tpl.php');
    $list1 = get_field('integrations_list');
    // dd($list1);
    $list_for_qwery = new WP_Query([
        'post_type' => 'company',
        'posts_per_page' => -1,
        'meta_query' => [
            'relation' => 'AND',
            [
                'key' => 'integrations_list',
                'value' => '"' . $post->ID . '"',
                'compare' => 'LIKE'
            ],
        ]
    ]);
    if ($list_for_qwery->posts && $list1) {
        foreach ($list_for_qwery->posts as $p) {
            if (!in_array($p->ID, $list1) && $p->ID != $post->ID)
                $list1[] = $p->ID;
        }
    }
    // array_filter($list1, function($v){
    //     global $post;
    //     // dd($post->ID == $v);
    //     // dd($v);
    //     return $v !== $post->ID;
    // });
    // dd($list1);
    if ($list1) {
        foreach ($list1 as $i => $l) {
            if ($list1[$i] == $post->ID) {
                unset($list1[$i]);
            }
        }
    }
    $args = [
        'post_type' => 'company',
        'posts_per_page' => -1,
        'post__in' => $list1,
        'post__not_in' => [$post->ID],
        'ignore_sticky_posts' => true,
        'orderby' => ['title' =>'ASC'],
    ];
    // dd($args);
    $rel_posts = new WP_Query($args);
    // dd($rel_posts->posta);
    ?>
    <div class="wrapper single-company">

        <div class="middle nopadding-top" id="middle">
            <div class="container-big">
                <div class="breadcrumb">
                    <a href="<?= get_permalink($page_api) ?>"><?= $page_api->post_title ?></a> /
                    <?php
                    $thisCat = get_term(get_primary_taxonomy_id($post->ID, $taxonomy = 'type'));
                    if ($thisCat->parent != 0)
                        echo get_term_parents_list($thisCat->parent, 'type', ['separator' => ' / ']);
                    ?>
                    <a href="<?= get_term_link($thisCat) ?>"><?= $thisCat->name ?></a>
                </div>
                <div class="sc-grid">
                    <div class=" col-sidebar">
                        <?php get_template_part('parts/_api-sidebar') ?>
                    </div> <!-- .col-sidebar -->
                    <div class="sc-content">

                        <div class="entry-company">
                            <h2 class="h2 sc__title">
                                <?= get_the_title(); ?>
                                <?php // echo get_field('title_custom_text') 
                                ?></h2>
                            <?php //echo get_field('body_custom_text') 
                            ?>
                            <div class="sc-mob-logo">
                                <?php if (has_post_thumbnail()) : ?>
                                    <figure class="img-company">
                                        <?php the_post_thumbnail(null, 'full', array('class' => 'alignleft')); ?>
                                    </figure>
                                <?php endif; ?>

                            </div>
                            <ul class="nav nav-tabs" id="tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li>
                                <li role="presentation"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">Products/Services</a></li>
                                <li role="presentation"><a href="#integrations" aria-controls="integrations" role="tab" data-toggle="tab">Integrations</a></li>
                                <li role="presentation"><a href="#partnerships" aria-controls="partnerships" role="tab" data-toggle="tab">Partnership</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="about">
                                    <div class="sc-tab__inner">
                                        <div class="sc-tab__left">
                                            <?php the_content() ?>
                                            <div class="sc-info__inner">
                                                <?php if ($website_link = get_field('website_link')) : ?>
                                                    <div class="sc-info__item sc-info__item-site">
                                                        <h4>Website</h4>
                                                        <p><a href="<?= $website_link ?>" target="_blank"><?= $website_link ?></a></p>
                                                    </div>
                                                <?php endif ?>
                                                <div class="sc-info__item">
                                                    <h4>Contacts</h4>
                                                    <?php if ($mail = get_field('email')) : ?>
                                                        <p><a href="mailto:<?= $mail ?>" target="_blank">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="18" cy="18" r="17.5" stroke="black" />
                                                                    <path d="M10 14.1787V23H26V14.1787L18 19.1796L10 14.1787Z" fill="black" />
                                                                    <path d="M26 13H10L18 18.0009L26 13Z" fill="black" />
                                                                </svg><span><?= $mail ?></span></a></p>
                                                    <?php endif ?>
                                                    <?php if ($facebook = get_field('facebook')) : ?>
                                                        <p><a href="<?= $facebook ?>" target="_blank">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.9952 11.8734C14.9952 12.3774 14.9952 14.627 14.9952 14.627H13V17.9941H14.9952V28H19.0937V17.9944H21.844C21.844 17.9944 22.1016 16.3798 22.2264 14.6146C21.8685 14.6146 19.1092 14.6146 19.1092 14.6146C19.1092 14.6146 19.1092 12.6557 19.1092 12.3123C19.1092 11.9682 19.5561 11.5054 19.9977 11.5054C20.4386 11.5054 21.369 11.5054 22.2308 11.5054C22.2308 11.0469 22.2308 9.46292 22.2308 8C21.0803 8 19.7715 8 19.1946 8C14.8939 7.99977 14.9952 11.3702 14.9952 11.8734Z" fill="#222222" />
                                                                    <circle cx="18" cy="18" r="17.5" stroke="black" />
                                                                </svg>
                                                                <span><?= $facebook ?></span></a></p>
                                                    <?php endif ?>
                                                    <?php if ($linkedin = get_field('linkedin')) : ?>
                                                        <p><a href="<?= $linkedin ?>" target="_blank">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M27.5625 20.0358V27H23.584V20.5022C23.584 18.8699 23.0085 17.7559 21.5684 17.7559C20.4691 17.7559 19.8148 18.5067 19.527 19.2329C19.4221 19.4925 19.395 19.8538 19.395 20.2173V27H15.4152C15.4152 27 15.4688 15.9949 15.4152 14.8547H19.3947V16.5762C19.3866 16.5891 19.3761 16.603 19.3685 16.6155H19.3947V16.5762C19.9234 15.7498 20.8676 14.5693 22.9811 14.5693C25.5996 14.5693 27.5625 16.3052 27.5625 20.0358ZM11.2521 9C9.89054 9 9 9.90626 9 11.098C9 12.2638 9.86478 13.1976 11.1992 13.1976H11.2258C12.6137 13.1976 13.4768 12.264 13.4768 11.098C13.4507 9.90626 12.6137 9 11.2521 9ZM9.23637 27H13.2147V14.8547H9.23637V27Z" fill="#222222" />
                                                                    <circle cx="18" cy="18" r="17.5" stroke="black" />
                                                                </svg>
                                                                <span><?= $linkedin ?></span></a></p>
                                                    <?php endif ?>
                                                    <?php if ($twitter = get_field('twitter')) : ?>
                                                        <p><a href="<?= $twitter ?>" target="_blank">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="18" cy="18" r="17.5" stroke="black" />
                                                                    <path d="M29.1653 11.1297C28.3285 11.4911 27.4305 11.7362 26.4871 11.8456C27.4504 11.2834 28.1878 10.3916 28.5373 9.33232C27.6337 9.85297 26.6363 10.231 25.5735 10.436C24.7225 9.55113 23.512 9 22.1693 9C19.5934 9 17.5048 11.0355 17.5048 13.5447C17.5048 13.9005 17.546 14.2481 17.6256 14.5804C13.7497 14.3907 10.3129 12.5809 8.01262 9.83081C7.61053 10.501 7.38178 11.282 7.38178 12.1156C7.38178 13.6928 8.20585 15.0845 9.45615 15.8987C8.69175 15.8738 7.97283 15.6688 7.34344 15.3281V15.3849C7.34344 17.5866 8.95178 19.4241 11.0844 19.8424C10.6936 19.9448 10.2816 20.0016 9.85538 20.0016C9.55419 20.0016 9.26292 19.9725 8.97734 19.9171C9.57121 21.7242 11.2932 23.0383 13.3335 23.0743C11.7379 24.2929 9.72609 25.0171 7.54094 25.0171C7.16444 25.0171 6.79359 24.9949 6.42847 24.9548C8.49288 26.2467 10.9437 27 13.5779 27C22.158 27 26.848 20.0736 26.848 14.0667L26.8324 13.4782C27.7488 12.8412 28.5416 12.0408 29.1653 11.1297Z" fill="#222222" />
                                                                </svg>

                                                                <span><?= $twitter ?></span></a></p>
                                                    <?php endif ?>

                                                </div>
                                            </div>
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="sc-info">
                                                <figure class="img-company">
                                                    <?php the_post_thumbnail(null, 'full', array('class' => 'alignleft')); ?>
                                                </figure>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="products">
                                    <div class="sc-tab__inner">
                                        <div class="sc-tab__left">
                                            <div class="sc-services"><?php echo get_field('key_offerings') ?></div>
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="sc-info">
                                                <figure class="img-company">
                                                    <?php the_post_thumbnail(null, 'full', array('class' => 'alignleft')); ?>
                                                </figure>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="integrations">
                                    <div class="rel-posts-description">
                                        <?php the_field('integrations_text') ?>
                                    </div>
                                    <div id="js-pager">
                                        <div class="rel-posts row-catalog-list">
                                            <?php foreach ($rel_posts->posts as $k => $item) : setup_postdata($item); ?>
                                                <div class="item-card item-card-company">
                                                    <div class="item-card-company-inner" data-id="<?php $item->ID ?>">
                                                        <a href="<?php the_permalink($item) ?>" class="item-card-company-top">
                                                            <div class="img">
                                                                <?php echo get_the_post_thumbnail($item) ?>
                                                            </div>
                                                            <div class="h4"><?php echo $item->post_title; ?></div>
                                                        </a>
                                                        <div class="entry-company">
                                                            <?php //echo bfr_excerpt(['maxchar' => 150, 'autop' => false, 'more_text' => '']) ?>
                                                            <?php echo get_the_excerpt($item) 
                                                            ?></div>
                                                        <?php /* ?><div class="link-row"><a href="<?php the_permalink( ) ?>">> More Details</a></div>
        <?php */ ?>
                                                        <?php if ($tags = bfr_order_tags(get_the_terms($item->ID, 'type'), $item->ID)) : //dd($tags); 
                                                        ?>
                                                            <div class="tags-card text-center">
                                                            <div class="tags-card__inner">
                                                                <?php foreach ($tags as $k => $tag) : ?>
                                                                    <a href="#<?= $tag->slug ?>" data-id="<?= $tag->term_id ?>">#<?= $tag->name ?></a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                            </div>
                                                        <?php endif ?>

                                                    </div>
                                                </div>
                                            <?php endforeach;
                                            wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="partnerships">
                                    <div class="sc-tab__inner">
                                        <div class="sc-tab__left sc-tab__tags">
                                            <?php //if($tags = get_the_terms(get_the_ID(), 'api-tags')): //dd($tags); 
                                            ?>
                                            <?php if ($tags = get_field('tags')) : ?>
                                                <div class="sc-tags">
                                                    <p>Current Tag List</p>
                                                    <ol class="sc-tag-ol">
                                                        <?php foreach ($tags as $k => $tag) : ?>
                                                            <li>
                                                                <?php /*?>
                                                            <a href="<?= get_permalink($page_api) ?>?api-tags[]=<?= $tag->term_id ?><?php // echo $tag->slug 
                                                                                                                              ?>" data-id="<?= $tag->term_id ?>">#<?= $tag->name ?></a>                                                        
                                                            <?php */ ?>
                                                                <a href="<?= get_term_link($tag, 'type') ?>">#<span><?= $tag->name ?></span></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ol>
                                                </div>
                                            <?php endif ?>
                                            <?php the_field('tags_text') ?>
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="sc-info">
                                                <figure class="img-company">
                                                    <?php the_post_thumbnail(null, 'full', array('class' => 'alignleft')); ?>
                                                </figure>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                        </div>
                        <?php get_template_part('template-parts/api-form'); ?>
                    </div>

                </div><!-- .sc-grid -->
            </div>

        </div> <!-- #middle -->
    </div>
    
    <?php get_footer('api'); ?>