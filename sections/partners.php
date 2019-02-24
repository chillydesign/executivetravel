<?php

$part_args = array(
    'posts_per_page' => -1,
    'post_type' => 'partenaire'
)

 $partners =  get_posts($part_args);  ?>
<div class="partners_intro">
  <?php echo get_sub_field('intro'); ?>
</div>
<ul class="slickslider_partners">

    <?php foreach ( $partners as $post ) : setup_postdata( $post ); ?>
        <?php $logo = get_post_thumbnail_id( get_the_ID(), 'medium' ); ?>
        <li>
            <!-- <a href="#"> -->
            <div class="slide_image" style="background-image: url('<?php echo $logo; ?>'); background-size:contain;" ></div>
            <!-- </a> -->
        </li>
    <?php endforeach;  wp_reset_postdata();?>

</ul>
