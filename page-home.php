<?php 
/* Template Name: Home */

get_header(); ?>

<section id="home_articles" class="container">

	<?php query_posts('showposts=4'); ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<article class="col-lg-3 col-md-6 col-xs-12">
			
			<a href="<?php the_permalink(); ?>" class="article_image">
				<img src="http://placehold.it/500x250" alt="">
			</a>

			<footer>

				<div class="article_author_image">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
				</div>

				<span class="article_author_name"><?php the_author_meta('display_name') ?></span> - <time class="article_date"><?php $posttime = get_the_time('U'); $currenttime = date('U'); ?><?php if ( ($currenttime - $posttime) <= 345600 ) { echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; } else { echo get_the_date(); }; ?></time>

			</footer>

			<header>
				<h1 class="article_title h3">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
			</header>

			<span class="article_category">
				<?php $category = get_the_category(); 
				echo $category[0]->cat_name; ?>
			</span>

			<p class="article_excerpt"><?php the_excerpt(); ?></p>

		</article>

	<?php endwhile; wp_reset_query(); ?>

</section>

<div class="container">

	<section id="home_news" class="col-lg-7">

		<h1 class="section_title">
			<a href="/news">News</a>
		</h1>

		<?php $home_news = new WP_Query('post_type=news&posts_per_page=4'); ?>

		<?php if ( $home_news->have_posts() ) : ?>

		<?php while ( $home_news->have_posts() ) : $home_news->the_post(); ?>

			<article>

				<figure class="home_news_image">
					<img src="http://placehold.it/100x100" alt="<?php the_title(); ?>">
				</figure>

				<h1 class="home_news_title h3">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>

				<p class="home_news_excerpt"><?php the_excerpt(); ?></p>

			</article>

		<?php endwhile; wp_reset_postdata(); ?>

		<?php endif; ?>
		
	</section>

	<section id="home_events" class="col-lg-5">

		<h1 class="section_title">
			<a href="/events">Education and Prevention Programs</a>
		</h1>

		<?php $home_events = new WP_Query('post_type=events&posts_per_page=6'); ?>

		<?php if ( $home_events->have_posts() ) : ?>

		<?php while ( $home_events->have_posts() ) : $home_events->the_post(); ?>

			<article>

				<time class="home_event_date">
					<span class="home_event_month">Jan</span>
					<span class="home_event_day">14</span>
				</time>

				<h1 class="home_event_title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>

				<a href="<?php the_permalink(); ?>" class="home_event_more">More Details &raquo;</a>
			
			</article>

		<?php endwhile; wp_reset_postdata(); ?>

		<?php endif; ?>
		
	</section>

</div><?php // .container ?>

<section id="home_member_callout" class="col-lg-12">

	<div class="jumbotron">
		<div class="container">
			<h1 class="member_callout_title">Become a Member Today</h1>
		</div>
	</div>
	
</section>

<div class="clearfix"></div>

<div class="container">

	<section id="home_products" class="col-lg-6">

		<h1 class="section_title">Online Store Specials</h1>

		<?php if ( get_field('home_products') ) : ?>
		
		<div class="table-responsive">
			<table class="table">

			<?php while ( has_sub_field('home_products') ) : ?>

				<tr>
					<td>
						<?php the_sub_field('product_name'); ?>
					</td>
					<td>
						<?php the_sub_field('product_price'); ?>
					</td>
					<td>
						<a target="_blank" class="btn btn-success" href="<?php the_sub_field('product_name'); ?>">Buy</a>
					</td>
				</tr>
			
			<?php endwhile; ?>
			
			</table>
		</div>

		<?php endif; ?>

	</section>

	<section id="home_offers" class="col-lg-6">

		<article class="offer col-lg-6">
			
			<h2 class="offer_title">Offer Here</h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, pariatur, deserunt, quos at in saepe accusantium.</p>

		</article>

		<article class="offer col-lg-6">
			
			<h2 class="offer_title">Offer Here</h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, pariatur, deserunt, quos at in saepe accusantium.</p>

		</article>

		<article class="offer col-lg-6">
			
			<h2 class="offer_title">Offer Here</h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, pariatur, deserunt, quos at in saepe accusantium.</p>

		</article>

		<article class="offer col-lg-6">
			
			<h2 class="offer_title">Offer Here</h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, pariatur, deserunt, quos at in saepe accusantium.</p>

		</article>
		
	</section>

</div><?php // .container ?>

<section id="home_recipes" class="container">

	<h1 class="section_title">
		<a href="/recipes">Recipes</a>
	</h1>

	<?php $home_recipes = new WP_Query('post_type=recipe&posts_per_page=4'); ?>

	<?php if ( $home_recipes->have_posts() ) : ?>

	<?php while ( $home_recipes->have_posts() ) : $home_recipes->the_post(); ?>

		<article class="col-lg-3">
			
			<a href="<?php the_permalink(); ?>" class="recipe_image">
				<img src="http://placehold.it/500x250" alt="">
			</a>

			<header>
				<h1 class="recipe_title h3">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
			</header>

			<p class="recipe_excerpt"><?php the_excerpt(); ?></p>

			<footer>

				<span class="recipe_author">
					<a href="<?php echo get_bloginfo('url');?>/?author=<?php the_author_meta('ID') ?>" title="Posts by <?php the_author_meta('display_name') ?>" rel="author"><?php the_author_meta('display_name') ?></a>
				</span>

				<time class="recipe_date">
				<?php 
				$posttime = get_the_time('U');
				$currenttime = date('U');
				?>
				<?php if ( ($currenttime - $posttime) <= 345600 ) {
				echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
				} else {
				echo get_the_date();
				}; ?>
				</time>

			</footer>

		</article>

	<?php endwhile; wp_reset_postdata(); ?>

	<?php endif; ?>
	
</section>

<section id="home_subscribe">
	
</section>

<?php get_footer(); ?>
