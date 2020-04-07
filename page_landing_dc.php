<?php
/*
*Template Name: Define Criteria
*/
?>
<?php
$fs = get_fields($post);
$childs = new WP_Query(['post_parent'=>$post->ID, 'post_type'=>'page']);
$thank = $childs->post;
global $redux_demo;

?>
<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:300,400,600,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/land-dc.css">
<?php $style = '';

if($fs['color_body']){
    $style .= '
    body {
        color: '.$fs['color_body'].';
    }
    ';
}
if($fs['body_background']){
    $style .= '
    body {
        background-color: '.$fs['body_background'].';
    }
    ';
}
if($fs['color_title']){
    $style .= '
    .title-land, h1, .h1, h2, .h2, h3, .h3, .modal-title, .footer_copyright {
        color: '.$fs['color_title'].';
    }
    .num__item .num {
        -webkit-text-stroke: 4px '.$fs['color_title'].';
    }
    .block-text ul li:before {
        background: '.$fs['color_title'].';
    }
    ';
}
if($fs['button_color']){
    $style .= '
    .button {
        background-color: '.$fs['button_color'].';
        border-color: '.$fs['button_color'].';
    }
    .button:hover {
        color: '.$fs['button_color'].';
    }
    .cover-block .soc-links a svg {
        fill: '.$fs['button_color'].';
    }
    ';
}
if($fs['footer_bg']){
    $style .= '
    .footer-col-1, .footer-col-2 {
        background-color: '.$fs['footer_bg'].';
    }
    ';
}
if($fs['footer_color']){
    $style .= '
    .col-contacts__title, .footer-col-2 {
        color: '.$fs['footer_color'].';
    }
    .col-contacts__social svg {
        fill: '.$fs['footer_color'].';
    }
    ';
}

?>
<?php if($style): ?>
<?= "<style>" ?>
<?php echo $style ?>
<?= "</style>" ?>
<?php endif; ?>
</head>
<body <?php body_class('land-dc') ?> >
<header id="header-land-bc" class="header-land-bc flexbox align-between items-center">
    <a href="<?= home_url() ?>" class="logo-land-bc">
        <img class="logo" src="<?= get_template_directory_uri() ?>/img/logo_blue.svg" alt="">
    </a>
    <a href="mailto:sales@insart.com" class="header__email">sales@insart.com</a>
</header>
<div class="middle">
    <section class="top-block container">
        <h1 class="title-land">
            <?php echo $fs['title'] ?>
            <?php //            Building a Distributed <br>Fintech Team: Define Criteria ?>
        </h1>
        <div class="top__text text-land"><?php the_content() ?></div>
        <div class="btn-box">
            <button type="button" class="button" data-toggle="modal" data-target="#modal-form">download free guide</button>
        </div>
    </section>
    <section class="cover-block flexbox align-around items-center">
        <div class="img order-2">
            <?= the_post_thumbnail('full') ?>
<!--            <img src="--><?php //echo get_template_directory_uri() ?><!--/img/cover-1.jpg" alt="">-->
<!--            <img src="--><?php //echo get_the_post_thumbnail_url($post, 'full') ?><!--" alt="">-->
        </div>
        <div class="soc-links order-1">
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
    </section>
    <?php if($block_1 = $fs['block_1']): ?>
    <section class="container block-list">
        <h2 class="text-center title-block">
            <?php echo $block_1['title'] ?>
        </h2>
        <div class="list">
            <div class="num__items flexbox">
                <?php foreach ($block_1['list'] as $k => $val): ?>
                <div class="num__item"><span class="num"><?= $k < 9 ? '0' . ($k+1) : ($k+1) ?></span>
                    <div class="text"><?= $val['item'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif ?>
    <section class="block-text">
        <?php if($block_2 = $fs['block_2']): ?>
        <div class="container">
            <h2 class="text-center title-block"><?= $block_2['title'] ?></h2>
            <div class="block-content">
                <?= $block_2['text'] ?>
            </div>
        </div>
        <?php endif ?>
        <div class="btn-box text-center">
            <button type="button" class="button" data-toggle="modal" data-target="#modal-form">download free guide</button>
        </div>
    </section>
    <footer class="footer-dc">
        <div class="footer-inner flexbox">
            <div class="footer-col footer-col-1"></div>
            <div class="footer-col footer-col-2 col-contacts flexbox align-between items-center">
                <div class="h3 col-contacts__title">Contact us</div>
                <div class="col-contacts__email"><a href="mailto:sales@insart.com">sales@insart.com</a></div>
                <div class="col-contacts__site"><a href="https://www.insart.com/">https://www.insart.com/</a></div>
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
            </div>
            <div class="footer-col footer-col-3">
                <a href="#" class="link-to-top">
                    <svg width="34" height="48" viewBox="0 0 34 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.63204 15.6774C-0.0447459 16.3313 -0.0447459 17.4196 0.63204 18.0964C1.28596 18.7503 2.37431 18.7503 3.02671 18.0964L15.2927 5.83042L15.2927 46.3065C15.2942 47.25 16.0442 48 16.9877 48C17.9312 48 18.7056 47.25 18.7056 46.3065L18.7056 5.83042L30.9487 18.0964C31.6255 18.7503 32.7154 18.7503 33.3678 18.0964C34.0446 17.4196 34.0446 16.3298 33.3678 15.6774L18.198 0.507591C17.5441 -0.169197 16.4557 -0.169197 15.8033 0.507591L0.63204 15.6774Z" fill="#EB6928"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="footer_copyright text-center">
            © 2015-<?= date('Y', time()) ?> INSART SOFTWARE LLC
        </div>
    </footer>


    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.16448 8.01132L15.7403 1.47149C16.0555 1.15941 16.0555 0.654213 15.7403 0.342932C15.4258 0.0308547 14.915 0.0308547 14.6006 0.342932L8.03042 6.87718L1.3995 0.245541C1.08504 -0.0697212 0.574265 -0.0697212 0.259799 0.245541C-0.0546666 0.561598 -0.0546666 1.07317 0.259799 1.38843L6.88587 8.0153L0.235849 14.6286C-0.0786164 14.9406 -0.0786164 15.4458 0.235849 15.7571C0.550315 16.0692 1.06109 16.0692 1.37556 15.7571L8.01994 9.14943L14.6244 15.7547C14.9389 16.07 15.4497 16.07 15.7641 15.7547C16.0786 15.4387 16.0786 14.9271 15.7641 14.6118L9.16448 8.01132Z" fill="black"/>
                        </svg>

                    </button>
                    <h3 class="modal-title" id="myModalLabel">Please, fill out the form to download the guide</h3>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode($fs['form_code']); ?>

                </div>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <script>

        console.log(document.cookie);
        var thank_url = '<?= get_permalink($thank) ?>';

        document.addEventListener('wpcf7invalid', function (event) {
            console.log("INVALID", event);
        });
        document.addEventListener('wpcf7spam', function (event) {
            console.log("SPAM", event);
        });
        document.addEventListener('pcf7submit', function (event) {
            console.log("SUBMIT", event);
        });
        document.addEventListener('wpcf7mailsent', function (event) {
            console.log(event);
            Cookies.set('dc', 'true');
// var currentformid = event.detail.contactFormId;
            var currentformid = event.detail.id;

            console.log($('#' + currentformid).find('.wpcf7-mail-sent-ok'));
            $('#' + currentformid).find('.wpcf7-mail-sent-ok').hide();
            window.location.href = thank_url;

        }, false);
    </script>
</div>
</body>
</html>