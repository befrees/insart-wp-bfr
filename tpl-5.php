<?php
/**
 * Template name: Template page Explore
 */

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
