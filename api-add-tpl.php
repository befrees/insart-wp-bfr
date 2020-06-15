<?php
/**
 * Template name: Register your API
 */
global $pageCatalog;
?>

<?php get_header('api') ?>

<div class="wrapper">
   <div class="middle nopadding-top content-bg" id="middle">
       <br>
   <div class="breadcrumb">
                    <a href="<?= get_permalink($pageCatalog) ?>"><?= $pageCatalog->post_title ?></a> / <?php echo get_the_title(); ?>
                </div>
        <?php while (have_posts()) : the_post(); ?>
        <div class="add-api__top">
            <div class="container-big">
            
                <h1 class="h1 add-api__title"><?php echo get_the_title(); ?></h1>
                <div class="add-api__body"><?php the_content() ?></div>
            </div>
        </div>
        <div class="add-api__content">
            <div class="container-big"><?php the_field('body_custom_text') ?></div>
        </div>
        <div class="add-api-box-form">
            <div class="container-big">
                <div class="row-">
                    <div class="add-api__form">
                        <?php echo do_shortcode(get_field('form_code')) ?>
                </div>
                </div>
            </div>
        </div>
        
        <?php endwhile; ?>
    </div> <!-- #middle -->
</div>
<?php //get_template_part('template-parts/api-form'); ?>
<?php get_footer('api'); ?>