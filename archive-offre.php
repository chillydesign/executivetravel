<?php get_header(); ?>


<div class="container">



    <h1><?php _e( 'Offres', 'webfactor' ); ?></h1>


    <section class="section  section_important_points">
        <?php if (have_posts()): $i = 0; while (have_posts()) : the_post(); ?>
            <?php $even_block = ($i % 2 == 0) ? 'even_bloc' : ''; ?>
            <?php $image = thumbnail_of_post_url( get_the_ID(), 'medium' );  ?>
            <div class="bloc <?php echo $even_block; ?> ">
                <div class="bloc_img" style="background-image:url('<?php echo $image; ?>');"></div>
                <div class="bloc_text">
                    <h3> <?php the_title(); ?> </h3>
                    <div><?php echo get_the_excerpt(); ?></div>
                </div>
            </div>
            <?php $i++; endwhile; endif; ?>



    </section>


    <?php // get_template_part('loop'); ?>

    <?php  get_template_part('pagination'); ?>


</div> 	<!-- end .container -->



<?php get_footer(); ?>
