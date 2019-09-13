<?php
/*
*Template Name: Static custom landing
*/
?>
<?php
$fs = get_fields($post);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/static/css/static-tpl.css">

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/static/css/<?= $fs['template_type'] ?>.css">
    <?php
    $css_body = [];
    $custom_css = '';
    if ($fs['font_body']) {
        $css_body[] = 'font-family:' . $fs['font_body'] . ';';
    }
    if ($fs['font_body_color']) {
        $css_body[] = 'color:' . $fs['font_body_color'] . ';';
    }
    if ($fs['background']['type'] == 'color') {
        $css_body[] = 'background:' . $fs['background']['color'] . ';';
        $custom_css .= "
    .popup-mail popup {
    background: " . $fs['background']['color'] . ";
    }";
    }
    if ($fs['background']['type'] == 'image') {
        $css_body[] = 'background: url(' . $fs['background']['image_pc']['url'] . ') no-repeat center 0;';
    }
    $css_body = implode("\n", $css_body);
    $css_title = [];
    if ($fs['font_title']) {
        $css_title[] = 'font-family: ' . $fs['font_title'] . ';';
    }
    if ($fs['font_title_color']) {
        $css_title[] = 'color: ' . $fs['font_title_color'] . ';';
    }
    $css_title = implode("\n", $css_title);
    if ($fs['font_title'] && ($fs['template_type'] == 'tpl-1' || $fs['template_type'] == 'tpl-4')) {
        $custom_css .= "
    a.link_download {
        /*color: " . $fs['color_decoration'] . ";*/
        font-family: " . $fs['font_title'] . ";
    }";
    }
    if ($fs['color_help'] && $fs['template_type'] == 'tpl-1') {
        $custom_css .= "
    .form1 {
        background: " . $fs['color_help'] . ";
    }";
    }
    if ($fs['color_help']) {
        $custom_css .= "
    a.link_download:hover {
        color: " . $fs['color_help'] . ";
    }";
    }
    if ($fs['color_decoration']) {
        $custom_css .= "
    a.link_download {
        /*color: " . $fs['color_decoration'] . ";*/
    }
    .link_download svg {
        fill: " . $fs['color_decoration'] . ";
    }
    .content_with_lists li:before,
    .tpl-2 .form1 .wpcf7-submit {
        background: " . $fs['color_decoration'] . ";
    }
    .tpl-1 .form1 label,
    .tpl-1 .form1 .wpcf7-submit {
        color: " . $fs['color_decoration'] . ";
    }";
    }
    if ($fs['template_type'] == 'tpl-4') {
        $custom_css .= "
    a.link_download, .link_download, .wpcf7-submit {";
        if ($fs['font_title_color'])
            $custom_css .= "color: " . $fs['font_title_color'] . ";";
        if ($fs['color_decoration'])
            $custom_css .= "background: " . $fs['color_decoration'] . ";";
        if ($fs['font_title'])
            $custom_css .= "font-family: " . $fs['font_title'] . ";";
        $custom_css .= "}";

        if ($fs['font_title_color']) {
            $custom_css .= "
        a.link_download:hover {
            color: " . $fs['font_title_color'] . ";
        }";
        }

        if ($fs['color_help']) {
            $custom_css .= "
    .text2_s2, .cfc-contact {
        background: " . $fs['color_help'] . ";
    }";
        }
        if ($fs['color_decoration']) {
            $custom_css .= "
    .cfc-list ul li:before {
        color: " . $fs['color_decoration'] . ";
    }";
        }
        if ($fs['font_title_color']) {
            $custom_css .= ".cfc-contact{
        color: " . $fs['font_title_color'] . ";
        }
        #form, .section2, .text2_s2, .cfc-title, .cfc-contact {
            border-color: " . $fs['font_title_color'] . ";
        }
        #form:before,
        #form:after {background: " . $fs['font_title_color'] . ";}
        .cfc-list ul li:after {-webkit-text-stroke-color: " . $fs['font_title_color'] . ";}
        ";
        }
    }
    if ($fs['copyright_bg']) {
        $custom_css .= "footer {
        background: {$fs['copyright_bg']};
    };";
    }
    if ($fs['popup_background_color']) {
        $custom_css .= ".popup-mail {
        background: {$fs['popup_background_color']};
    };";
    }
    if ($fs['popup_background_image']) {
        $custom_css .= ".popup-mail {
        background: url({$fs['popup_background_image']['url']}) no-repear center 0;
        
    };";
    }
    ?>
    <?= $fs['font_inc'] ?>
    <style>

        body {
        <?= $css_body ?>
        }

        @media screen and (max-width: 768px) {
        <?php if($fs['background']['type'] == 'image'): ?>
            body {
                background: url('<?= $fs['background']['image_mobile']['url'] ?>') no-repeat center 0;
            }

        <?php endif; ?>
        }

        h1, .h1, h2, .h2, h3, .h3 {
        <?= $css_title ?>
        }

        <?= $custom_css; /**/ ?>
    </style>
    <script>
        var window_tpl = 'custom';
    </script>
</head>
<body <?php body_class($fs['template_type']) ?>>
<section class="section1">
    <div class="container header-box">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-top-logo">
                <a href="<?= home_url() ?>"><img class="logotip" src="<?php echo $fs['logo']['url'] ?>" alt=""/></a>
            </div>
            <?php if ($fs['template_type'] == 'tpl-3' || $fs['template_type'] == 'tpl-4'): ?>
                <div class="col-top-email col-email-<?= $fs['template_type'] ?>">
                    <?php echo $fs['email'] ?>
                </div>
            <?php endif ?>
            <?php if ($fs['template_type'] == 'tpl-2' && $fs['social']): ?>
                <div class="col-sm-6 col-top-social col-soc-<?= $fs['template_type'] ?>">
                    <div class="box_social">
                        <?php foreach ($fs['social'] as $soc): ?>
                            <a href="<?= $soc['link'] ?>" target="_blank"><img src="<?= $soc['image']['url'] ?>"></a>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="container flexbox flex-column flex-wrap container-top">
        <div class="row flexbox items-center_ flex-wrap row-box-top">
            <div class="col-md-5 col-sm-6  col-md-offset-1 col-header-text">
                <h2 class="text1"><?php echo $fs['header_title'] ?></h2>
                <?php if ($fs['header_text'] && $fs['template_type'] != 'tpl-3'): ?>
                    <div class="text2"><?php echo $fs['header_text'] ?></div>
                <?php endif ?>
                <?php if ($fs['template_type'] == 'tpl-2' || $fs['template_type'] == 'tpl-4'): ?>
                    <a class="link_download link_download_has_arrow link_download_type_<?= $fs['template_type'] ?>"
                       href="#form"><?php echo $fs['header_button_text'] ?>
                        <svg width="50" height="50" class="arrow_link_to_pdf" viewBox="0 0 50 50" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.5972 24.9995L22.6859 6.0892C21.3269 4.72964 21.3269 2.52566 22.6859 1.16665C24.0449 -0.192919 26.2488 -0.192919 27.6084 1.16665L48.9811 22.5391C49.6606 23.2189 50 24.109 50 24.9995C50 25.8903 49.66 26.781 48.9811 27.4605L27.6084 48.8328C26.2488 50.193 24.0448 50.193 22.6859 48.8328C21.3269 47.4737 21.3269 45.2695 22.6859 43.9106L41.5972 24.9995ZM1.0192 43.9106C-0.339815 45.2697 -0.339815 47.4739 1.0192 48.8328C2.37822 50.193 4.58142 50.193 5.94176 48.8328L27.3145 27.4606C27.994 26.7811 28.3328 25.8904 28.3328 24.9996C28.3328 24.1091 27.9934 23.2184 27.3145 22.5392L5.94176 1.16665C4.58153 -0.192919 2.37822 -0.192919 1.0192 1.16665C-0.339815 2.52566 -0.339815 4.72953 1.0192 6.0892L19.9309 24.9995L1.0192 43.9106Z"/>
                        </svg>
                    </a>
                <?php endif ?>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-6 col-header-img">
                <div class="box_bord pull-left flexbox flex-column">
                    <div class="header-img-box">
                        <?php $img = $fs['header_image']; ?>
                        <?php if ($fs['template_type'] != 'tpl-4'): ?>
                            <div class="h2 text-right header-img-lbl"><?= $fs['header_image_text'] ?></div>
                        <?php endif ?>
                        <img class="img1 img-header" src="<?php echo $img['url']; ?>" alt="<?= $img['alt'] ?>"/>
                        <?php if ($fs['template_type'] == 'tpl-4'): ?>
                            <div class="h2 text-right header-img-lbl"><?= $fs['header_image_text'] ?></div>
                        <?php endif ?>
                    </div>
                    <?php if ($fs['template_type'] == 'tpl-1'): ?>
                        <div class="header-link-box">
                            <a class="link_download" href="#form"><?php echo $fs['header_button_text'] ?></a></div>
                    <?php endif ?>
                </div>
            </div>
            <?php if ($fs['template_type'] == 'tpl-3'): ?>
                <div class="col-text-right">
                    <div class="text">
                        <?php echo $fs['header_text'] ?>
                    </div>
                    <div class="header-link-box">
                        <a class="link_download" href="#form"><?php echo $fs['header_button_text'] ?></a>
                    </div>
                </div>
            <?php endif ?>
        </div>
        <?php if ($fs['template_type'] != 'tpl-2'): ?>
            <div class="box_social_row row">
                <div class="box_social col-lg-offset-1 col-md-6">
                    <?php foreach ($fs['social'] as $soc): ?>
                        <a href="<?= $soc['link'] ?>" target="_blank"><img src="<?= $soc['image']['url'] ?>"></a>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="section2">
    <div class="container">
        <div class="row row-with-form-<?= $fs['template_type'] ?>">
            <div class="form-block-text-left <?php if ($fs['template_type'] == 'tpl-4') { ?>col-sm-4<?php } else { ?>col-md-6 col-sm-6 col-lg-5 col-lg-offset-1<?php } ?>">
                <div class="text1_s2"><?php echo $fs['form_text_block']['text_top']; ?></div>
                <div class="text1_1 row">
                    <?php //echo apply_filters('the_content', $fs['form_text_block']['text_columns']); ?>
                    <?php echo do_shortcode($fs['form_text_block']['text_columns']); ?>
                </div>
                <div class="content_with_lists">
                    <?php echo $fs['form_text_block']['text_with_lists']; ?>
                </div>
            </div>
            <div class="<?php if ($fs['template_type'] == 'tpl-4') { ?>col-sm-4<?php } else { ?>col-md-6 col-sm-6 col-lg-6<?php } ?>"
                 id="form">
                <div class="h2 text2_s2"><?= $fs['form_block']['title_form'] ?></div>
                <?php echo do_shortcode($fs['form_block']['form_shortcode']); ?>
            </div>
            <?php if ($fs['template_type'] == 'tpl-4') { ?>
                <div class="col-sm-4 col-form-contancts flexbox flex-column">
                    <div class="cfc-title h2"><?= $fs['form_right_column']['title'] ?></div>
                    <div class="cfc-list"><?= $fs['form_right_column']['list'] ?></div>
                    <div class="cfc-contact">
                        <?= $fs['form_right_column']['contacts'] ?>
                        <?php if ($fs['template_type'] != 'tpl-2'): ?>
                            <div class="box_social_row_right">
                                <?php foreach ($fs['social'] as $soc): ?>
                                    <a href="<?= $soc['link'] ?>" target="_blank"><img
                                                src="<?= $soc['image']['url'] ?>"></a>
                                <?php endforeach ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php echo $fs['copyright'] ? $fs['copyright'] : '© 2015-' . date('Y', time()) . ' INSART SOFTWARE LLC' ?>
            </div>
        </div>
    </div>
</footer>
<div class="popup-mail popup">
    <div class="pm-inner flexbox">
        <div class="pm-top">
            <span class="pm-logo">
                <img class="logotip" src="<?php echo $fs['logo']['url'] ?>"/>
            </span>
            <button type="button" class="close-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 1.41192L22.6087 0.0236511L12 10.6121L1.39129 0.0236511L0 1.41192L10.6087 12.0004L0 22.5881L1.39129 23.9763L12 13.3887L22.6087 23.9763L24 22.5881L13.3905 12.0004L24 1.41192Z"
                          fill="white"/>
                </svg>
            </button>
        </div>
        <div class="pm-center text-center">
            <div class="h2"><?= $fs['popup_title'] ? $fs['popup_title'] : 'Thank you for your interest!' ?></div>
            <div class="txt"><?= $fs['popup_text'] ? $fs['popup_text'] : 'PDF link has been sent to you' ?></div>
        </div>
        <?php if ($fs['template_type'] == 'tpl-3' || $fs['template_type'] == 'tpl-4'): ?>
            <div class="pm-bottom flexbox">
                <?php if ($fs['template_type'] == 'tpl-3' || $fs['template_type'] == 'tpl-4'): ?>
                    <div class="col-top-email col-email-<?= $fs['template_type'] ?>">
                        <?php echo $fs['email'] ?>
                    </div>
                <?php endif ?>

                <?php if ($fs['social']): ?>
                    <div class="pm-soc">
                        <div class="col-sm-6 col-top-social col-soc-<?= $fs['template_type'] ?>">
                            <div class="box_social">
                                <?php foreach ($fs['social'] as $soc): ?>
                                    <a href="<?= $soc['link'] ?>" target="_blank"><img
                                                src="<?= $soc['image']['url'] ?>"></a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($fs['email']): ?>
                    <div class="pm-email"><?php echo $fs['email'] ?></div>
                <?php endif ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php //dd($fs); ?>
<?php wp_footer() ?>
<script>
    jQuery(function ($) {
        $('.close-btn').on('click', function (e) {
            e.preventDefault();
            $('.popup').fadeOut(200);
        })
        var $page = jQuery('html, body');
        jQuery('a[href*="#"]').click(function (e) {
            e.preventDefault();
            $page.animate({
                scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
            }, 600);
            return false;
        });

        ///////////////////////////////////////////////////////////////#

        document.addEventListener('wpcf7mailsent', function (event) {
            console.log(event);
// var currentformid = event.detail.contactFormId;
            var currentformid = event.detail.id;

            console.log($('#' + currentformid).find('.wpcf7-mail-sent-ok'));
            $('#' + currentformid).find('.wpcf7-mail-sent-ok').hide();
            $('.popup-mail').fadeIn(200);


        }, false);
        ///////////////////////////////////////////////////////////////
    })

</script>
</body>
</html>