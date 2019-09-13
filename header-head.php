    <title><?php wp_title('|', true, 'right'); ?></title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <!-- For mobile web app on home screen -->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-capable" content="yes">
    
    <?php wp_site_icon() ?>

<?php wp_head()?>

<?php if(is_page_template('page_landing.php')){ ?>
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Roboto:300i,400,400i,500,500i,700,700i,900,900i|Ubuntu:400,400i,500,500i,700,700i" rel="stylesheet">
<?php } else { ?>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<?php } ?>