<?php 

$api_get = get_esc_var($_GET['api']);
$api_tags_get = get_esc_var($_GET['api-tags']);
$page_api = bfr_get_post_by_tpl('catalog-tpl.php');
global $post;
// dd($post);
$page_api_link = get_permalink($page_api);
 ?>
 <h3 class="title-sidebar"><?php /* ?>
 <svg width="12" height="8" viewBox="0 0 12 8"  xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.84791 6.97584L11.6484 2.08645C12.1172 1.60885 12.1172 0.835477 11.6484 0.358062C11.1804 -0.119354 10.4195 -0.119354 9.95164 0.358061L5.99986 4.38298L2.04827 0.358061C1.58006 -0.119354 0.819126 -0.119354 0.351285 0.358061C0.116735 0.596952 -3.97661e-08 0.909741 -5.34465e-08 1.22271C-6.7127e-08 1.53569 0.116735 1.84847 0.351285 2.08737L5.15182 6.97676C5.61895 7.45234 6.37917 7.45234 6.84791 6.97584Z" />
</svg>
    <?php */ ?>
 <span>Categories</span></h3>
<div class="toggle-sidebar-btn">
    <span class="hide-open">View All</span>
    <span class="hide-close">View All</span> 
    <span class="arrow-sdb">
    <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.27725 5.70751L10.6777 1.7071C11.1074 1.31633 11.1074 0.683572 10.6777 0.292959C10.2487 -0.0976532 9.5512 -0.0976532 9.12234 0.292959L5.49988 3.58608L1.87758 0.292959C1.44839 -0.0976535 0.750867 -0.0976536 0.322012 0.292959C0.107008 0.488415 9.21138e-07 0.744333 9.09945e-07 1.0004C8.98752e-07 1.25647 0.107008 1.51239 0.322012 1.70784L4.72251 5.70826C5.1507 6.09737 5.84757 6.09737 6.27725 5.70751Z" fill="white"/>
</svg>

    </span></div>
<div class="inner-sidebar">
    <?php
    $args = array(
        'taxonomy' => 'type',
        'hide_empty' => true,
        'hierarchical' => true
    );
    $_terms = get_terms($args);
    // dd($_terms);
    // dd(hexdec('#ff00ff'));
    // $vars = get_query_var('api');
    $terms_tree = ArrayHelpers::arrayTree(ArrayHelpers::toArray($_terms), 0, 'term_id'); ?>
    <?php foreach ($terms_tree as $term) :
        $id_color = (get_term_meta($term['term_id'], 'color', true)) or '#333'; ?>
        <div class="block-part-cat open">
            <div class="head h4"><?= $term['name'] ?><span class="arrow-sdb">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.84791 6.65876L11.6484 1.99161C12.1172 1.53572 12.1172 0.797501 11.6484 0.341786C11.1804 -0.113929 10.4195 -0.113929 9.95164 0.341786L5.99986 4.18376L2.04827 0.341786C1.58006 -0.113929 0.819126 -0.113929 0.351285 0.341785C0.116735 0.569817 -3.79585e-08 0.868389 -5.10171e-08 1.16714C-6.40757e-08 1.46588 0.116735 1.76445 0.351285 1.99249L5.15182 6.65963C5.61895 7.1136 6.37917 7.1136 6.84791 6.65876Z" fill="#4E4E4E"/>
</svg>

                    <!-- <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.02028 -4.28251e-08C7.96885 -8.87842e-08 1.81323 0.000502001 1.01367 0.000501967C0.0132236 0.000501923 -0.280615 1.00887 0.284574 1.57527L4.33485 5.7091C4.70814 6.08385 5.31381 6.10341 5.68561 5.72766L9.73738 1.63547C10.2456 1.12426 10.0212 9.27876e-10 9.02028 -4.28251e-08Z" fill="#333333" />
                    </svg> -->
                </span></div>
            <?php if ($level2 = $term['child']) : ?>
                <div class="toggle-block">
                    <?php foreach ($level2 as $item) : ?>
                        
                        <div class="row-filter">
                            <a href="<?= get_term_link($item['term_id']) ?>" 
                            <?= ($item['slug'] == get_query_var('type')) ? 'class="active"' : '' ?> >
                            <?= $item['name'] ?></a>
                            
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    <div class="toggle-sidebar-btn toggle-sidebar-btn-bottom" data-text="Hide API Navigation Bar">Hide <span class="arrow-sdb">
    <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.27725 5.70751L10.6777 1.7071C11.1074 1.31633 11.1074 0.683572 10.6777 0.292959C10.2487 -0.0976532 9.5512 -0.0976532 9.12234 0.292959L5.49988 3.58608L1.87758 0.292959C1.44839 -0.0976535 0.750867 -0.0976536 0.322012 0.292959C0.107008 0.488415 9.21138e-07 0.744333 9.09945e-07 1.0004C8.98752e-07 1.25647 0.107008 1.51239 0.322012 1.70784L4.72251 5.70826C5.1507 6.09737 5.84757 6.09737 6.27725 5.70751Z" fill="white"/>
</svg>

    </span></div>
</div>