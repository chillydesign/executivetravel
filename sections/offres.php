<?php $offres_arg = array(
    'post_type' => 'offre',
    "posts_per_page" => 6
); ?>
<?php $offres_loop = new WP_Query( $offres_arg ); ?>

<?php if ( $offres_loop -> have_posts() ) : ?>
    <div class="offers">
        <h2>Offres</h2>
        <ul class="slickslider">
            <?php while ( $offres_loop -> have_posts() ) : $offres_loop -> the_post(); ?>
                <?php $image = thumbnail_of_post_url( get_the_ID(), 'medium' ); ?>
                <li class="offre">
                    <a href="<?php the_permalink(); ?>">
                        <div class="slide_image" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);" ></div>
                        <p><?php the_title(); ?></p>
                    </a>
                </li><!-- END OF .offre -->

            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
