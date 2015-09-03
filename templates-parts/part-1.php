<div class="col2-b3">
	<h2><?php the_field('ontdek_puur_mooi_titel', 'option'); ?></h2>
	<div class="excerpt">
		<div class="img">
			<img src="<?php the_field('ontdek_puur_mooi_image', 'option'); ?>">
		</div>
		<?php the_field('ontdek_puur_mooi_inhoud', 'option'); ?>					
	</div>
	<ul>
		<li>
			<div class="img">
				<div class="cntr">
					<a href="<?php echo get_permalink( '365' ) ?>">
						<img src="<?php the_field('billboard_shiatsu', 'option'); ?>">
					</a>
				</div>
			</div>
			<div class="content">
				<h3>
					<a href="<?php echo get_permalink( '365' ) ?>">
						<?php echo get_the_title( '365' )?>
					</a>
				</h3>
				<?php the_field('baseline_shiatsu', 'option'); ?>
			</div>
		</li>
		<li>
			<div class="img">
				<div class="cntr">
					<a href="<?php echo get_post_type_archive_link( 'treatments' ); ?>">
					<img src="<?php the_field('billboard_behandelingen', 'option'); ?>">
					</a>
				</div>
			</div>
			<div class="content">
				<h3>
					<a href="<?php echo get_post_type_archive_link( 'treatments' ); ?>">
						<?php
							$title = get_post_type_object( 'treatments' );
							echo $title->labels->name;
						?>
					</a>
				</h3>
				<?php the_field('baseline_behandelingen', 'option'); ?>
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
				<h3>
					<a href="<?php echo get_post_type_archive_link( 'cures' ); ?>">
						<?php
							$title = get_post_type_object( 'cures' );
							echo $title->labels->name;
						?>
					</a>
				</h3>
				<?php the_field('baseline_kuren', 'option'); ?>
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
				<h3>
					<a href="<?php echo get_post_type_archive_link( 'massages' ); ?>">
						<?php
							$title = get_post_type_object( 'massages' );
							echo $title->labels->name;
						?>
					</a>
				</h3>
				<?php the_field('baseline_massages', 'option'); ?>
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
				<h3>
					<a href="<?php echo get_post_type_archive_link( 'arrangements' ); ?>">
						<?php
							$title = get_post_type_object( 'arrangements' );
							echo $title->labels->name;
						?>
					</a>
				</h3>
				<?php the_field('baseline_arrangementen', 'option'); ?>
			</div>
		</li>
	</ul>
</div>