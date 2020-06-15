<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package insart-wp
 */
$page_api = bfr_get_post_by_tpl('catalog-tpl.php');

    $args = array(
        'taxonomy' => 'type',
        'hide_empty' => false,
        'hierarchical' => 0
    );
    $_terms = get_terms($args);
    // dd(hexdec('#ff00ff'));
    // $vars = get_query_var('api');
    // dd($_terms);
    $terms_tree = ArrayHelpers::arrayTree(ArrayHelpers::toArray($_terms), 0, 'term_id'); ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/api.css">
</head>

<body <?php body_class(); ?>>

    <header class="header-api">
        <div class="header-api__top">
            <a href="<?php echo home_url("/"); ?>" class="header-api__logo">
            <img class="logotip logo-api-1" src="<?php bloginfo('template_url'); ?>/img/logo_blue.svg" alt="" />
            <img class="logotip logo-api-2" src="<?php bloginfo('template_url'); ?>/assets/images/logotip.svg" alt="" />
        </a>
            <div class="header-api__search">
                <form action="<?= get_permalink($page_api) ?>" class="header-api__form api-search">
                    <button type="submit" class="api-search__btn">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5306 12.5243L17.3431 15.8743C17.4489 16.0001 17.5288 16.1455 17.5783 16.3022C17.6279 16.4589 17.646 16.6238 17.6317 16.7875C17.6174 16.9512 17.571 17.1104 17.4951 17.2562C17.4192 17.4019 17.3153 17.5313 17.1894 17.6368L16.0594 18.5843C15.9337 18.6899 15.7884 18.7697 15.6318 18.8191C15.4752 18.8685 15.3105 18.8866 15.1469 18.8723C14.9834 18.858 14.8242 18.8117 14.6786 18.7359C14.533 18.6601 14.4037 18.5563 14.2981 18.4306L11.4319 15.0143C10.8069 15.3006 10.1356 15.5131 9.42564 15.6381C5.04064 16.4106 0.873143 13.5643 0.118143 9.28184C-0.636857 4.99934 2.30564 0.901841 6.69064 0.126841C11.0756 -0.646909 15.2431 2.19934 15.9981 6.48184C16.1829 7.53579 16.148 8.61655 15.8954 9.65635C15.6429 10.6961 15.1783 11.6726 14.5306 12.5243ZM8.82439 12.2243C11.2794 11.7931 12.9269 9.49684 12.5044 7.09934C12.0819 4.69934 9.74814 3.10684 7.29189 3.53934C4.83689 3.97184 3.18939 6.26809 3.61189 8.66684C4.03439 11.0656 6.36814 12.6581 8.82439 12.2256V12.2243Z" fill="#757375" />
                        </svg>

                    </button>
                    <input type="text" name="search" id="api-search" class="api-search__input" placeholder="Search" value="<?= $_GET['search'] ?>">
                </form>
            </div>
            <div class="header-api__cat">
                <div class="header-api__cat_dropdown dropdown">
                    <button class="header-api__cat_btn"  data-toggle="dropdown">
                        <span class="ic">
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0H4V4H0V0Z" fill="#001388" />
                                <path d="M7 0H11V4H7V0Z" fill="#001388" />
                                <path d="M14 0H18V4H14V0Z" fill="#001388" />
                                <path d="M0 6H4V10H0V6Z" fill="#001388" />
                                <path d="M7 6H11V10H7V6Z" fill="#001388" />
                                <path d="M14 6H18V10H14V6Z" fill="#001388" />
                                <path d="M0 12H4V16H0V12Z" fill="#001388" />
                                <path d="M7 12H11V16H7V12Z" fill="#001388" />
                                <path d="M14 12H18V16H14V12Z" fill="#001388" />
                            </svg>
                        </span>
                        <span class="lbl">Categories</span>
                    </button>
                    <ul class="dropdown-menu header-api__dropdown" aria-labelledby="dLabel">
                    <?php foreach ($terms_tree as $k => $term) : ?>
                        <li>
                            <?php /* ?>
                            <a href="<?= $page_api_link . "?api[]=" . $term['term_id']; ?>"><?= $term['name'] ?></a>
                            <?php */ ?>
                            <a href="<?= get_term_link($term['term_id']) ?>"><?= $term['name'] ?></a>
                        </li>
                    <?php endforeach ?>    
                    </ul>
                </div>
            </div>
            <div class="header-api__button"><a href="<?= get_permalink(PAGE_ADD_API) ?>" class="header-api__btn">Add Your Solution </a></div>
            <div class="menu-btn-wrap">
                <button class="btn-open-menu">
                    <i class="nav-btn"></i>
                    <i class="nav-btn"></i>
                    <i class="nav-btn"></i>
                </button>
            </div>
        </div>
    <?php get_template_part('parts/_top-menu') ?>
    </header>
    <section class="api-header">
    <div class="container-big">
        <div class="api-header__col">
            <h1 class="api-header__title"><?= get_field('title_custom_text', PAGE_CATALOG) ?></h1>
            <div class="api-header__subtitle">
            <?= get_field('body_custom_text', PAGE_CATALOG) ?>
            </div>
        </div>
        
    </div>
</section>