<div id="footer">
	<div class="fb1">
		<div class="cntr">
			<ul>
				<li>
					<h3>Puur mooi is genieten</h3>
					<div class="content">
						<div class="img">
							<img src="<?php the_field('footer_puur_mooi_is_genieten_image', 'option'); ?>">
						</div>
						<?php the_field('footer_puur_mooi_is_genieten', 'option'); ?>
					</div>
				</li>
				<li>
					<h3><?php the_field('ontdek_puur_mooi_titel', 'option'); ?></h3>
					<div class="content">
						<?php {
							$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Main navigation',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							wp_nav_menu( $defaults ); }
						?>
					</div>
				</li>
				<li>
					<h3>Contact</h3>
					<div class="content">
						<?php the_field('footer_contact', 'option'); ?>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="fb2">
		<div class="cntr">
			<ul>
				<li>
					<ul>
						<li>©2014 - Alle rechten voorbehouden</li>
						<li>Design & development by WebBird</li>
					</ul>
				</li>
				<li>
					<ul>
						<li><i class="fa fa-twitter"></i><a href="http://twitter.com/puurmooi_be" target="_blank">Twitter</a></li>
						<li><i class="fa fa-facebook"></i><a href="https://www.facebook.com/pages/Puur-mooi/110537122402885" target="_blank">Facebook</a></li>
						<li><i class="fa fa-linkedin"></i><a href="">LinkedIn</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>

</div>

<!-- Start Google Analytics implementation -->
<script> 
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ 
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), 
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) 
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-53490936-1', 'auto'); 
ga('send', 'pageview');

</script>
<!-- End Google Analytics implementation -->

<?php wp_footer(); ?>

</body></html>