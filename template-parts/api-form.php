<?php
global $post;
 if(is_page_template('catalog-tpl.php')){
	$page = $post;
} else {
	$page = bfr_get_post_by_tpl('catalog-tpl.php');
}
// dd($page);
$form = get_field('form', $page);
// dd($form);
 ?>
<div class="block-form-api">
	<div class="container-big">
		<div class="row">
			<div class="form-api-box">
				<h2 class="title-form-api"><?= ($form_title = get_field('form_title', $page)) ? $form_title : 'Request a quote
for API integration' ?></h2>
<div class="form-api-subtitle"><?= ($form_subtitle = get_field('form_subtitle', $page)) ? $form_subtitle : 'Start building your own integration. Fill in your company name, choose solution and ...' ?></div>
<div class="form-api-inner form-bg">
			<?php echo do_shortcode( $form ); ?>
	
</div>
<!-- <div class="bottom-form-api text-center">Or just write us <br>sales@insart.com
</div> -->
			</div>
		</div>
	</div>
</div>

