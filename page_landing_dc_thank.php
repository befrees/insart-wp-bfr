<?php
/*
*Template Name: Define Criteria Thank
*/
?>
<?php
$fs = get_fields($post);
$fsp = get_fields($post->post_parent);
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
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/land-dc.css">

    <?php $style = '';

if($fsp['color_body']){
    $style .= '
    body {
        color: '.$fsp['color_body'].';
    }
    ';
}
if($fsp['body_background']){
    $style .= '
    body {
        background-color: '.$fsp['body_background'].';
    }
    ';
}
if($fsp['color_title']){
    $style .= '
    .title-land, h1, .h1, h2, .h2, h3, .h3, .modal-title, .footer_copyright,
     .text-land-thank {
        color: '.$fsp['color_title'].';
    }
    .num__item .num {
        -webkit-text-stroke: 4px '.$fsp['color_title'].';
    }
    .block-text ul li:before {
        background: '.$fsp['color_title'].';
    }
    ';
}
if($fsp['button_color']){
    $style .= '
    .button, .other__overlay {
        background-color: '.$fsp['button_color'].';
        border-color: '.$fsp['button_color'].';
    }
    .button:hover, .footer-thank .by-insart {
        color: '.$fsp['button_color'].';
    }
    .cover-block .soc-links a svg, .page-template-page_landing_dc_thank .col-contacts__social svg {
        fill: '.$fsp['button_color'].';
    }
    ';
}
if($fsp['footer_bg']){
    $style .= '
    .footer-col-1, .footer-col-2 {
        background-color: '.$fsp['footer_bg'].';
    }
    ';
}
if($fsp['footer_color']){
    $style .= '
    .col-contacts__title, .footer-col-2 {
        color: '.$fsp['footer_color'].';
    }
    // .col-contacts__social svg {
    //     fill: '.$fsp['footer_color'].';
    // }
    ';
}
?>
<?php if($style): 
echo '<style>';
 echo $style;
echo '</style>';
 endif; ?>

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
            <a href="<?= $fs['file'] ?>" class="button" target="_blank" >download free guide</a>
        </div>
        <div class="top__text text-land-thank"><?php the_content() ?></div>
    </section>
    <section class="other__block flexbox align-center">
        <?php if($other = $fs['other_pages']): ?>
        <h2 class="title-block other__title"><?= $fs['title_other_pages'] ?></h2>
        <div class="other__items flexbox">
            <?php foreach($other as $k => $item): ?>
                <div class="other__item">
                    <img src="<?= $item['image']['sizes']['medium_large'] ?>" alt="<?= $item['image']['alt'] ?>">
                    <div class="other__overlay"><a href="<?= $item['link'] ?>" class="button other__button" target="_blank" >learn more</a></div>
                </div>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </section>

    <footer class="footer-dc footer-thank">
        <div class="footer-inner flexbox align-between items-center">
            <div class="col-contacts__social soc-links">
                <?php if($redux_demo['linkedin']) { ?>
                    <a href="<?= $redux_demo['linkedin'] ?>" target="_blank">
                        <svg width="30" height="30" viewBox="0 0 30 30"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 18.2422V29.3334H23.57V18.985C23.57 16.3854 22.64 14.6113 20.3126 14.6113C18.5359 14.6113 17.4785 15.8069 17.0134 16.9635C16.8438 17.377 16.8001 17.9525 16.8001 18.5312V29.3334H10.368C10.368 29.3334 10.4546 11.8066 10.368 9.99074H16.7995V12.7325C16.7864 12.753 16.7695 12.7751 16.7572 12.795H16.7995V12.7325C17.654 11.4164 19.18 9.53633 22.5957 9.53633C26.8276 9.53626 30 12.3009 30 18.2422ZM3.63968 0.666626C1.43926 0.666626 0 2.10993 0 4.00793C0 5.86456 1.39762 7.35167 3.55431 7.35167H3.59728C5.84032 7.35167 7.23529 5.86484 7.23529 4.00793C7.19302 2.10993 5.84032 0.666626 3.63968 0.666626ZM0.382012 29.3334H6.8117V9.99074H0.382012V29.3334Z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if($redux_demo['twitter']) { ?>
                    <a href="<?= $redux_demo['twitter'] ?>" target="_blank">
                        <svg width="30" height="30" viewBox="0 0 30 30"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 7.69886C28.8958 8.18813 27.711 8.51994 26.4662 8.66808C27.7373 7.90695 28.7102 6.69969 29.1713 5.26558C27.9791 5.97043 26.6631 6.48224 25.2608 6.75969C24.1379 5.5618 22.5407 4.81567 20.7691 4.81567C17.3704 4.81567 14.6147 7.57141 14.6147 10.9683C14.6147 11.45 14.669 11.9206 14.774 12.3705C9.66 12.1137 5.12525 9.66352 2.0902 5.94043C1.55966 6.84778 1.25784 7.90504 1.25784 9.03362C1.25784 11.1689 2.34515 13.0529 3.99485 14.1551C2.98628 14.1214 2.0377 13.844 1.20726 13.3828V13.4596C1.20726 16.4403 3.32936 18.928 6.14319 19.4942C5.62765 19.6329 5.08402 19.7097 4.52162 19.7097C4.12422 19.7097 3.7399 19.6704 3.36309 19.5954C4.14667 22.0418 6.41878 23.8208 9.11079 23.8696C7.00554 25.5193 4.35103 26.4997 1.46784 26.4997C0.971079 26.4997 0.481765 26.4697 0 26.4154C2.72387 28.1645 5.95765 29.1843 9.43324 29.1843C20.7542 29.1843 26.9425 19.8072 26.9425 11.675L26.9218 10.8783C28.1309 10.0159 29.177 8.93239 30 7.69886Z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
            <div class="by-insart order-3"><span>by INSART</span></div>
        </div>
        <div class="footer_copyright text-center">
            © 2015-<?= date('Y', time()) ?> INSART SOFTWARE LLC
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