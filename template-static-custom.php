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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96573499-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
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
        $css_body[] = 'background:' . $fs['background']['color'] . ';';
        $custom_css .= "
    .popup-mail {
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
    }
    ";
    }
    if($fs['template_type'] == 'tpl-3') {
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
        if ($fs['color_help']){
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
        font-size: ".$fs['font_size_header_title_pc']."px;
    }";
    }
    if ($fs['font_size_header_title_mobile']) {
        $custom_css .= "
    @media (max-width: 720px){
        .text1 {
            font-size: ".$fs['font_size_header_title_mobile']."px;
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
        #form, .section2, .text2_s2, .cfc-title, .cfc-contact,
    .form1 input[type=checkbox],
     .form1 input[type=\"checkbox\"]:checked:before {
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
    <?= "<style>" ?>

        body {
        <?= $css_body; ?>
        }

        @media screen and (max-width: 768px) {
        <?php if($fs['background']['type'] == 'image'): ?>
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
    <?php if ($fs['template_type'] == 'tpl-3') : ?>
        <div class="bg-right">
    <?php endif ?>
    <div class="container-fluid">
        <div class="row row-with-form-<?= $fs['template_type'] ?>">
        <?php if ($fs['template_type'] == 'tpl-3') : ?>
            <div class="bg-left">
<svg width="191" height="973" class="svg-left-bg" viewBox="0 0 191 973" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="stroke" d="M189.551 486.348C189.551 218.299 -28.6076 1.00007 -297.727 1.00007C-566.841 1.00007 -785 218.299 -785 486.348C-785 754.396 -566.841 971.695 -297.727 971.695C-28.6076 971.695 189.551 754.396 189.551 486.348Z" stroke="#FF9550" stroke-width="2" stroke-miterlimit="10"/>
<path class="stroke" d="M154.346 486.348C154.346 237.668 -48.0521 36.0711 -297.727 36.0711C-547.396 36.0711 -749.794 237.668 -749.794 486.348C-749.794 735.029 -547.396 936.625 -297.727 936.625C-48.0521 936.625 154.346 735.029 154.346 486.348V486.348Z" stroke="#FF9550" stroke-width="2" stroke-miterlimit="10"/>
<path class="stroke" d="M119.135 486.347C119.135 257.034 -67.503 71.136 -297.728 71.136C-527.953 71.136 -714.586 257.034 -714.586 486.347C-714.586 715.66 -527.953 901.554 -297.728 901.554C-67.503 901.554 119.135 715.66 119.135 486.347V486.347Z" stroke="#FF9550" stroke-width="2" stroke-miterlimit="10"/>
<path class="stroke" d="M83.925 486.348C83.925 276.402 -86.9472 106.207 -297.728 106.207C-508.503 106.207 -679.375 276.402 -679.375 486.348C-679.375 696.293 -508.503 866.484 -297.728 866.484C-86.9472 866.484 83.925 696.293 83.925 486.348V486.348Z" stroke="#FF9550" stroke-width="2" stroke-miterlimit="10"/>
<path class="stroke" d="M48.7161 486.347C48.7161 295.769 -106.391 141.277 -297.727 141.277C-489.057 141.277 -644.164 295.769 -644.164 486.347C-644.164 676.925 -489.057 831.418 -297.727 831.418C-106.391 831.418 48.7161 676.925 48.7161 486.347V486.347Z" stroke="#FF9550" stroke-width="2" stroke-miterlimit="10"/>
<path class="stroke" d="M13.5051 486.348C13.5051 315.142 -125.836 176.348 -297.728 176.348C-469.614 176.348 -608.955 315.142 -608.955 486.348C-608.955 657.553 -469.614 796.348 -297.728 796.348C-125.836 796.348 13.5051 657.553 13.5051 486.348Z" stroke="#FF9550" stroke-width="2" stroke-miterlimit="10"/>
<path class="fill" d="M-296.653 1.57601C-296.53 1.57601 -296.406 1.5712 -296.278 1.5712C-27.1633 1.5712 191 218.871 191 486.919H-296.653V1.57601Z" fill="#FF5B2F"/>
</svg>

            </div>
        <?php endif ?>
            <div class="form-block-text-left <?php if ($fs['template_type'] == 'tpl-4') { ?>col-sm-4<?php } elseif($fs['template_type'] == 'tpl-3'){ ?>col-md-5 col-sm-5 <?php } else { ?>col-md-6 col-sm-6 col-lg-5 col-lg-offset-1<?php } ?>">
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
    <?php if ($fs['template_type'] == 'tpl-3') : ?>
    <div class="bg-right-col">
    <svg width="93" height="185" class="svg-right-bg" viewBox="0 0 93 185" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M184.727 92.5C184.727 41.9663 143.599 0.999993 92.8632 0.999993C42.1285 0.999993 1.00017 41.9663 1.00017 92.5C1.00017 143.034 42.1285 184 92.8632 184C143.599 184 184.727 143.034 184.727 92.5Z" stroke="#FF9550" stroke-width="7.03855" stroke-miterlimit="10"/>
<path d="M178.09 92.5001C178.09 45.6177 139.933 7.61176 92.863 7.61176C45.7941 7.61176 7.6371 45.6177 7.6371 92.5001C7.6371 139.383 45.7941 177.388 92.863 177.388C139.933 177.388 178.09 139.383 178.09 92.5001V92.5001Z" stroke="#FF9550" stroke-width="6.88033" stroke-miterlimit="10"/>
<path d="M171.452 92.5C171.452 49.2689 136.266 14.2224 92.8631 14.2224C49.46 14.2224 14.2752 49.2689 14.2752 92.5C14.2752 135.731 49.46 170.777 92.8631 170.777C136.266 170.777 171.452 135.731 171.452 92.5V92.5Z" stroke="#FF9550" stroke-width="6.72211" stroke-miterlimit="10"/>
<path d="M164.814 92.5C164.814 52.9201 132.6 20.8341 92.8632 20.8341C53.1268 20.8341 20.9131 52.9201 20.9131 92.5C20.9131 132.08 53.1268 164.165 92.8632 164.165C132.6 164.165 164.814 132.08 164.814 92.5V92.5Z" stroke="#FF9550" stroke-width="6.56388" stroke-miterlimit="10"/>
<path d="M158.176 92.5C158.176 56.5714 128.935 27.4457 92.8633 27.4457C56.7927 27.4457 27.5512 56.5714 27.5512 92.5C27.5512 128.429 56.7927 157.554 92.8633 157.554C128.935 157.554 158.176 128.429 158.176 92.5V92.5Z" stroke="#FF9550" stroke-width="6.40566" stroke-miterlimit="10"/>
<path d="M151.538 92.5C151.538 60.2236 125.269 34.0574 92.8632 34.0574C60.4584 34.0574 34.1891 60.2236 34.1891 92.5C34.1891 124.776 60.4584 150.943 92.8632 150.943C125.269 150.943 151.538 124.776 151.538 92.5Z" stroke="#FF9550" stroke-width="6.24744" stroke-miterlimit="10"/>
<path d="M144.901 92.5C144.901 63.8748 121.603 40.669 92.8632 40.669C64.1242 40.669 40.8261 63.8748 40.8261 92.5C40.8261 121.125 64.1242 144.331 92.8632 144.331C121.603 144.331 144.901 121.125 144.901 92.5V92.5Z" stroke="#FF9550" stroke-width="6.08921" stroke-miterlimit="10"/>
<path d="M138.263 92.5C138.263 67.5261 117.937 47.2807 92.8633 47.2807C67.7901 47.2807 47.4641 67.5261 47.4641 92.5C47.4641 117.474 67.7901 137.719 92.8633 137.719C117.937 137.719 138.263 117.474 138.263 92.5V92.5Z" stroke="#FF9550" stroke-width="5.93099" stroke-miterlimit="10"/>
<path d="M131.625 92.5C131.625 71.1774 114.272 53.8915 92.8633 53.8915C71.4558 53.8915 54.102 71.1774 54.102 92.5C54.102 113.823 71.4558 131.108 92.8633 131.108C114.272 131.108 131.625 113.823 131.625 92.5V92.5Z" stroke="#FF9550" stroke-width="5.77277" stroke-miterlimit="10"/>
<path d="M124.987 92.5C124.987 74.8287 110.605 60.5031 92.8632 60.5031C75.1216 60.5031 60.7399 74.8287 60.7399 92.5C60.7399 110.171 75.1216 124.497 92.8632 124.497C110.605 124.497 124.987 110.171 124.987 92.5Z" stroke="#FF9550" stroke-width="5.61454" stroke-miterlimit="10"/>
<path d="M118.349 92.5C118.349 78.4799 106.939 67.1147 92.8633 67.1147C78.7884 67.1147 67.3771 78.4799 67.3771 92.5C67.3771 106.52 78.7884 117.885 92.8633 117.885C106.939 117.885 118.349 106.52 118.349 92.5V92.5Z" stroke="#FF9550" stroke-width="5.45632" stroke-miterlimit="10"/>
<path d="M111.712 92.5C111.712 82.1312 103.273 73.7264 92.8631 73.7264C82.454 73.7264 74.0149 82.1312 74.0149 92.5C74.0149 102.869 82.454 111.274 92.8631 111.274C103.273 111.274 111.712 102.869 111.712 92.5V92.5Z" stroke="#FF9550" stroke-width="5.2981" stroke-miterlimit="10"/>
<path d="M105.074 92.4999C105.074 85.7834 99.6072 80.3371 92.863 80.3371C86.1197 80.3371 80.6527 85.7834 80.6527 92.4999C80.6527 99.2165 86.1197 104.662 92.863 104.662C99.6072 104.662 105.074 99.2165 105.074 92.4999Z" stroke="#FF9550" stroke-width="5.13987" stroke-miterlimit="10"/>
<path d="M98.4364 92.5C98.4364 89.4346 95.9416 86.9488 92.8632 86.9488C89.7856 86.9488 87.2908 89.4346 87.2908 92.5C87.2908 95.5653 89.7856 98.0511 92.8632 98.0511C95.9416 98.0511 98.4364 95.5653 98.4364 92.5Z" stroke="#FF9550" stroke-width="4.98165" stroke-miterlimit="10"/>
</svg>

    </div>
        </div> <!-- .bg-right -->
    <?php endif ?>
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
                <?php if ($fs['social']): ?>
                    <div class="pm-soc col-soc-<?= $fs['template_type'] ?>">

                                <?php foreach ($fs['social'] as $soc): ?>
                                    <a href="<?= $soc['link'] ?>" target="_blank"><img
                                                src="<?= $soc['image']['url'] ?>"></a>
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
            if(1 || location.pathname == '/talent-shortage/'){
//                ga('send', 'event', 'forms', 'send', 'mygoal');
                console.log(location.pathname, window.dataLayer);
                gtag('event', 'fintech_shortage_downloaded', { 'event_category': 'forms', 'event_action': 'send', });
            }

        }, false);
        ///////////////////////////////////////////////////////////////
    })

    
</script>
</body>
</html>