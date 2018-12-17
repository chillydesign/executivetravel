<?php get_header(); ?>

<div class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'L\'Actualité FPMA', 'webfactor' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

</div>



<?php get_footer(); ?>
