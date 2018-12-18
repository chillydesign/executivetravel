<?php get_header(); ?>




<!-- section -->
<section >


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if(get_field('sidebar_type') != 'none'): ?>



						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php include('section-loop.php'); ?>


							<div class="container">
								<?php the_content(); ?>
								<?php // comments_template( '', true ); // Remove if you don't want comments ?>
								<?php // edit_post_link(); ?>
							</div>



						</article>
						<!-- /article -->


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
