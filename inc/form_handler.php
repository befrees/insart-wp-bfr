<?php

function select_api_cf7_func() {
	$args = [
		'post_type' => 'company',
		'posts_per_page' => '-1',
		'orderby' => ['title'=>'ASC']
	];
	$res = new WP_Query($args);
	$out = '<span class="wpcf7-form-control-wrap">
<select name="select_api" class="form-control form-select select_api_list">';
$out .= '<option value="">Select Solution</option>';
foreach ($res->posts as $k => $item){
	$out .= '<option value="' . $item->post_title. '">' . $item->post_title . '</option>';
}
$out .= '</select>
</span>';

return $out;
	

	

}
function select_api_cf7_func_____() {
	$args = array(
	'taxonomy' => 'type',
	'hide_empty' => false,
	'hierarchical' => 0
);
$_terms = get_terms( $args );

$terms_tree = ArrayHelpers::arrayTree(ArrayHelpers::toArray($_terms),0,'term_id');

$terms = getLastLevel($terms_tree);

$single_term = '0';
if(is_singular( 'company' )){
	global $post;
	$_terms = get_the_terms( $post, 'type' );

	if($_terms){
		$single_term = $_terms[0]->term_id;
	}
	
}
/*
$out = '<div class="form-group switch-api-form"><div class="chose-api-btn" id="chose-api-btn" data-api-text="CHOSE API">CHOSE API</div></div>';
$out .= '<div class="box-select">';
$out .= '<div class="close-btn btn-api-reset"><svg xmlns="http://www.w3.org/2000/svg" width="21.99" height="21.99" viewBox="0 0 21.99 21.99"><g id="f9abb0b2-f105-4131-858f-1e1d6d8363e1" data-name="Слой 2"><g id="a41700fb-ebc5-4a3a-ad2a-fa5a4ff8ce87" data-name="Слой 1"><path d="M1,1,21,21M21,1,1,21" style="fill:none;stroke:#df6622;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2px"></path></g></g></svg></div>';
$out .= ' 	<h4>CHOSE API</h4>';
$out .= '	<div class="box-checkboxes scrollbar-inner">';

			
	 foreach($terms as $term){
	 	// dd($term);
	 		$out .= '<div class="item-term-api-sel">
			<input type="radio" name="select_api" ';
			if($single_term == $term['term_id']){
				$out .= ' checked="checked"';
			}
			$out .= 'id="term-api-sel-' . $term['term_id'] .'" 
			value="' . $term['name'] . '" class="api-sel">
			<label for="term-api-sel-' . $term['term_id'] . '">' . $term['name'] . '</label>
			</div>';/**/
			/*
	}
	$out .='</div>';
$out .='<div class="text-center form-group"><button type="button" class="back-form-api btn-link text-uppercase">BACK TO FORM</button></div>';
$out .='</div>';
*/
$out = '<span class="wpcf7-form-control-wrap">
<select name="select_api" class="form-control form-select">';
$out .= '<option value="">Select Solution</option>';
foreach($terms as $term){
	$out .= '<option value="' . $term['name'] . '">' . $term['name'] . '</option>';
}
$out .= '</select>
</span>';

return $out;
// return print_r($terms, 1);
 }
wpcf7_add_form_tag('select_api', 'select_api_cf7_func');
wpcf7_add_form_tag('text_api', 'text_api_cf7_func');

function text_api_cf7_func(){
	return '<!--<label for="text-api-area" class="pull-left label-area-api">Message</label> --><textarea id="text-api-area" name="your-message" contenteditable="true" class="textarea wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea>';
	// <textarea id="message-api" name="your-message" hidden></textarea>';
}
