<div class="item-card item-card-company">
    <div class="item-card-company-inner" data-id="<?php the_ID() ?>">
        <a href="<?php the_permalink( ) ?>" class="item-card-company-top">
            <div class="img">
                <?php the_post_thumbnail() ?>
            </div>
            <div class="h4"><?php the_title(); ?></div>
        </a>
        <div class="entry-company">
        <?php //echo bfr_excerpt(['maxchar' => 150, 'autop' => false, 'more_text' => '...']) ?>    
        <?php the_excerpt() ?></div>
        <?php /* ?><div class="link-row"><a href="<?php the_permalink( ) ?>">> More Details</a></div>
        <?php */ ?>
        <?php if($tags = bfr_order_tags(get_the_terms(get_the_ID(), 'type'), get_the_ID())): //dd($tags); ?>
            <div class="tags-card text-center">
                <div class="tags-card__inner">
                   
                <?php //$primaryCat = get_primary_taxonomy_id(get_the_ID(), $taxonomy = 'type');
                // echo $primaryCat;
                 ?>
                <?php foreach($tags as $k => $tag): ?>
                    <?php /* ?>
                        <a href="#<?= $tag->slug ?>" data-id="<?= $tag->term_id ?>">#<?= $tag->name ?></a><?php */ ?>
                        <a href="<?= get_term_link($tag->term_id) ?>">#<?= $tag->name ?></a>
                    <?php endforeach; ?> 
                </div>
                </div>
        <?php endif ?>
            
    </div>
</div>