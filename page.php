<?php get_header(); ?>




<!-- section -->
<section >

	<h1 class="container"><?php the_title(); ?></h1>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if(get_field('sidebar_type') != 'none'): ?>

			<div class="container parent_container">
				<div class="row">
					<div class="col-sm-8">
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php include('section-loop.php'); ?>


							<div class="container">
								<?php the_content(); ?>
								<?php // comments_template( '', true ); // Remove if you don't want comments ?>
								<?php edit_post_link(); ?>
							</div>



						</article>
						<!-- /article -->

					</div>
					<div class="col-sm-4">
						<?php if(get_field('sidebar_type') == 'image'): ?>
							<img src="<?php echo get_field('sidebar_image')['url']; ?>" alt="">
						<?php elseif(get_field('sidebar_type') == 'content_image') : ?>
							<img class="top_sidebar_image" src="<?php echo get_field('sidebar_image')['url']; ?>" alt="">
						<div class="sidebar"><?php echo get_field('sidebar'); ?></div>
					<?php else : ?>
						<div class="sidebar"><?php echo get_field('sidebar'); ?></div>
					<?php endif; ?>
					</div>
				</div>
			</div>
		<?php else: ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="container parent_container">
					<?php include('section-loop.php'); ?>
				</div>


					<?php the_content(); ?>
					<?php // comments_template( '', true ); // Remove if you don't want comments ?>
					<?php edit_post_link(); ?>
				</div>



			</article>
			<!-- /article -->
		<?php endif; ?>

	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="container">

		<h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->




<?php get_footer(); ?>
