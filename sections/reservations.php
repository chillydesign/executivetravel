<?php $content = get_sub_field('content'); ?>
<?php $flight_link = get_sub_field('flight_link'); ?>
<?php $stay_link = get_sub_field('stay_link'); ?>
<?php $hotel_link = get_sub_field('hotel_link'); ?>
<?php $flat_link = get_sub_field('flat_link'); ?>
<?php $car_link = get_sub_field('car_link'); ?>
<?php $insurance_link = get_sub_field('insurance_link'); ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php if ($content): ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-3">
                <?php echo $content; ?>
            </div>
        </div>


<ul class="reservation_things">
<?php if ($flight_link): ?>
    <li class="plane">
        <a target="_blank" href="<?php echo $flight_link; ?>"><span></span><em><?php _e('Vols', 'webfactor'); ?></em></a>
    </li>
<?php endif; ?>
<?php if ($stay_link): ?>
    <li class="sun">
        <a target="_blank" href="<?php echo $stay_link; ?>"><span></span><em><?php _e('Séjours', 'webfactor'); ?></em></a>
    </li>
    <?php endif; ?>
    <?php if ($hotel_link): ?>
    <li class="bed">
        <a target="_blank" href="<?php echo $hotel_link; ?>"><span></span><em><?php _e('Hotels', 'webfactor'); ?></em></a>
    </li>
    <?php endif; ?>
    <?php if ($flat_link): ?>
    <li class="house">
        <a target="_blank" href="<?php echo $flat_link; ?>"><span></span><em><?php _e('Appartements', 'webfactor'); ?></em></a>
    </li>
    <?php endif; ?>
    <?php if ($car_link): ?>
    <li class="car">
        <a target="_blank" href="<?php echo $car_link; ?>"><span></span><em><?php _e('Location de voiture', 'webfactor'); ?></em></a>
    </li>
    <?php endif; ?>
    <?php if ($insurance_link): ?>
    <li class="insurance">
        <a target="_blank" href="<?php echo $insurance_link; ?>"><span></span><em><?php _e('Assurances', 'webfactor'); ?></em></a>
    </li>
    <?php endif; ?>
</ul>


    </div>
<?php endif; ?>
<div class="background_image" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
