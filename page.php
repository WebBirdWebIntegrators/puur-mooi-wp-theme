<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<h1><?php the_title() ?></h1>
			<?php 
				$global_introduction = the_field('global_introduction');
				if( !empty($global_introduction) ): ?>
					dsfsdf
					<?php echo the_field('global_introduction'); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="b3">
		<div class="cntr">
			<div class="col1">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php get_template_part( 'templates-parts/acf-gallery' ) ?>
					<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<?php endwhile; endif; ?>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&appId=631131386918182&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="https://www.facebook.com/pages/Puur-mooi/110537122402885" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				<?php edit_post_link('Edit this entry', '<div class="post-edit">', '</div>'); ?>
			</div>
			<div class="col2">
				<div class="col2-b1">
					<?php if( get_field( 'field_546cc6392e9b0' ) ): ?>
							<div class="promo">
								<h3><i class="fa fa-bell-o"></i> Promo</h3>
								<?php the_field( 'field_546cc6392e9b0' ); ?>
							</div>
					<?php endif; ?>
					<h3>Nieuwsbrief</h3>
					<?php gravity_form(
						7, 
						$display_title = false, 
						$display_description = true, 
						$display_inactive = false, 
						$field_values = null, 
						$ajax = true, 
						$tabindex = 99); 
					?>
				</div>
				<?php get_template_part('templates-parts/part-1', '') ?>
				<!-- Start - Maak een afspraak -->
				<?php get_template_part('templates-parts/part-2', '') ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>