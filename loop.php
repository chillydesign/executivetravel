<div class="row">
	<?php $i = 1; ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="col-sm-4">
			<div class="news_box actualite_news_box">
				<div class="news_box_content">
					<h5><?php the_title(); ?></h5>
					<div class="news_date"><?php echo get_the_date(); ?></div>
					<div class="news_excerpt"><?php echo html5wp_excerpt(); ?></div>
					<a class="readmore" href="<?php the_permalink();?>">Lire plus</a>
				</div>
			</div>
		</div>
	<?php if ($i % 3 == 0){echo '</div><div class="row">';}; ?>

		<?php $i++; ?>
	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

</div>
