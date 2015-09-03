<?php
/*
Template Name: Welcome
*/
?>

<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<h1>Balans tussen innerlijke en uiterlijke schoonheid</h1>
			<?php 
				$global_introduction = the_field('global_introduction');
				if( !empty($global_introduction) ): ?>
					dsfsdf
					<?php echo the_field('global_introduction'); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="b5">
		<div class="cntr">
			<ul>
				<li>
					<div class="img">
						<a href="Test">
							<?php echo the_post_thumbnail( 'large' , '' ); ?>
						</a>
					</div>
					<!--
<div class="content">
						<h2><?php echo get_the_title( '365' ); ?></h2>
						<?php the_field('home_shiatsu_content', 'option'); ?>
					</div>
-->
				</li>
				<li>
					<ul>
						<li>
							<div class="img">
								<div class="cntr">
									<a href="<?php echo get_post_type_archive_link( 'treatments' ); ?>">
									<img src="<?php the_field('billboard_behandelingen', 'option'); ?>">
									</a>
								</div>
							</div>
							<div class="content">
								<h2>
									<a href="<?php echo get_post_type_archive_link( 'treatments' ); ?>">
										<?php
											$title = get_post_type_object( 'treatments' );
											echo $title->labels->name;
										?>
									</a>
								</h2>
								<?php the_field('baseline_behandelingen', 'option'); ?>
								<div class="lst">
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
											echo '<ul><li><strong>Ontdek:</strong></li>';
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
						</li>
						<li>
							<div class="img">
								<div class="cntr">
									<a href="<?php echo get_post_type_archive_link( 'cures' ); ?>">
										<img src="<?php the_field('billboard_kuren', 'option'); ?>">
									</a>
								</div>
							</div>
							<div class="content">
								<h2>
									<a href="<?php echo get_post_type_archive_link( 'cures' ); ?>">
										<?php
											$title = get_post_type_object( 'cures' );
											echo $title->labels->name;
										?>
									</a>
								</h2>
								<?php the_field('baseline_kuren', 'option'); ?>
								<div class="lst">
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
											echo '<ul><li><strong>Ontdek:</strong></li>';
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
						</li>
						<li>
							<div class="img">
								<div class="cntr">
									<a href="<?php echo get_post_type_archive_link( 'massages' ); ?>">
										<img src="<?php the_field('billboard_massages', 'option'); ?>">
									</a>
								</div>
							</div>
							<div class="content">
								<h2>
									<a href="<?php echo get_post_type_archive_link( 'massages' ); ?>">
										<?php
											$title = get_post_type_object( 'massages' );
											echo $title->labels->name;
										?>
									</a>
								</h2>
								<?php the_field('baseline_massages', 'option'); ?>
								<div class="lst">
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
											echo '<ul><li><strong>Ontdek:</strong></li>';
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
						</li>
						<li>
							<div class="img">
								<div class="cntr">
									<a href="<?php echo get_post_type_archive_link( 'arrangements' ); ?>">
										<img src="<?php the_field('billboard_arrangementen', 'option'); ?>">
									</a>
								</div>
							</div>
							<div class="content">
								<h2>
									<a href="<?php echo get_post_type_archive_link( 'arrangements' ); ?>">
										<?php
											$title = get_post_type_object( 'arrangements' );
											echo $title->labels->name;
										?>
									</a>
								</h2>
								<?php the_field('baseline_arrangementen', 'option'); ?>
								<div class="lst">
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
											echo '<ul><li><strong>Ontdek:</strong></li>';
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
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>


<?php get_footer(); ?>