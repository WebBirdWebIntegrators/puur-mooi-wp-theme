<?php
/*
 *
 * @package cwpt
 */
 
get_header(); ?>

<div id="body">
	<div class="wrapper">
		<div class="content post-category">
	
			<?php if (have_posts()) : ?>
		
				<h1>Search Results</h1>
		
				<?php while ( have_posts() ) : the_post(); ?>
					<div <?php post_class() ?>>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium', array('class' => 'featured-image')); ?></a>
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h2>
						<span class="date"><?php the_time('j.m.Y') ?></span>
						<div class="excerpt"><?php the_excerpt() ?></div>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="read-more">Read more</a>
					</div>
				<?php endwhile; ?>
		
			<?php else : ?>
		
				<h2>No posts found. Try a different search?</h2>
				<?php get_search_form(); ?>
		
			<?php endif; ?>
	
		</div>
		<div id="aside">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>