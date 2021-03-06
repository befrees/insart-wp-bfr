<?php
/**
 * Template name: API Catalog
 */
?>
<?php
$api_get = get_esc_var($_GET['api']);
$api_tags_get = get_esc_var($_GET['api-tags']);
$args = array(
    'post_type' => 'company',
    'tax_query' => array('relation' => 'AND',),
    'posts_per_page' => 12,
    'orderby' => ['title' =>'ASC'],
);
if($_GET['search']){
    $args['title_like'] = $_GET['search'];
}
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// echo $paged;

if ($paged != '') {
    $args['paged'] = $paged;
}

if ($api_get) {
    $args['tax_query'][] = array(
        'taxonomy' => 'type',
        'field' => 'id',
        'terms' => $api_get,
    );
}
if ($api_tags_get) {
    $args['tax_query'][] = array(
        'taxonomy' => 'api-tags',
        'field' => 'id',
        'terms' => $api_tags_get,
    );
}

query_posts($args);
// dd($wp_query);
?>
<?php get_header('api') ?>

<div class="wrapper">
   <div class="middle nopadding-top content-bg" id="middle">
        <div class="container-big">
            <div class="row-">
                <!-- <h1 class="h1 text-center"><?php // echo get_the_title(); ?></h1> -->
                <div class="content-catalog">
                    <div class=" col-sidebar">
                        <?php get_template_part('parts/_api-sidebar') ?>
                    </div> <!-- .col-sidebar -->
                    <div class=" col-catalog-list" id="ajax-content">

                    <?php if(have_posts()): ?>
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
                        <?php else: ?>
                            <?php if ($_GET['search']) : ?>
                            <div class="text-eempty-search">
                                <?php the_field('text_for_search') ?>
                            </div>
                            <?php endif ?>
                        <?php endif; ?>
                    <div class="bottom-text-api">
                        <?php the_content() ?>
                        <?php //the_field('body_custom_text', $post) ?></div>
                    </div>
               </div>
            </div>
        </div>
    </div> <!-- #middle -->
</div>
<?php //get_template_part('template-parts/api-form'); ?>
<?php get_footer('api'); ?>