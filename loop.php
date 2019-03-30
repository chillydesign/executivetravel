



<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <div class="column ">
        <div class="news_item_content">
            <h2><a  href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <p class="news_date"><em><?php echo get_the_date(); ?></em></p>
            <div class="news_excerpt"><?php echo html5wp_excerpt(); ?></div>
        </div>
    </div>



<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <div class="column">
        <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>
    </div class="column">
    <!-- /article -->

<?php endif; ?>
