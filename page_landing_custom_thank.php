<?php
/*
*Template Name: Custom landing Thank
*/
?>
<?php
$fs1 = get_fields($post);
$fs = get_fields($post->post_parent);
//dd($post);
global $redux_demo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:300,400,600,700,600i,700i&display=swap&subset=latin-ext" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/static/css/static-tpl.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/land-dc.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/static/css/<?= $fs['template_type'] ?>.css">

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
    }
    ";
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
        a.link_download, .form1 .wpcf7-submit,  a.button, .other__overlay {
            background-color: " . $fs['color_decoration'] . ";
            border-color: " . $fs['color_decoration'] . "; 
        }
        a.link_download:hover, .form1 .wpcf7-submit:hover, a.button:hover {
        border-color: " . $fs['color_decoration'] . "; 
        color: " . $fs['color_decoration'] . "; 
        }
        a.button:hover {
        background: #fff;
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
        $custom_css .= "\nfooter, .footer-tpl-5 {
        background: {$fs['copyright_bg']};
    }
      #cookie-notice, #cookie-notice {
        background: {$fs['copyright_bg']} !important;
    }
     \n";
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
            #cookie-notice .cn-button {
                color: <?= $fs['font_title_color'] ?>;
            }
            .btn_cookies .after svg {
                fill: <?= $fs['font_title_color'] ?>;
            }
        </style>
    <?php } ?>

</head>
<body <?php body_class('land-dc') ?> >
<header id="header-land-bc" class="header-land-bc flexbox align-between items-center">
    <a href="<?= home_url() ?>" class="logo-land-bc">
        <img class="logo" src="<?= get_template_directory_uri() ?>/img/logo_blue.svg" alt="">
    </a>
    <a href="mailto:sales@insart.com" class="header__email">sales@insart.com</a>
</header>
<div class="middle">
    <section class="top-block top-block__thank container">
        <h1 class="title-land title-land__thank">
            <?php the_title() ?>
        </h1>
        <div class="btn-box">
            <a href="<?= $fs1['file'] ?>" class="button" target="_blank" >download free guide</a>
        </div>
        <div class="top__text text-land-thank"><?php the_content() ?></div>
    </section>
    <?php //dd($fs) ?>
    <section class="other__block flexbox align-center">
        <?php if($other = $fs1['other_pages']):
//            dd($other);
            ?>
        <h2 class="title-block other__title"><?= $fs1['title_other_pages'] ?></h2>
        <div class="other__items flexbox">
            <?php foreach($other as $k => $item): ?>
                <div class="other__item">
                    <img src="<?= $item['image']['sizes']['medium_large'] ?>" alt="<?= $item['image']['alt'] ?>" >
                    <div class="other__overlay"><a href="<?= $item['link'] ?>" class="button other__button" target="_blank" >learn more</a></div>
                </div>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </section>


    <footer class="site--footer footer-<?php echo $fs['template_type'] ?>">
        <div class="container">
            <?php if ($fs['template_type'] == 'tpl-5') : ?>
                <div class="row flexbox row-footer-top">
                    <div class="footer-menu flexbox"><a href="#" class="footer-link-contact">Contact us</a>
                        <div class="footer-email"><a href=""></a>sales@insart.com</div>
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
<!--                    <a href="#" class="gotop"><img src="--><?php //echo get_template_directory_uri() ?><!--/img/svg/arrow_up.svg" alt=""></a>-->
                </div>
            <?php endif ?>
            <div class="row row-copyright">
                <div class="col-md-12 text-center ">
                    <?php echo $fs['copyright'] ? $fs['copyright'] : '© 2015-' . date('Y', time()) . ' INSART SOFTWARE LLC' ?>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <script>
        jQuery(function ($) {
            $('#cn-accept-cookie').append('<span class="after"><svg width="210" height="90" viewBox="0 0 210 90" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                '<path d="M160 0L151.25 7.875L186.25 39.375H0V50.625H186.25L151.25 82.125L160 90L210 45L160 0Z"/>\n' +
                '</svg></span>');
        })
        Cookies.remove('dc')
    </script>
</div>
</body>
</html>