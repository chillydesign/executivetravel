<?php get_header(); ?>


<?php $home_id = get_option( 'page_on_front' ); ?>
<?php $background_image = thumbnail_of_post_url( $home_id, 'large' );  ?>
<section class="section  section_large_image_header">
    <h1>
        <div class="container">
            <?php _e( 'Offres', 'webfactor' ); ?>
        </div>
    </h1>
    <div class="background_image" style="background-image: url(<?php echo $background_image; ?>);">
    </section>



    <section class="section  section_important_points">
        <div class="container">
            <?php if (have_posts()): $i = 0; while (have_posts()) : the_post(); ?>
                <?php $even_block = ($i % 2 == 0) ? 'even_bloc' : ''; ?>
                <?php $image = thumbnail_of_post_url( get_the_ID(), 'medium' );  ?>
                <div class="bloc  more_margin <?php echo $even_block; ?> ">
                    <div class="bloc_img" style="background-image:url('<?php echo $image; ?>');"></div>
                    <div class="bloc_text" >
                        <h3> <?php the_title(); ?> </h3>
                        <div><p><?php echo get_the_excerpt(); ?></p></div>
                    </div>
                </div>
                <?php $i++; endwhile; endif; ?>
            </div> 	<!-- end .container -->
        </section>





        <div class="container">
            <?php // get_template_part('loop'); ?>

            <?php  get_template_part('pagination'); ?>
        </div> 	<!-- end .container -->



        <?php get_footer(); ?>
