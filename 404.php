<?php get_header(); ?>



<?php $background_image  =  get_site_url () . '/wp-content/uploads/2018/12/traveller.jpg' ; ?>
<!-- article -->
<section id="post-404"  style="background-image: url(<?php echo $background_image;  ?>">

    <div class="container">
        <h1><?php _e('404 - Vous êtes perdu?', 'webfactor'); ?></h1>
        <p>
            <?php _e('La page que vous recherchez n\'existe pas ou a été déplacée.', 'webfactor'); ?>
        </p>

        <h6><a href="<?php echo get_home_url();?>"><?php _e('Retour à l\'accueil', 'webfactor'); ?></a></h6>



    </section>
    <!-- /section -->


    <?php //get_sidebar(); ?>

    <?php get_footer(); ?>
