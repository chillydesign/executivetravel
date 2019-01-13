<div class="container">
	<div class="row">
		<?php $i=1; ?>
		<?php while ( have_rows('blocs') ) : the_row(); ?>
			<div class="bloc <?php if($i % 2 == 0){echo 'even_bloc';} ?>">
				<div class="bloc_img" style="background-image:url('<?php echo get_sub_field('image')['sizes']['medium']; ?>');"></div>
				<div class="bloc_text">
					<h3 <?php if(get_sub_field('icone')) {
						echo 'class="icon_title" ';
						$bg = "url('" . get_sub_field('icone')['sizes']['small'] . "');";
						echo 'style="background-image:' . $bg . '"';
					}?>>
					<?php echo get_sub_field('titre'); ?>
				</h3>
				<div><?php echo get_sub_field('text'); ?></div>
			</div>
		</div>
		<?php $i++; ?>
	<?php endwhile; ?>
</div> <!-- END OF ROW -->
</div><!--  END OF CONTAINER -->
