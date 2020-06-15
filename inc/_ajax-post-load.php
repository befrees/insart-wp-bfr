<?php


/**
* Подгрузка постов
*/
function true_load_posts(){

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    if(array_key_exists('type', $args)){
    	$args['tax_query'] = array(
    		array(
			'taxonomy' => 'type',
			'field' => 'slug',
			'terms' => $args['type'],
			)
    	);
    }
    // dd($args);
    $q = new WP_Query($args);
    // dd($q);
    if( $q->have_posts() ):
        while($q->have_posts()): $q->the_post();
		   
            get_template_part('/parts/_item_comp');
        
    endwhile;
     endif;
    wp_reset_postdata();
    die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


add_action('wp_ajax_loadsearch', 'bfr_load_search');
add_action('wp_ajax_nopriv_loadsearch', 'bfr_load_search');

function bfr_load_search(){
    add_filter('posts_search', 'wph_search_by_title', 500, 2);
    $args = [
        's' => $_POST['str'],
        'post_type' => 'company'
    ];
    // $args = $_POST;
    $q = new WP_Query($args);
    // dd($q);
    $arr = [];
    foreach ($q->posts as $key => $v) {
        $_a = [
            'value' => $v->post_title,
            'label' => apply_highlight($v->post_title, $args['s']) . ' <a href="' . get_permalink($v) . '"> >> View</a>',
        ];
        $arr[] = $_a;
    }
    $out = json_encode($arr);
    echo $out;
    die();
}

//поиск только по заголовкам записей start
function wph_search_by_title($search, &$wp_query) {
    global $wpdb;
    if (empty($search)) return $search;
 
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search = $searchand = '';
 
    foreach ((array) $q['search_terms'] as $term) {
       $term = esc_sql(like_escape($term));
       $search.="{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
       $searchand = ' AND ';
    }
 
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
