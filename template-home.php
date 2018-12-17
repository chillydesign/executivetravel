<?php /* Template Name: Page d'accueil */ get_header(); ?>


<!-- section -->
<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<section class="home-welcome">

				<div class="container">
					<div class="row">
						<div class="col-sm-4 visible-sm">
							<img src="<?php echo get_template_directory_uri(); ?>/img/chef-orchestre.png" alt="">
						</div>
						<div class="col-sm-7 col-sm-push-1">
							<?php echo get_field('welcome'); ?>
						</div>
					</div>

				</div>
			</section>

			<section class="blue_bg">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 box">
							<h3>Règlements</h3>
							<div class="box_content"><?php echo get_field('reglements'); ?></div>
							<h6><a href="<?php echo get_home_url();?>/reglements-et-publications">Tous les règlements</a></h6>
						</div>
						<div class="col-sm-4 box">
							<h3>Formulaires</h3>
							<div class="box_content"><?php echo get_field('formulaires'); ?></div>
							<h6><a href="<?php echo get_home_url();?>/infos-pratiques">Tous les formulaires</a></h6>
						</div>
						<div class="col-sm-4 box">
							<h3>Infos Pratiques</h3>
							<div class="box_content"><?php echo get_field('faq'); ?></div>
							<h6><a href="<?php echo get_home_url();?>/infos-pratiques">Toutes les questions</a></h6>
						</div>
					</div>
				</div>
				<div class="white_banner">
					<div class="container">
						<h4>Une question? N’hésitez pas à parcourir notre <br>
							<a href="<?php echo get_home_url(); ?>/infos-pratiques">Foire aux Questions</a> ou contactez-nous <a href="<?php echo get_home_url(); ?>/contact">ici</a>.</h4>
					</div>
				</div>
			</section>

			<section class="news">
				<div class="container">
					<h2>L'actualité FPMA</h2>
					<h6 class="all_news"><a href="<?php echo get_home_url();?>/news">Toute l'actualité</a></h6>
						<?php $recent_args = array(
							    "posts_per_page" => 5,
							    "orderby"        => "date",
							    "order"          => "DESC"
							);
							$recent_posts = new WP_Query( $recent_args );

							if ( $recent_posts -> have_posts() ) : ?>
							<div class="news_slider_container">
								<div id="news_slider">
						    <?php while ( $recent_posts -> have_posts() ) :
									 $recent_posts -> the_post(); ?>

						   		<div class="news_box">
										<div class="news_box_content">
											<h5><?php the_title(); ?></h5>
											<div class="news_date"><?php echo get_the_date(); ?></div>
										<div class="news_excerpt"><?php echo html5wp_excerpt(); ?></div>
											<a class="readmore" href="<?php the_permalink();?>">Lire plus</a>
										</div>
									</div>

							<?php endwhile; ?>
								</div>
							</div>
						<?php endif; ?>
						<?php wp_reset_query(); ?>

				</div>
			</section>

			<?php the_content(); ?>

			<?php //comments_template( '', true ); // Remove if you don't want comments ?>

			<br class="clear">

			<?php //edit_post_link(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>

		<h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
