<?php $content = get_sub_field('content'); ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php if ($content): ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-3">
                <?php echo $content; ?>
            </div>
        </div>


<ul class="reservation_things">
    <li class="plane"><a href="#"><span></span>Vols</a></li>
    <li class="sun"><a href="#"><span></span>Séjours</a></li>
    <li class="bed"><a href="#"><span></span>Hotels</a></li>
    <li class="house"><a href="#"><span></span>Appartements</a></li>
    <li class="car"><a href="#"><span></span>Location de voiture</a></li>
</ul>


    </div>
<?php endif; ?>
<div class="background_image" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
