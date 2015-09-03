<?php get_header(); ?>
<div class="main__body">
	<div class="main__body__container"> 		
		<!-- Main body container content -->
		<div class="main__body__container__content">
			
			<div class="massages-container">

			<?php if (have_posts( )) : ?>
		
				<?php while ( have_posts() ) : the_post(); ?>
					<div <?php post_class( 'style1' ) ?>>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<div class="massages__featured-image">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<div class="massages__content">
								<h2><?php the_title() ?></h2>
								<div class="excerpt"><?php the_excerpt() ?></div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
		
			</div>	
		
			<?php else :
		
				if ( is_category() ) { // If this is a category archive
					printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
				} else if ( is_date() ) { // If this is a date archive
					echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
				} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
				} else {
					echo("<h2>No posts found.</h2>");
				}
		
			endif;
		?>

		</div>
		<!-- Main body container sidebar -->
		<div class="main__body__container__sidebar">
			<?php get_sidebar('content'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>