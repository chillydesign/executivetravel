<?php get_header(); ?>


	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<h1>
							<?php the_title(); ?>

						</h1>

						<!-- post details -->
						<p class="date">Le <?php echo get_the_date(); ?></p>
						<!-- /post details -->

						<?php the_content(); // Dynamic Content ?>
						<?php if(get_field('attachment')) : ?>
							<p class="attachment"><a href="<?php echo get_field('attachment')['url']; ?>" target="_blank"><?php echo get_field('nom_du_fichier_joint'); ?></a></p>
						<?php endif; ?>

									<?php edit_post_link(); // Always handy to leave Edit Post Links available ?>
					</div>
				</div>
			</div>







			<?php //comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
