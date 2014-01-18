<?php $slider_args = array(
	'post_type' => 'slide',
	'posts_per_page' => -1
); ?>
<?php $slider = new WP_Query($slider_args); ?>
<?php if ( $slider->have_posts() ) : ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		
		<?php $i = 0; ?>
		<?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
		<?php $i++; ?>

		<div class="item <?php if ( $i == 1 ) { echo 'active'; } ?>">
			<img src="<?php the_field('slide_image'); ?>" alt="<?php the_field('slide_heading'); ?>">
			<?php if ( get_field('slide_heading') || get_field('slide_subheading') ) { ?>
			<div class="carousel-caption">
				<?php if ( get_field('slide_headline') ) { ?>
				<h3><?php the_field('slide_headline'); ?></h3>
				<?php } ?>
				<?php if ( get_field('slide_subheading') ) { ?>
				<p><?php the_field('slide_subheading'); ?></p>
				<?php } ?>
				<?php if ( get_field('slide_button_link') ) { ?>
				<a class="btn btn-primary" href="<?php the_field('slide_button_link'); ?>" alt="<?php the_field('slide_button'); ?>"><?php the_field('slide_button'); ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>

	</div>

	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>

</div><?php // .carousel ?>

<?php endif; ?>