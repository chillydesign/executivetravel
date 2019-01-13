<?php $background_image = get_sub_field('background_image'); ?>
    <div class="container">
        <div class="row">
        <div class="col-sm-6">
        <h1><?php the_title(); ?></h1>
        </div>
        </div>
    </div>

<div class="background_image" style="background-image: url(<?php echo $background_image['sizes']['large']; ?>);">

</div>
