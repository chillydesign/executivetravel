<?php $content = get_sub_field('content'); ?>
<?php $links = get_sub_field('links'); ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php if ($content): ?>
    <div class="container">
        <div class="row">
        <div class="col-sm-6 col-sm-push-6">
        <?php echo $content; ?>
        </div>
        </div>
        <div class="large_image_links">
            <?php foreach($links as $link): ?>
                <?php $page = $link['page']; ?>
                <?php $image = $link['image']; ?>
                <a class="large_image_link" href="<?php echo $page->guid; ?>" style="background-image: url(<?php echo $image['url']; ?>);" >
                    <span><?php echo $page->post_title; ?></span>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
<?php endif; ?>

<div class="background_image" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>