



<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <div class="news_item ">
        <div class="news_item_content">
            <h2><?php the_title(); ?></h2>
            <div class="news_date"><?php echo get_the_date(); ?></div>
            <div class="news_excerpt"><?php echo html5wp_excerpt(); ?></div>
            <a class="readmore" href="<?php the_permalink();?>">Lire plus</a>
        </div>
    </div>



<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>
        <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>
    </article>
    <!-- /article -->

<?php endif; ?>
