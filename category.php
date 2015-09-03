<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<h1 style="margin-bottom: 0px; padding-bottom: 0px;"><?php printf( __( '%s', 'cwpt' ), single_cat_title( '', false ) ); ?></h1>
			<!-- <?php echo category_description(); ?> -->
		</div>
	</div>
	<div class="b3">
		<div class="cntr">
			<div class="col1">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div <?php post_class( 'category' ) ?>>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium', array('class' => 'featured-image')); ?></a>
							<h2 class="category"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h2>
							<!-- <span class="date"><?php the_time('j.m.Y') ?></span> -->
							<div class="excerpt"><?php the_excerpt() ?></div>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="read-more">Lees verder</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col2">
				<?php get_template_part('templates-parts/part-1', '') ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>