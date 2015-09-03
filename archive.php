<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<?php if ( is_post_type_archive( 'cures' ) ) { ?>
				<h1><?php post_type_archive_title(); ?></h1>
				<?php the_field('introductions_cures', 'option'); ?>
				<div class="taxonomies">
					<?php
						$customPostTaxonomies = get_object_taxonomies('cures');
						if(count($customPostTaxonomies) > 0) {
							foreach($customPostTaxonomies as $tax) {
								$args = array(
					         	  'orderby' => 'name',
						          'show_count' => 0,
					        	  'pad_counts' => 0,
						          'hierarchical' => 1,
					        	  'taxonomy' => $tax,
					        	  'title_li' => ''
					        	);

								echo '<ul>';
								wp_list_categories( $args );
								echo '</ul>';
								}
						}
					?>
				</div>
				<div class="b1-b1">
					<div class="cntr">
						<?php
							$type = 'cures';
							$args = array (
							  'post_type' => $type,
							  'post_status' => 'publish',
							  'posts_per_page' => -1,
							  'caller_get_posts'=> 1 );

							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								echo '<ul><li><strong>Ontdek onze ';
								$post_type = get_post_type_object( get_post_type($post) );
								echo $post_type->label;
								echo ': </strong></li>';
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
							    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
								<?php
								endwhile;
								echo '</ul>';
							}
							wp_reset_query();
							?>
					</div>
				</div>
			<?php } elseif ( is_post_type_archive( 'massages' ) ) { ?>
				<h1><?php post_type_archive_title(); ?></h1>
				<?php the_field('introductions_massages', 'option'); ?>
				<div class="b1-b1">
					<div class="cntr">
						<?php
							$type = 'massages';
							$args = array (
							  'post_type' => $type,
							  'post_status' => 'publish',
							  'posts_per_page' => -1,
							  'caller_get_posts'=> 1 );

							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								echo '<ul><li><strong>Ontdek onze ';
								$post_type = get_post_type_object( get_post_type($post) );
								echo $post_type->label;
								echo ': </strong></li>';
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
							    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
								<?php
								endwhile;
								echo '</ul>';
							}
							wp_reset_query();
							?>
					</div>
				</div>
			<?php } elseif ( is_post_type_archive( 'treatments' ) ) { ?>
				<h1><?php post_type_archive_title(); ?></h1>
				<?php the_field('introductions_treatments', 'option'); ?>
				<div class="taxonomies">
					<?php
						$customPostTaxonomies = get_object_taxonomies('treatments');
						if(count($customPostTaxonomies) > 0) {
							foreach($customPostTaxonomies as $tax) {
								$args = array(
					         	  'orderby' => 'name',
						          'show_count' => 0,
					        	  'pad_counts' => 0,
						          'hierarchical' => 1,
					        	  'taxonomy' => $tax,
					        	  'title_li' => ''
					        	);

								echo '<ul>';
								wp_list_categories( $args );
								echo '</ul>';
								}
						}
					?>
				</div>
				<div class="b1-b1">
					<div class="cntr">
						<?php
							$type = 'treatments';
							$args = array (
							  'post_type' => $type,
							  'post_status' => 'publish',
							  'posts_per_page' => -1,
							  'caller_get_posts'=> 1 );

							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								echo '<ul><li><strong>Ontdek onze ';
								$post_type = get_post_type_object( get_post_type($post) );
								echo $post_type->label;
								echo ': </strong></li>';
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
							    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
								<?php
								endwhile;
								echo '</ul>';
							}
							wp_reset_query();
							?>
					</div>
				</div>
			<?php } elseif ( is_post_type_archive( 'arrangements' ) ) { ?>
				<h1><?php post_type_archive_title(); ?></h1>
				<?php the_field('introductions_treatments', 'option'); ?>
				<div class="b1-b1">
					<div class="cntr">
						<?php
							$type = 'arrangements';
							$args = array (
							  'post_type' => $type,
							  'post_status' => 'publish',
							  'posts_per_page' => -1,
							  'caller_get_posts'=> 1 );

							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								echo '<ul><li><strong>Ontdek onze ';
								$post_type = get_post_type_object( get_post_type($post) );
								echo $post_type->label;
								echo ': </strong></li>';
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
							    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
								<?php
								endwhile;
								echo '</ul>';
							}
							wp_reset_query();
							?>
					</div>
				</div>
				<?php } elseif ( is_post_type_archive( 'handverzorging' ) ) { ?>
					<h1><?php post_type_archive_title(); ?></h1>
					<?php the_field('introductions_treatments', 'option'); ?>
					<div class="b1-b1">
						<div class="cntr">
							<?php
								$type = 'handverzorging';
								$args = array (
								  'post_type' => $type,
								  'post_status' => 'publish',
								  'posts_per_page' => -1,
								  'caller_get_posts'=> 1 );

								$my_query = null;
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
									echo '<ul><li><strong>Ontdek onze ';
									$post_type = get_post_type_object( get_post_type($post) );
									echo $post_type->label;
									echo ': </strong></li>';
									while ($my_query->have_posts()) : $my_query->the_post(); ?>
								    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
									<?php
									endwhile;
									echo '</ul>';
								}
								wp_reset_query();
								?>
						</div>
					</div>
					<?php } elseif ( is_post_type_archive( 'voetverzoring' ) ) { ?>
						<h1><?php post_type_archive_title(); ?></h1>
						<?php the_field('introductions_treatments', 'option'); ?>
						<div class="b1-b1">
							<div class="cntr">
								<?php
									$type = 'voetverzorging';
									$args = array (
									  'post_type' => $type,
									  'post_status' => 'publish',
									  'posts_per_page' => -1,
									  'caller_get_posts'=> 1 );

									$my_query = null;
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) {
										echo '<ul><li><strong>Ontdek onze ';
										$post_type = get_post_type_object( get_post_type($post) );
										echo $post_type->label;
										echo ': </strong></li>';
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
									    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
										<?php
										endwhile;
										echo '</ul>';
									}
									wp_reset_query();
									?>
							</div>
						</div>
						<?php } elseif ( is_post_type_archive( 'epilatie' ) ) { ?>
							<h1><?php post_type_archive_title(); ?></h1>
							<?php the_field('introductions_treatments', 'option'); ?>
							<div class="b1-b1">
								<div class="cntr">
									<?php
										$type = 'epilatie';
										$args = array (
										  'post_type' => $type,
										  'post_status' => 'publish',
										  'posts_per_page' => -1,
										  'caller_get_posts'=> 1 );

										$my_query = null;
										$my_query = new WP_Query($args);
										if( $my_query->have_posts() ) {
											echo '<ul><li><strong>Ontdek onze ';
											$post_type = get_post_type_object( get_post_type($post) );
											echo $post_type->label;
											echo ': </strong></li>';
											while ($my_query->have_posts()) : $my_query->the_post(); ?>
										    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
											<?php
											endwhile;
											echo '</ul>';
										}
										wp_reset_query();
										?>
								</div>
							</div>
			<?php } else { ?>
				<h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>
				<?php echo category_description(); ?>
			<?php } ?>
		</div>
	</div>
	<div class="b2">
		<div class="cntr">
			<?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( is_post_type_archive( array ( 'cures' , 'massages' , 'arrangements' , 'treatments', 'handverzorging', 'voetverzorging', 'epilatie' ) ) || is_tax() ) { ?>
						<div <?php post_class( 'lst1' ) ?>>
							<div class="img">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail('large'); ?>
								</a>
							</div>
							<h2><?php the_title() ?></h2>
							<div class="excerpt">
								<?php the_excerpt() ?>
							</div>
							<div class="info">
								<ul>
									<li>
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="read-more button">Meer info</a>
									</li>
									<li>

									</li>
								</ul>
							</div>
						</div>
			<?php } else { ?>
						<div <?php post_class() ?>>
							Default ...
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium', array('class' => 'featured-image')); ?></a>
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h2>
							<span class="date"><?php the_time('j.m.Y') ?></span>
							<div class="excerpt"><?php the_excerpt() ?></div>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="read-more">Read more</a>
						</div>
					<?php } ?>

				<?php endwhile; ?>

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
	</div>
</div>
<?php get_footer(); ?>
