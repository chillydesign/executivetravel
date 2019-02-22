<?php get_header(); ?>


<div class="container">



        <h1><?php _e( 'Offres', 'webfactor' ); ?></h1>


        <section>
            <?php get_template_part('sections/offres'); ?>
        </section>


        <?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>


</div> 	<!-- end .container -->



<?php get_footer(); ?>
