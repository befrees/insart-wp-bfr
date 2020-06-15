<?php
/**
 * Temp__late name: API Catalog
 */
?>
<?php
$api_get = get_esc_var($_GET['api']);
$api_tags_get = get_esc_var($_GET['api-tags']);
$args = array(
    'post_type' => 'company',
    'tax_query' => array('relation' => 'AND',),
    'posts_per_page' => 6,
);
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
<section class="api-header">
    <div class="container-big">
        <div class="api-header__col">
            <h1 class="api-header__title">Featured APIs</h1>
            <div class="api-header__subtitle">
                <p>Featured APIs from Official Providers who have partnered with Insart API</p>
            </div>
        </div>
        
    </div>
</section>
<div class="wrapper">
   <div class="middle nopadding-top content-bg" id="middle">
        <div class="container-big">
            <div class="row-">
                <!-- <h1 class="h1 text-center"><?php // echo get_the_title(); ?></h1> -->
                <div class="content-catalog">
                    <div class=" col-sidebar">
                        <div class="toggle-sidebar-btn">
                            <span class="hide-open">Show API Navigation Bar</span><span class="hide-close">Hide API Navigation Bar</span> <span class="arrow-sdb"></span></div>
                        <div class="inner-sidebar">
                            <?php
                            $args = array(
                                'taxonomy' => 'type',
                                'hide_empty' => false,
                                'hierarchical' => 0
                            );
                            $_terms = get_terms($args);
                            // dd(hexdec('#ff00ff'));
                            // $vars = get_query_var('api');
                            $terms_tree = ArrayHelpers::arrayTree(ArrayHelpers::toArray($_terms), 0, 'term_id'); ?>
                            <?php foreach ($terms_tree as $term) :
                                $id_color = (get_term_meta($term['term_id'], 'color', true)) or '#333'; ?>
                                <div class="block-part-cat open" data-color="<?= $id_color ? $id_color : '#333' ?>">
                                    <div class="head h4" style="background-color: <?= $id_color ?>"><?= $term['name'] ?><span class="arrow-sdb"></span></div>
                                    <?php if ($level2 = $term['child']) : ?>
                                        <div class="toggle-block">
                                            <?php foreach ($level2 as $term2) : ?>
                                                <div class="block-level-2" style="background-color: <?= hex2rgba($id_color, '.1') ?>">
                                                    <div class="title b2"><?= $term2['name'] ?></div>
                                                    <?php if ($level3 = $term2['child']) : ?>
                                                        <?php foreach ($level3 as $item) : ?>
                                                            <div class="row-filter">
                                                                <input type="checkbox" <?= ($api_get && in_array($item['term_id'], $api_get)) ? 'checked' : '' ?> name="api[]" value="<?= $item['term_id'] ?>" id="api_<?= $item['term_id'] ?>" class="checkbox-styler-color" data-color="<?= $id_color ? $id_color : '#333' ?>">
                                                                <label for="api_<?= $item['term_id'] ?>"><?= $item['name'] ?></label>
                                                                <span class="icon-ic-spin fa-spin">
                                                                <svg class="ic-spin">
                                                                <use xlink:href="#icon-ic-spin" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                                </svg>
                                                                </span>
                                                            </div>
                                                        <?php endforeach ?>
                                                    <?php endif; ?>
                                               </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                            <div class="toggle-sidebar-btn toggle-sidebar-btn-bottom" data-text="Hide API Navigation Bar">Hide API Navigation Bar <span class="arrow-sdb"></span></div>
                        </div>
                    </div> <!-- .col-sidebar -->
                    <div class=" col-catalog-list" id="ajax-content">
                        <div class="row-catalog-list" id="load_more_gs">
                           <?php while (have_posts()) : the_post(); ?>
                           <?php get_template_part('/parts/_item_comp'); ?>
                            <?php endwhile; ?>
                        </iv>
                        <div class="preloader-flag"></div>
                        <?php if ($wp_query->max_num_pages > 1) : ?>
                            <div id="data-ajax" data-ajaxurl='<?php echo site_url() ?>/wp-admin/admin-ajax.php' data-true_posts='<?php echo serialize($wp_query->query_vars); ?>' data-current_page='<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>' data-max_pages='<?php echo $wp_query->max_num_pages; ?>' hidden></div>
                       <?php endif; ?>
                        <?php //my_pagenavi() 
                        ?>
                    </div>
               </div>
            </div>
        </div>
    </div> <!-- #middle -->
</div>
<?php //get_template_part('template-parts/api-form'); ?>
<?php get_footer(); ?>