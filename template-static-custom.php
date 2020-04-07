<?php
/*
*Template Name: Static custom landing
*/
?>
<?php
$fs = get_fields($post);
$email = $fs['email'] ? $fs['email'] : 'sales@insart.com';
$site = 'https://www.insart.com/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96573499-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-96573499-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/static/css/static-tpl.css">

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/static/css/<?= $fs['template_type'] ?>.css"/>
    <?php
//    dd($fs);
    $css_body = [];
    $custom_css = '';
    if ($fs['font_body']) {
        $css_body[] = 'font-family:' . $fs['font_body'] . ';';
    }
    if ($fs['font_body_color']) {
        $css_body[] = 'color:' . $fs['font_body_color'] . ';';
        $custom_css .= "
    .popup-mail {
        color: " . $fs['font_body_color'] . ";
    }";
    }
    if ($fs['background']['type'] == 'color') {
        $css_body[] = 'background-color:' . $fs['background']['color'] . ';';
        $custom_css .= "
    .popup-mail {
    background-color: " . $fs['background']['color'] . ";
    }";
    }
    if ($fs['background']['type'] == 'image') {
        if($fs['template_type'] != 'tpl-2' ){
            $css_body[] = 'background: url(' . $fs['background']['image_pc']['url'] . ') no-repeat center 0;';
        }
        
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
    }
    ";
    }
   
    if ($fs['template_type'] == 'tpl-2') {
        if($fs['section_top_bg']){
        $custom_css .= "
        .section1 {
            background-image: url(".$fs['section_top_bg']['url'].");
        }
        ";
        }
        if($fs['section_2_bg']){
            $custom_css .= "
            .section2 {
                background-image: url(".$fs['section_2_bg']['url'].");
            }
            ";
            }
           
    }
    if ($fs['template_type'] == 'tpl-3') {
        if ($fs['font_title']) {
            $custom_css .= "
    a.link_download, 
    .tpl-3 .wpcf7 .form-row label,
    .tpl-3 .form1 .wpcf7-submit {
        font-family: " . $fs['font_title'] . ";
    }
    ";
            /*if($fs['form_left_img']){
                $custom_css .= "
                .section2 .bg-left {background-image: url(". $fs['form_left_img']['url'] . ")}
                ";
            }
            if($fs['form_right_img']){
                $custom_css .= "
                .section2 .bg-right {background-image: url(". $fs['form_right_img']['url'] . ")}
                ";
            }*/
        }
        if ($fs['color_help']) {
            $custom_css .= "
    a.link_download:hover,
    .tpl-3 .form1 .wpcf7-submit:hover {
        background: " . $fs['color_help'] . ";
    }
    ";
        }
    }

    if ($fs['font_size_header_title_pc']) {
        $custom_css .= "
    .text1 {
        font-size: " . $fs['font_size_header_title_pc'] . "px;
    }";
    }
    if ($fs['font_size_header_title_mobile']) {
        $custom_css .= "
    @media (max-width: 768px){
        .text1 {
            font-size: " . $fs['font_size_header_title_mobile'] . "px;
        }
       }";
    }

    if ($fs['color_help'] && $fs['template_type'] == 'tpl-1') {
        $custom_css .= "
    .form1 {
        background: " . $fs['color_help'] . ";
    }";
    }
    if ($fs['color_help'] && $fs['template_type'] != 'tpl-3') {
        $custom_css .= "  
    a.link_download:hover {
        color: " . $fs['color_help'] . ";
    }";
    }
    if ($fs['color_decoration'] && $fs['template_type'] == 'tpl-3') {
        $custom_css .= "
        .svg-left-bg path.stroke,
        .svg-right-bg path {
            stroke: " . $fs['color_decoration'] . ";
        }
        .svg-left-bg path.fill {
            fill: " . $fs['color_decoration'] . ";
        }
        a.link_download {
            background-color: " . $fs['color_decoration'] . ";
        }";
    }
    if ($fs['color_decoration'] && $fs['template_type'] == 'tpl-5') {
        $custom_css .= "
        .svg-left-bg path.stroke,
        .svg-right-bg path {
            stroke: " . $fs['color_decoration'] . ";
        }
        .dots-box svg, #line_form_tpl_5, .check-s__bg svg {
            fill: " . $fs['color_decoration'] . ";
        }
        a.link_download, .form1 .wpcf7-submit {
            background-color: " . $fs['color_decoration'] . ";
            border-color: " . $fs['color_decoration'] . "; 
        }
        a.link_download:hover, .form1 .wpcf7-submit:hover {
        border-color: " . $fs['color_decoration'] . "; 
        color: " . $fs['color_decoration'] . "; 
        }";

    }
    if ($fs['color_decoration']) {
        $custom_css .= "
    .tpl-2 a.link_download_has_arrow {
        color: " . $fs['color_decoration'] . ";
    }
    .link_download svg {
        fill: " . $fs['color_decoration'] . ";
    }
    .content_with_lists li:before,
    .tpl-2 .form1 .wpcf7-submit,
    .tpl-3 .form1 .wpcf7-submit {
        background: " . $fs['color_decoration'] . ";
    }
    .tpl-1 .form1 label,
    .tpl-1 .form1 .wpcf7-submit {
        color: " . $fs['color_decoration'] . ";
    }
    .form1 input[type=checkbox],
     .form1 input[type=\"checkbox\"]:checked:before {
        border-color: " . $fs['color_decoration'] . ";
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
        }\n";
        }

        if ($fs['color_help']) {
            $custom_css .= "
    .text2_s2, .cfc-contact {
        background: " . $fs['color_help'] . ";
    }\n";
        }
        if ($fs['color_decoration']) {
            $custom_css .= "
    .cfc-list ul li:before {
        color: " . $fs['color_decoration'] . ";
    }\n";
        }
        if ($fs['font_title_color']) {
            $custom_css .= ".cfc-contact{
        color: " . $fs['font_title_color'] . ";
        }
        #form, .section2, .text2_s2, .cfc-title, .cfc-contact,
    .form1 input[type=checkbox],
     .form1 input[type=\"checkbox\"]:checked:before {
            border-color: " . $fs['font_title_color'] . ";
        }
        #form:before,
        #form:after {background: " . $fs['font_title_color'] . ";}
        .cfc-list ul li:after {-webkit-text-stroke-color: " . $fs['font_title_color'] . ";}
        \n";
        }
    }
    if ($fs['copyright_bg']) {
        $custom_css .= "\nfooter, .footer-tpl-5, .sheck-s__caption {
        background: {$fs['copyright_bg']};
    }
      #cookie-notice, #cookie-notice {
        background: {$fs['copyright_bg']} !important;
    }
     \n";
    }
    if ($fs['copyright_color']) {
        $custom_css .= " .site--footer .row-copyright {
        color: {$fs['copyright_color']} !important;
    }\n";
    }
    if ($fs['copyright_bg']) {
        $custom_css .= " #cookie-notice {
        background-color: {$fs['copyright_bg']} !important;
    }\n";
    }
    if ($fs['popup_background_color']) {
        $custom_css .= ".popup-mail {
        background: {$fs['popup_background_color']};
    }";
    }
    if ($fs['popup_background_image']) {
        $custom_css .= ".popup-mail {
        background: url({$fs['popup_background_image']['url']}) no-repear center 0;
        
    };";
    }
    ?>
    <?= $fs['font_inc'] ?>
    <?= "<style>" ?>

    body {
    <?= $css_body; ?>
    }

    @media screen and (max-width: 768px) {
    <?php if ($fs['background']['type'] == 'image'): ?>
        body {
        background: url('<?= $fs['background']['image_mobile']['url'] ?>') no-repeat center 0;
        }

    <?php endif; ?>
    }

    h1, .h1, h2, .h2, h3, .h3 {
    <?= $css_title; ?>
    }

    <?= $custom_css; ?>

    <?= "</style>" ?>

    <?php
    if ($fs['copyright_bg']) { ?>
        <style>
            #cookie-notice {
            background: <?= $fs['copyright_bg'] ?> !important;
            };
        </style>
   <?php }
    if ($fs['font_title_color']) { ?>
        <style>
            #cookie-notice .cn-button,
            #cookie-notice .btn_cookies:hover {
                color: <?= $fs['font_title_color'] ?> ;
            }
            .btn_cookies .after svg {
                fill: <?= $fs['font_title_color'] ?>;
            }
        </style>
    <?php } ?>

</head>
<body <?php body_class($fs['template_type']) ?>>
<section class="section1">
    <div class="container header-box">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-top-logo">
                <a href="<?= home_url() ?>"><img class="logotip" src="<?php echo $fs['logo']['url'] ?>" alt=""/></a>
            </div>
            <?php if ($fs['template_type'] == 'tpl-3' || $fs['template_type'] == 'tpl-4' || $fs['template_type'] == 'tpl-5'): ?>
                <div class="col-top-email col-email-<?= $fs['template_type'] ?>">
                    <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
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
                <?php if ($fs['template_type'] == 'tpl-2' || $fs['template_type'] == 'tpl-4' || $fs['template_type'] == 'tpl-5'): ?>
                 <?php if($fs['template_type'] == 'tpl-5'): ?>
                    <span class="link_download_span">
                        <?php endif ?>
                    <a class="link_download link_download_has_arrow link_download_type_<?= $fs['template_type'] ?>"
                       href="#form">
                    <?php echo $fs['header_button_text'] ?>

                        <?php if ($fs['template_type'] != 'tpl-5'): ?>

                            <?php include get_template_directory() . "/static/svg/arrow_pdf.svg"; ?>
                        <?php endif ?>
                    </a>
                    <?php if($fs['template_type'] == 'tpl-5'): ?>
                        </span>
                    <?php endif ?>
                <?php endif ?>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-6 col-header-img">
                <div class="box_bord pull-left flexbox flex-column">
                    <div class="header-img-box">
                        <?php $img = $fs['header_image']; ?>
                        <?php if ($fs['template_type'] != 'tpl-4' && $fs['template_type'] != 'tpl-5'): ?>
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
                <?php if ($fs['template_type'] == 'tpl-5') : ?>
                <div class="box_by_insart">by INSART</div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="section2">
    <?php if ($fs['template_type'] == 'tpl-5') : ?>
    <?php //dd($fs); ?>
    <div class="container">
        <div class="row flexbox flex-wrap items-center section2-row-1">
            <div class="col-md-6 s2 col-img">
                <img src="<?= $fs['form_left_img']['url'] ?>" alt="<?= $fs['form_left_img']['alt'] ?>">
            </div>
            <div class="col-md-6 s2-col-text">
                <div class="text-box">
                    <?= $fs['form_right_column']['list'] ?>
                </div>
                <div class="dots-box">
                    <?php include get_template_directory() . '/static/svg/dots_tpl-5.svg'; ?>
                </div>
            </div>

        </div>
    </div>

    <?php endif ?>
    <?php if ($fs['template_type'] == 'tpl-3') : ?>
    <div class="bg-right">
    <?php endif ?>
        <div class="container-fluid">
            <div class="row row-with-form-<?= $fs['template_type'] ?>">
                <?php if ($fs['template_type'] == 'tpl-3') : ?>
                    <div class="bg-left">

                        <?php include get_template_directory() . '/static/svg/svg-left-bg.svg'; ?>
                    </div>
                <?php endif ?>
                <?php if ($fs['template_type'] != 'tpl-5'): ?>
                <div class="form-block-text-left <?php if ($fs['template_type'] == 'tpl-4') { ?>col-sm-4<?php } elseif ($fs['template_type'] == 'tpl-3') { ?>col-md-5 col-sm-5 <?php } else { ?>col-md-6 col-sm-6 col-lg-5 col-lg-offset-1<?php } ?>">
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
                <?php elseif ($fs['template_type'] == 'tpl-5'): ?>
                <div class="form-block" id="form">
                    <div class="form-gb text-center">

                        <?php include get_template_directory() . '/static/svg/line_form_tpl_5.svg'; ?>
                    </div>
                    <h2><?= $fs['form_right_column']['title'] ?></h2>
                    <div class="form-box form-box-anime">
                        <div class="h3"><?= $fs['form_block']['title_form'] ?></div>
                        <?php add_action( 'wpcf7_autop_or_not', '__return_false' ); ?>
                        <?= do_shortcode($fs['form_block']['form_shortcode']) ?>
                    </div>
                </div>
                <?php endif ?>
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
        <?php if ($fs['template_type'] == 'tpl-3') : ?>
        <div class="bg-right-col">

            <?php include get_template_directory() . '/static/svg/svg-right-bg.svg'; ?>
        </div>
    </div> <!-- .bg-right -->
<?php endif ?>
</section> <!-- .section2 -->
<?php if ($fs['template_type'] == 'tpl-5') : ?>
    <section class="section-3">
        <div class="container">
            <div class="check-s flexbox">
                <div class="check-s__col-1">
                    <div class="sheck-s__caption"><span>Check it out</span></div>
                    <div class="check-s__bg">

                        <?php include get_template_directory() . '/static/svg/check-s-arrow.svg'; ?>
                    </div>
                </div>
                <div class="check-s__col-2">
                <?php echo $fs['form_text_block']['text_top']; ?>
                   
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<footer class="site--footer footer-<?php echo $fs['template_type'] ?>">
    <div class="container">
        <?php if ($fs['template_type'] == 'tpl-5') : ?>
            <div class="row flexbox row-footer-top">
                <div class="footer-menu flexbox"><span class="footer-link-contact">Contact us</span>
                    <div class="footer-email"><a href="mailto:<?= $email ?>"></a><?= $email ?></div>
                    <div class="a footer-site"><a href="https://www.insart.com/">https://www.insart.com/</a></div>
                </div>
                <div class="footer-socials">
                    <?php foreach ($fs['social'] as $soc): ?>
                        <a href="<?= $soc['link'] ?>" target="_blank">
                            <?php
                            if($soc['image']['mime_type'] == 'image/svg+xml'):
                                $file_icon = bfr_get_svg(get_attached_file($soc['image']['id'])); ?>
                                <span class="icon-svg"><?php echo $file_icon ?></span>
                            <?php else: ?>
                                <img src="<?= $soc['image']['url'] ?>">
                            <?php endif ?>
                        </a>
                    <?php endforeach ?>
                </div>
                <a href="#" class="gotop"><img src="<?php echo get_template_directory_uri() ?>/img/svg/arrow_up.svg" alt=""></a>
            </div>
        <?php endif ?>
        <div class="row row-copyright">
            <div class="col-md-12 text-center ">
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
                <?php if ($fs['social']): ?>
                    <div class="pm-soc col-soc-<?= $fs['template_type'] ?>">

                        <?php foreach ($fs['social'] as $soc): ?>
                            <a href="<?= $soc['link'] ?>" target="_blank">
                                <img src="<?= $soc['image']['url'] ?>">
                            </a>
                        <?php endforeach ?>
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
<script src="<?= get_stylesheet_directory_uri() ?>/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
<script>
    jQuery(function ($) {

        $('#cn-accept-cookie').append('<span class="after"><svg width="210" height="90" viewBox="0 0 210 90" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<path d="M160 0L151.25 7.875L186.25 39.375H0V50.625H186.25L151.25 82.125L160 90L210 45L160 0Z"/>\n' +
            '</svg></span>');

        var $page = jQuery('html, body');

        $('.gotop').click(function(e){
            e.preventDefault();
            $page.animate({
                scrollTop: 0
            }, 600);
            return false;
        });
        $('.close-btn').on('click', function (e) {
            e.preventDefault();
            $('.popup').fadeOut(200);
        })
        jQuery('a[href*="#"]').click(function (e) {
            e.preventDefault();
            $page.animate({
                scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
            }, 600);
            return false;
        });

        ///////////////////////////////////////////////////////////////#

        document.addEventListener( 'wpcf7submit', function( event ) {
            var inputs = event.detail.inputs;
            console.log(inputs, event.detail);
            return false;
            for ( var i = 0; i < inputs.length; i++ ) {
                if ( 'your-name' == inputs[i].name ) {
                    // alert( inputs[i].value );
                    break;
                }
            }
        }, false );

        document.addEventListener('wpcf7mailsent', function (event) {

            console.log(event);
            <?php if($fs['template_type'] == 'tpl-5'):
            $childs = new WP_Query(['post_parent'=>$post->ID, 'post_type'=>'page']);
            $thank = $childs->post;
            ?>
            var thank_url = '<?= get_permalink($thank) ?>';
            Cookies.set('dc', 'true');

            var currentformid = event.detail.id;

            console.log($('#' + currentformid).find('.wpcf7-mail-sent-ok'));
            $('#' + currentformid).find('.wpcf7-mail-sent-ok').hide();
            window.location.href = thank_url;

            <?php else: ?>
// var currentformid = event.detail.contactFormId;
            var currentformid = event.detail.id;


            console.log($('#' + currentformid).find('.wpcf7-mail-sent-ok'));
            $('#' + currentformid).find('.wpcf7-mail-sent-ok').hide();
            $('.popup-mail').fadeIn(200);
            if (1 || location.pathname == '/talent-shortage/') {
//                ga('send', 'event', 'forms', 'send', 'mygoal');
                console.log(location.pathname, window.dataLayer);
                gtag('event', 'fintech_shortage_downloaded', {'event_category': 'forms', 'event_action': 'send',});
            }
            <?php endif ?>

        }, false);
        ///////////////////////////////////////////////////////////////
    })


</script>
</body>
</html>