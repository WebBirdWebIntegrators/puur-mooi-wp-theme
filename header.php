<?php ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
<div class="main">

<div id="header">
	<div class="hb1">
		<div class="cntr">
			<div class="bp1">
				<script type="text/javascript">
					jQuery(function(){
				      jQuery("#toggle-nav").click(function () {
					  	jQuery("#toggle-nav").toggleClass("active");
				        jQuery("#mnav").slideToggle("#mnav");
				        jQuery("#fnav").slideToggle("#fnav");
				      });
				    });
				</script>
				<nav>
					<div class="nav-bar">
						<ul>
							<li>
								<i class="fa fa-bars" id="toggle-nav"></i>
							</li>
							<li>
								<div class="site-name">
									<a href="<?php echo home_url(); ?>">
										<?php bloginfo( 'name' ); ?>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<?php {
						$mnav = array(
							'theme_location'  => '',
							'menu'            => 'Main navigation',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'mnav',
							'menu_id'         => 'mnav',
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
						wp_nav_menu( $mnav ); }
					?>
					<?php {
						$fnav = array(
							'theme_location'  => '',
							'menu'            => 'Functional navigation',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'fnav',
							'menu_id'         => 'fnav',
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
						wp_nav_menu( $fnav ); }
					?>
				</nav>
			</div>
			<div class="bp5">
				<ul>
				<li>
					<a href="<?php echo home_url();?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/site-logo-puur-mooi.png" alt="Puur Mooi - Esthetiek & natuurlijk welzijn • Shiatsu praktijk">
					</a>
				</li>
				<li>
					<nav id="fnav">
						<?php {
							$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Functional navigation',
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
					</nav>
					<nav id="mnav">
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
					</nav>
				</li>
			</ul>
			</div>
		</div>
	</div>
	<?php if ( is_front_page() ) { ?>
		<div class="hb2 front-page">
		</div>
	<?php } else { ?>
		<div class="hb2">
			<div class="cntr">
				<div class="img">
					<?php if ( is_page() ) { ?>
						<?php the_post_thumbnail() ?>
					<?php } else if ( is_category( 'nieuws' ) ) { ?>
						<?php if( is_category() ){
							// put the term ID into a variable
							$term_id = get_query_var('cat');
							$thumbnail_id = get_option( '_wpfifc_taxonomy_term_'.$term_id.'_thumbnail_id_', 0 );
							$image = wp_get_attachment_image( $thumbnail_id, 'full' );
						}
						echo $image;
						?>
					
					<?php } else if ( is_category( 'vragen' ) ) { ?>
						<?php if( is_category() ){
							// put the term ID into a variable
							$term_id = get_query_var('cat');
							$thumbnail_id = get_option( '_wpfifc_taxonomy_term_'.$term_id.'_thumbnail_id_', 0 );
							$image = wp_get_attachment_image( $thumbnail_id, 'full' );
						}
						echo $image;
						?>
					
					<?php } else if ( is_category( 'pers-en-media' ) ) { ?>
						<?php if( is_category() ){
							// put the term ID into a variable
							$term_id = get_query_var('cat');
							$thumbnail_id = get_option( '_wpfifc_taxonomy_term_'.$term_id.'_thumbnail_id_', 0 );
							$image = wp_get_attachment_image( $thumbnail_id, 'full' );
						}
						echo $image;
						?>
					
					<?php } else if ( is_post_type_archive( 'cures' ) ) { ?>
						<img src="<?php the_field('billboard_kuren', 'option'); ?>">
					
					<?php } elseif ( is_post_type_archive( 'massages' ) ) { ?>
						<img src="<?php the_field('billboard_massages', 'option'); ?>">
					
					<?php } elseif ( is_post_type_archive( 'treatments' ) ) { ?>
						<img src="<?php the_field('billboard_behandelingen', 'option'); ?>">
					
					<?php } elseif ( is_post_type_archive( 'arrangements' ) ) { ?>
						<img src="<?php the_field('billboard_arrangementen', 'option'); ?>">
					
					<?php } elseif ( is_tax( 'webbird_taxonomies_treatments', 'lichaamsverzorging' ) ) { ?>
						<?php 
							$myImage = fifc_the_tax_thumbnail(22,'webbird_taxonomies_treatments','large');
							echo $myImage;
						?>
					<?php } elseif ( is_tax( 'webbird_taxonomies_treatments', 'gelaatsverzorging' ) ) { ?>
						<?php 
							$myImage = fifc_the_tax_thumbnail(19,'webbird_taxonomies_treatments','large');
							echo $myImage;
						?>
					
					<?php } elseif ( is_tax( 'webbird_taxonomies_cures', 'gelaat' ) ) { ?>
						<?php 
							$myImage = fifc_the_tax_thumbnail(23,'webbird_taxonomies_cures','large');
							echo $myImage;
						?>
					
					<?php } elseif ( is_tax( 'webbird_taxonomies_cures', 'lichaam' ) ) { ?>
						<?php 
							$myImage = fifc_the_tax_thumbnail(24,'webbird_taxonomies_cures','large');
							echo $myImage;
						?>
					
					<?php } else if ( is_singular( array ( 'treatments' , 'cures' , 'massages' , 'arrangements' ) ) || is_single() ) { ?>
						<?php the_post_thumbnail() ?>
					
					<?php } else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/tmp-puur-mooi-1.jpg" alt="Puur Mooi">
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<?php get_template_part('templates-parts/header', 'billboard') ?> 