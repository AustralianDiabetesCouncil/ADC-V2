<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('content', 'post-single'); ?>

<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
