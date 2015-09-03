<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<h2 class="single">
				<?php
					$category = get_the_category();
					$parent = get_cat_name($category[0]->category_parent);
					if (!empty($parent)) {
					echo $parent;
					} else {
					echo $category[0]->cat_name;
					}
				?>
			</h2>
			
			<?php
				$category = get_the_category();
				echo category_description($category[0]->cat_ID);
			 ?>			
		</div>
	</div>
	<div class="b3">
		<div class="cntr">
			<div class="col1">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h1 class="single"><?php the_title(); ?></h1>
						<!-- <span class="date"><?php the_time('j.m.Y') ?></span> -->
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						<?php get_template_part( 'templates-parts/acf-gallery' ) ?>
						<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags( '<div class="tags"><strong>Tags:</strong> ', ', ', '</div>'); ?>
					</div>
				<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&appId=631131386918182&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="https://www.facebook.com/pages/Puur-mooi/110537122402885" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>
			<div class="col2">
				<div class="col2-b1">
					<?php if( get_field( 'field_546cc6392e9b0' ) ): ?>
							<div class="promo">
								<h3><i class="fa fa-bell-o"></i> Promo</h3>
								<?php the_field( 'field_546cc6392e9b0' ); ?>
							</div>
					<?php endif; ?>
				</div>
				<?php get_template_part('templates-parts/part-1', '') ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>