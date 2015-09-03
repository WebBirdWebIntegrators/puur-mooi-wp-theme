<!-- Start / Activate this feature to redirect the 404 page to the home page
	<?php
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".get_bloginfo('url'));
	exit();
	?>
End / Activate this feature to redirect the 404 page to the home page !-->

<?php
/*
 *
 * @package cwpt
 */
get_header(); ?>

<div id="body">
	<div class="wrapper">
		<div id="content">
			<h1>Error 404 - Not Found</h1>
			</div>
		<div id="aside">
			... aside ...
		</div>
	</div>
</div>

<?php get_footer(); ?>