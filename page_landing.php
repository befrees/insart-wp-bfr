<?php
/**
* Template name: Landing Story page
*/
$soc = get_field('social_links');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header('head') ?>
    <?php  ?>
</head>

<body <?php body_class(); ?>>
    <header id="header-land" class="header-land">
        <a href="<?= home_url() ?>" class="logo-land"><img class="logo" src="<?= get_template_directory_uri() ?>/img/logo-sign.svg" alt=""></a>
        <div class="container-fluid header-land-inner">
            <div class="row">
                <div class="img-lh alignright">
                    <img src="<?= get_template_directory_uri() ?>/img/bg-lh.svg" alt="">
                </div>
                <div class="header-land-text">
                    <h1 class="title-land">
                        <?php the_title() ?>
                    </h1>
                    <div class="scroll-box-header">
                        <span class="scroll-bot">The Story of a Startup<span class="line"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="middle">
        <div class="piples-box">
            <div class="container">
                <?php if ($pips = get_field('people')) : foreach ($pips as $i => $item) : ?>
                <?php  ?>
                <div class="row row-pip row-pip-<?= $i + 1 ?> row-pip-odd flexbox">
                    <div class="col-md-6 col-pip-text order-<?= $i % 2 ? '2' : '1' ?>">
                        <div class="inner-cbox">
                            <h2 class="title-piple mark-c"><?= $item['name'] ?></h2>
                            <div class="contents-piple">
                                <div class="c-pip c-pip-1">
                                    <p><?= $item['text_1'] ?></p>
                                </div>
                                <div class="col-img-mob visible-xs"><img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>" class="image-responsive"></div>
                                <div class="c-pip c-pip-2 text-mark-tr">
                                    <!-- <svg width="11" height="18" class="ic ic-mark-tr">
                                        <use xlink:href="#ic-mark-tr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg> -->
                                    <p><?= $item['text_2'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-pip-img hidden-xs order-<?= $i % 2 ? '1' : '2' ?>"><img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>"></div>
                </div> <!-- .row-pip -->
                <?php endforeach;
        endif; ?>

            </div>
        </div>
        <?php if ($block_2 = get_field('block_2')) : ?>
        <div class="block-l-2">
            <div class="container-fluid">
                <div class="row flexbox">
                    <div class="col-md-6">
                        <div class="col-inner col-inner-left">
                            <div class="text-mark-1">
                                <p><?= $block_2['text_1'] ?></p>
                            </div>
                            <div class="h2 title_72"><?= $block_2['text_bold'] ?></div>
                        </div>

                    </div>
                    <div class="col-img-right"><img src="<?= $block_2['image_1']['url'] ?>" alt="<?= $block_2['image_1']['alt'] ?>"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="text-mark-1">
                            <p><?= $block_2['text_2'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-inner col-inner-left">
                            <div class="text-mark-1">
                                <p><?= $block_2['text_3'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-img-right col-md-6"><img src="<?= $block_2['image_2']['url'] ?>" alt="<?= $block_2['image_2']['alt'] ?>"></div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($block_link = get_field('block_link_insart')) : ?>
        <div class="box-circle">
            <div class="container">
                <div class="row flexbox items-center">
                    <div class="col-md-6 order-2">
                        <div class="col-inner">
                            <div class="text-mark-1">
                                <p><?php echo $block_link['text'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-1">
                        <div class="circle-block roboto" data-tooltip="Read more">
                            <a href="<?php echo $block_link['link'] ?>" target="_blank">
                                <img src="<?php echo $block_link['image']['url'] ?>" alt="">
                                <!-- <span class="center">FinTech Engineering Approach</span>
                                <span class="segment segm-1"><span class="td">Financial domain knowledge</span></span>
                                <span class="segment segm-2"><span class="td">Team structuring</span></span>
                                <span class="segment segm-3"><span class="td">Processes and workflows</span></span>
                                <span class="segment segm-4"><span class="td">Technologies and architecture</span></span> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .box-circle -->
        <?php endif ?>
        <?php if ($block_3 = get_field('block_3')) : ?>
        <div class="block-l-3">
            <div class="container-fluid">
                <?php foreach ($block_3 as $i => $item) : ?>
                <div class="row flexbox items-center align-center">
                    <div class="col-md-6 order-<?= $i % 2 ? '2' : '1' ?>">
                        <div class="col-inner col-inner-left">
                            <div class="text-mark-1">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-img order-<?= $i % 2 ? '1' : '2' ?> col-img-right col-md-6"><img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>">
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div> <!-- .block-l-3 -->
        <?php endif ?>
        <?php if ($block_4 = get_field('block_4')) : ?>

        <div class="block-l-4">
            <div class="center-box">
                <h2 class="title-l mark-c"><?= $block_4['title'] ?></h2>
                <div class="text-1">
                    <p><?= $block_4['text_1'] ?> </p>
                </div>
            </div>
            <div class="image-l4"><img src="<?= $block_4['image']['url'] ?>" alt="<?= $block_4['image']['alt'] ?>"></div>
            <div class="center-box">
                <div class="text-1 text-mark-1">
                    <p><?= $block_4['text_2'] ?> </p>
                </div>
            </div>
        </div> <!-- .block-l-4 -->
        <?php endif ?>
        <div class="block-results">
            <?php
            $block_results = get_field('block_results');
            // dd($block_results);
            foreach ($block_results['rows'] as $i => $item) : ?>
            <div class="container res-item">
                <div class="row">
                    <h3 class="title-res clearfix">
                        <span class="num mark-c"><?= $i + 1 ?></span>
                        <span class="title-text"><?= $item['title'] ?></span>
                    </h3>
                    <div class="col-md-6 col-before">
                        <div class="res-text res-text-1"><?= $item['text_before'] ?></div>
                    </div>
                    <div class="col-md-6 col-after">
                        <div class="res-text res-text-2"><?= $item['text_after'] ?></div>
                    </div>
                </div>
            </div>
            <?php if ($i == 2) : ?>
            <div class="image-l4"><img src="<?= $block_results['image']['url'] ?>" alt="<?= $block_results['image']['alt'] ?>"></div>
            <?php endif ?>
            <?php endforeach; ?>
            <!-- <div class="image-l4"><img src="<?php  ?>/img/res-l.svg" alt=""></div> -->
        </div> <!-- .block-results -->
        <?php if ($block_5 = get_field('block_5')) : ?>
        <div class="block-l-5">
            <div class="container-fluid">
                <div class="row flexbox items-center">
                    <div class="col-md-6 order-1">
                        <div class="col-inner col-inner-left">
                            <div class="text-mark-1">
                                <p><?= $block_5['text_1'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-img order-2 col-img-right col-md-6"><img src="<?= $block_5['image']['url'] ?>" alt="<?= $block_5['image']['alt'] ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="block-bot-res">
            <div class="bbr-top">
                <div class="center-box">
                    <div class="text-1 text-mark-2 mark-c">
                        <p><?= $block_5['text_2'] ?> </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row flexbox bbr-items flex-wrap align-between">
                    <?php if ($block_5['rows']) : foreach ($block_5['rows'] as $i => $item) : ?>

                    <div class="col-md-6 col-bbr col-bbr-<?= $i + 1 ?>">
                        <div class="img-bbr"><img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>"></div>
                        <div class="text-bbr"><?= $item['text'] ?></div>
                    </div>
                    <?php endforeach;
            endif ?>
                </div>
            </div>
        </div>
        <?php endif ?>
        <div class="contact-box">
            <h2 class="text-center u80 mark-c title-lform">contact vasyl</h2>
            <div class="container box-960">
                <div class="form-inline form-box">

                    <?php /*  
                    $form = get_field('form');
                    echo do_shortcode('[contact-form-7 id="' . $form->ID . '" ]'); */ ?>
                    <?php echo do_shortcode('[yikes-mailchimp form="1"]') ?>
                </div>
            </div>
        </div> <!-- .contact-box -->
    </div> <!-- .middle -->
    <footer id="land-footer">
        <div class="soc-footer-land box-960">
            <?php if ($soc['twitter']) : ?>
            <a href="<?php echo $soc['twitter'] ?>" target="_blank">
                <svg class="ic ic-twitter-2" height="50" width="50">
                    <use xlink:href="#ic-twitter-2" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
            </a>
            <?php endif; ?>
            <?php if ($soc['linked_in']) : ?>
            <a href="<?php echo $soc['linked_in'] ?>" target="_blank">
                <svg class="ic ic-in-2" height="50" width="50">
                    <use xlink:href="#ic-in-2" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
            </a>
            <?php endif; ?>
            <?php if ($soc['fb']) : ?>
            <a href="<?php echo $soc['fb'] ?>" target="_blank">
                <svg class="ic ic-fb-2" height="50" width="50">
                    <use xlink:href="#ic-fb-2" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
            </a>
            <?php endif; ?>
        </div>
    </footer>
    <div id="tooltip"></div>
    <?php wp_footer(); ?>
    <script>
        jQuery(function($) {
            // $('.logo-land').on('click', function(e) {
            //     e.preventDefault();
            //     $('html, body').animate({
            //         scrollTop: 0
            //     }, 600);
            // });
            $("[data-tooltip]").mousemove(function(eventObject) {
                $data_tooltip = $(this).attr("data-tooltip");
                $("#tooltip").html($data_tooltip)
                    .css({
                        "top": eventObject.pageY - 40,
                        "left": eventObject.pageX - 95
                    })
                    .show();
            }).mouseout(function() {
                $("#tooltip").hide()
                    .html("")
                    .css({
                        "top": 0,
                        "left": 0
                    });
            });
        });
    </script>
    <?php include get_template_directory() . "/img/icons.svg"; ?>
    </body>
</html> 