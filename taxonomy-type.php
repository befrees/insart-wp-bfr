<?php
global $pageCatalog;
// dd($pageCatalog);
$term = get_queried_object();
?>
<?php get_header('api') ?>

<div class="wrapper">
   <div class="middle nopadding-top content-bg" id="middle">
        <div class="container-big">
            <div class="breadcrumb">
                <a href="<?= get_permalink(PAGE_CATALOG) ?>"><?= $pageCatalog->post_title ?></a> / 
                <?php 
                $thisCat = get_queried_object();
                if ($thisCat->parent != 0)
                    echo get_term_parents_list($thisCat->parent, 'type', ['separator'=>' / '] );
                ?>
                <?= $term->name ?>
            </div>
            <div class="row-">
                <!-- <h1 class="h1 text-center"><?php // echo get_the_title(); ?></h1> -->
                <div class="content-catalog">
                    <div class=" col-sidebar">
                        <?php get_template_part('parts/_api-sidebar') ?>
                    </div> <!-- .col-sidebar -->
                    <div class=" col-catalog-list" id="ajax-content">
                        <div class="row-catalog-list" id="load_more_gs">
                           <?php while (have_posts()) : the_post(); ?>
                           <?php get_template_part('/parts/_item_comp'); ?>
                            <?php endwhile; ?>
                        </div>
                        <div class="preloader-flag__"></div>
                        <?php if ($wp_query->max_num_pages > 1) : ?>
                            <div id="data-ajax" data-ajaxurl='<?php echo site_url() ?>/wp-admin/admin-ajax.php' data-true_posts='<?php echo serialize($wp_query->query_vars); ?>' data-current_page='<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>' data-max_pages='<?php echo $wp_query->max_num_pages; ?>' hidden></div>
                       <?php endif; ?>
                        <?php bfr_pagenavi()  ?>
                        <?php wp_reset_query() ?>
                    <div class="bottom-text-api">
                        <?php //the_field('body_custom_text', $post) ?>
                        <?php echo category_description() ?>
                    </div>
                    </div>
               </div>
            </div>
        </div>
    </div> <!-- #middle -->
</div>
<?php //get_template_part('template-parts/api-form'); ?>
<?php get_footer('api'); ?>