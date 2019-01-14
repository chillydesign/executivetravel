<?php $partners = get_sub_field('partners'); ?>
<div class="partners_intro">
  <?php echo get_sub_field('intro'); ?>
</div>
<ul class="slickslider_partners">
    <?php foreach ($partners as $partner): ?>
        <?php $logo = $partner['logo']; ?>
        <li>
            <!-- <a href="#"> -->
            <div class="slide_image" style="background-image: url('<?php echo $logo; ?>'); background-size:contain;" ></div>
            <!-- </a> -->
        </li>
    <?php endforeach; ?>
</ul>
