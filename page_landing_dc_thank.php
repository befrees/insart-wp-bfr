<?php
/*
*Template Name: Define Criteria Thank
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:300,400,600,700,600i,700i&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/land-dc.css">
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
            <a href="<?= $fs['file'] ?>" class="button" target="_blank" download="">download free guide</a>
        </div>
        <div class="top__text text-land-thank"><?php the_content() ?></div>
    </section>
    <section class="other__block flexbox align-center">
        <?php if($other = $fs['other_pages']): ?>
        <h2 class="title-block other__title"><?= $fs['title_other_pages'] ?></h2>
        <div class="other__items flexbox">
            <?php foreach($other as $k => $item): ?>
                <div class="other__item">
                    <img src="<?= $item['image']['url'] ?>" alt="">
                    <div class="other__overlay"><a href="<?= $item['link'] ?>" class="button other__button">learn more</a></div>
                </div>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </section>

    <footer class="footer-dc footer-thank">
        <div class="footer-inner flexbox align-between items-center">
            <div class="col-contacts__social soc-links">
                <a href="#">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 18.2422V29.3334H23.57V18.985C23.57 16.3854 22.64 14.6113 20.3126 14.6113C18.5359 14.6113 17.4785 15.8069 17.0134 16.9635C16.8438 17.377 16.8001 17.9525 16.8001 18.5312V29.3334H10.368C10.368 29.3334 10.4546 11.8066 10.368 9.99074H16.7995V12.7325C16.7864 12.753 16.7695 12.7751 16.7572 12.795H16.7995V12.7325C17.654 11.4164 19.18 9.53633 22.5957 9.53633C26.8276 9.53626 30 12.3009 30 18.2422ZM3.63968 0.666626C1.43926 0.666626 0 2.10993 0 4.00793C0 5.86456 1.39762 7.35167 3.55431 7.35167H3.59728C5.84032 7.35167 7.23529 5.86484 7.23529 4.00793C7.19302 2.10993 5.84032 0.666626 3.63968 0.666626ZM0.382012 29.3334H6.8117V9.99074H0.382012V29.3334Z" fill="#4C4CA6"/>
                    </svg>
                </a>
                <a href="#">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 7.69886C28.8958 8.18813 27.711 8.51994 26.4662 8.66808C27.7373 7.90695 28.7102 6.69969 29.1713 5.26558C27.9791 5.97043 26.6631 6.48224 25.2608 6.75969C24.1379 5.5618 22.5407 4.81567 20.7691 4.81567C17.3704 4.81567 14.6147 7.57141 14.6147 10.9683C14.6147 11.45 14.669 11.9206 14.774 12.3705C9.66 12.1137 5.12525 9.66352 2.0902 5.94043C1.55966 6.84778 1.25784 7.90504 1.25784 9.03362C1.25784 11.1689 2.34515 13.0529 3.99485 14.1551C2.98628 14.1214 2.0377 13.844 1.20726 13.3828V13.4596C1.20726 16.4403 3.32936 18.928 6.14319 19.4942C5.62765 19.6329 5.08402 19.7097 4.52162 19.7097C4.12422 19.7097 3.7399 19.6704 3.36309 19.5954C4.14667 22.0418 6.41878 23.8208 9.11079 23.8696C7.00554 25.5193 4.35103 26.4997 1.46784 26.4997C0.971079 26.4997 0.481765 26.4697 0 26.4154C2.72387 28.1645 5.95765 29.1843 9.43324 29.1843C20.7542 29.1843 26.9425 19.8072 26.9425 11.675L26.9218 10.8783C28.1309 10.0159 29.177 8.93239 30 7.69886Z" fill="#4C4CA6"/>
                    </svg>
                </a>
            </div>
            <div class="by-insart order-3"><span>by INSART</span></div>
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
                    <?php echo do_shortcode('[contact-form-7 id="2205" title="Form DC"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/script.js"></script>
</div>
</body>
</html>