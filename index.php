<?php get_header(); ?>


<!-- section -->
<section class="section  section_colonnes">
    <div class="grey colonnes_padding">
        <div class="container">

            <h1><?php _e( 'News', 'webfactor' ); ?></h1>


            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>
        </div>
    </div>
</section>
<!-- /section -->





<?php get_footer(); ?>
