<?php $offres_arg = array(
    'post_type' => 'offre',
    "posts_per_page" => 6
); ?>
<?php $offres_loop = new WP_Query( $offres_arg ); ?>

<?php if ( $offres_loop -> have_posts() ) : ?>
    <div class="offers">
        <div class="offers_slider_container">
            <div id="offers_slider">
                <?php while ( $offres_loop -> have_posts() ) : $offres_loop -> the_post(); ?>
                    <?php $image = thumbnail_of_post_url( get_the_ID(), 'medium' ); ?>
                    <div class="offre">
                        <div class="offre_img" style="background-image:url(<?php $image; ?>)">
                        </div>
                        <h3 ><?php the_title(); ?></h3>
                        <div class="offre_content">
                            <?php the_content(); ?>
                            <a class="readmore" href="<?php the_permalink();?>">
                                <h6>afficher l'offre</h6>
                            </a>
                        </div>
                    </div><!-- END OF .offre -->

                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
