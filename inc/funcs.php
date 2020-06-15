<?php

add_filter( 'posts_where', 'title_posts_where', 10, 2 );
function title_posts_where( $where, &$wp_query )
{
    global $wpdb;
    if ( $title_like = $wp_query->get( 'title_like' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $title_like ) ) . '%\'';
    }
    return $where;
}

function dd($array, $die = false)
{
    echo "<pre>", print_r($array, 1), "</pre>";
    if ($die)
        die();
}

function bfr_get_post_by_tpl($tpl){
    $query = new WP_Query( array(
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => $tpl,
    ) );
    // dd($query);
    return $query->post;
}


function bfr_reset_svg($svg)
{

    $pattern = ['/<\?xml.+\?>/', '/\s(?:fill|title|style|viewBox)=\".+?\"/is', '/<svg/'];
    $width = preg_match("/width=\"(.+?)\"/",$svg,$regs_w);
    $height = preg_match("/height=\"(.+?)\"/",$svg,$regs_h);

    $viewbox = ' viewBox="0 0 ' . $regs_w[1] . ' ' . $regs_h[1] . '" ';
    $replacement = ['', '', '<svg ' . $viewbox];
    $out = preg_replace($pattern, $replacement, $svg);
    return $out;
}

function bfr_get_svg($path)
{
    $svg = file_get_contents($path);
    return bfr_reset_svg($svg);
}

function bfr_clear_br($text){
	return str_replace('</div><br>', '</div>', $text);
}


function hex2rgb($hex){
    return list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
}

function hex2rgba($hex, $a='1'){
    $out_arr = list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    return 'rgba('. implode(',', $out_arr) .', '. $a .')';
}

function get_esc_var($var=array()){
    if(!$var) return $var;
    $out = array();
    foreach($var as $k=>$v){
        if((int)$v)
            $out[$k] = (int) $v;
    }
    return $out;
}

function bfr_pagenavi() {
    global $wp_query;
    // dd($wp_query);
    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => true,
        //'prev_text' => '«', //текст ссылки "Предыдущая страница"
        'prev_text' => '<', //текст ссылки "Предыдущая страница"
        //'next_text' => '»', //текст ссылки "Следующая страница"
        'next_text' => '>', //текст ссылки "Следующая страница"
        // 'type' => 'array',
    );

    $result = paginate_links($args);
// dd($result);
    // удаляем добавку к пагинации для первой страницы
    $result = str_replace('/page/1/', '', $result);
    $result = str_replace(__( '&hellip;' ), '<svg width="30" height="6" viewBox="0 0 30 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z" fill="#BFBFBF"/><path d="M18 3C18 4.65685 16.6569 6 15 6C13.3431 6 12 4.65685 12 3C12 1.34315 13.3431 0 15 0C16.6569 0 18 1.34315 18 3Z" fill="#BFBFBF"/><path d="M30 3C30 4.65685 28.6569 6 27 6C25.3431 6 24 4.65685 24 3C24 1.34315 25.3431 0 27 0C28.6569 0 30 1.34315 30 3Z" fill="#BFBFBF"/></svg>', $result);
    

    echo '<div class="pager">' . $result . '</div>';
}

function bfr_order_tags($tags, $post_id){
    $out = [];
    if($tags){
        $primaryCat = get_primary_taxonomy_id($post_id, $taxonomy = 'type');
        foreach($tags as $k=>$tag){
            // echo '[ ' . $tag->term_id . ' -- ' . $primaryCat . '] ';
            if($tag->term_id == $primaryCat){
                array_unshift($out, $tag);
            } else {
                $out[] = $tag;
            }
        }
    }
    return $out;
}

if ( ! function_exists( 'get_primary_taxonomy_id' ) ) {
    function get_primary_taxonomy_id( $post_id, $taxonomy='category') {
        $prm_term = '';
        if (class_exists('WPSEO_Primary_Term')) {
            $wpseo_primary_term = new WPSEO_Primary_Term( $taxonomy, $post_id );
            $prm_term = $wpseo_primary_term->get_primary_term();
        }
        if ( !is_object($wpseo_primary_term) && empty( $prm_term ) ) {
            $term = wp_get_post_terms( $post_id, $taxonomy );
            if (isset( $term ) && !empty( $term ) ) {
                return wp_get_post_terms( $post_id, $taxonomy )[0]->term_id;
            } else {
                return '';
            }
        }
        return $wpseo_primary_term->get_primary_term();
    }
}

function apply_highlight( $the_content , $the_query) {
 
    return preg_replace( '/' . $the_query . '/iu' , '<span class="hightlight">$0</span>' , $the_content );
 
}