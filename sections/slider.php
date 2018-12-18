<?php $title = get_sub_field('title'); ?>
<?php $images = get_sub_field('images'); ?>
<?php if ($title): ?>
<h2><?php echo $title; ?></h2>
<?php endif; ?>

<ul class="slickslider">
    <?php foreach ($images as $image): ?>
        <li>
            <div class="slide_image" style="background-image: url(<?php echo $image['url']; ?>);" ></div>
            <p><?php echo $image['title']; ?></p>
        </li>
    <?php endforeach; ?>
</ul>
