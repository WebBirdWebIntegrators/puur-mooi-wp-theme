<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<h2>
				<?php
					$post_type = get_post_type_object( get_post_type($post) );
					echo $post_type->label;
				?>
			</h2>
			<h1><?php the_title() ?></h1>
			<?php the_excerpt() ?>
		</div>
	</div>
	<div class="b3">
		<div class="cntr">
			<div class="col1">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- <?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?> -->

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						<?php get_template_part( 'templates-parts/acf-gallery' ) ?>

						<?php if ( is_singular( 'cures' ) ) { ?>
							<?php if( get_field('kuur_inhoud_kuur') ): ?>
								<h2>Inhoud van de kuur</h2>
								<?php the_field( 'kuur_inhoud_kuur' ) ?>
							<?php endif; ?>
						<?php } elseif ( is_singular( 'massages' ) ) { ?>

						<?php } elseif ( is_singular( 'treatments' ) || is_singular( 'voetverzorging' ) || is_singular( 'handverzorging' ) || is_singular( 'epilatie' ) ) { ?>

							<h2>Volgorde behandeling</h2>
							<?php

							// check if the repeater field has rows of data
							if( have_rows('behandeling_volgorde_behandeling') ):

							 	// loop through the rows of data
							    while ( have_rows('behandeling_volgorde_behandeling') ) : the_row();

							        // display a sub field value
							        echo '<h3>Duur</h3>';
							        the_sub_field('behandeling_volgorde_behandeling_tijd');
							        echo ' min.';
							        echo '<h3>Omschrijving</h3>';
							        the_sub_field('behandeling_volgorde_behandeling_omschrijving');

							    endwhile;

							endif;

							?>

						<?php } elseif ( is_singular( 'arrangements' ) ) { ?>
							<?php if( get_field('field_541acf10226b7') ): ?>
								<h2>Inhoud arrangement</h2>
								<?php the_field( 'field_541acf10226b7' ) ?>
							<?php endif; ?>
						<?php } else { ?>
							<?php get_template_part('/templates-parts/appointment'); ?>
						<?php } ?>
					</div>

					<?php endwhile; else: ?>

						<p>Sorry, no posts matched your criteria.</p>

				<?php endif; ?>
				<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
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
					<?php if ( is_singular( 'cures' ) ) { ?>
						<!--
						<h3>Programma</h3>
						-->
						<?php if( get_field('kuur_prijs') ): ?>
							<div class="price">
								<span>€</span><?php the_field( 'kuur_prijs' ) ?>
							</div>
						<?php endif; ?>
						<h2>Prijs</h2>
						<p>Hieronder vindt u het behandelingsprogramma:</p>
						<?php
							echo '<table>';
								echo '<tr>';
									echo '<th>Aantal</th>';
									echo '<th>Duur</th>';
								echo '</tr>';
								if( have_rows('kuur_beurten') ):
								    while ( have_rows('kuur_beurten') ) : the_row();
								    	echo '<tr>';
								    		echo '<td>';
												the_sub_field('kuur_beurten_aantal_beurten');
											echo ' beurten</td>';
											echo '<td>';
												the_sub_field('kuur_beurten_duur');
											echo ' min.</td>';
										echo '</tr>';
								    endwhile;
							echo '</table>';
								else :
								endif;
						?>
					<?php } elseif ( is_singular( 'massages' ) ) { ?>
						<h2>Prijs</h2>
						<?php
							echo '<table>';
								echo '<tr>';
									echo '<th>Duur</th>';
									echo '<th>Prijs</th>';
								echo '</tr>';
								if( have_rows('massages_duur_prijs') ):
								    while ( have_rows('massages_duur_prijs') ) : the_row();
								    	echo '<tr>';
								    		echo '<td>';
												the_sub_field('massage_duur');
											echo ' min.</td>';
											echo '<td>€';
												the_sub_field('massage_prijs');
											echo '</td>';
										echo '</tr>';
								    endwhile;
							echo '</table>';
								else :
								endif;
						?>
					<?php } elseif ( is_singular( 'treatments' ) ) { ?>
						<h2>Prijs</h2>
						<?php
							echo '<table>';
								echo '<tr>';
									echo '<th>Duur</th>';
									echo '<th>Prijs</th>';
								echo '</tr>';
								if( have_rows('behandeling_tijd_prijs') ):
								    while ( have_rows('behandeling_tijd_prijs') ) : the_row();
								    	echo '<tr>';
								    		echo '<td>';
												the_sub_field('behandeling_tijd_prijs_tijd');
											echo ' min.</td>';
											echo '<td>€';
												the_sub_field('behandeling_tijd_prijs_prijs');
											echo '</td>';
										echo '</tr>';
								    endwhile;
							echo '</table>';
								else :
								endif;
						?>
						<?php } elseif ( is_singular( 'voetverzorging' ) ) { ?>
							<h2>Prijs</h2>
							<?php
								echo '<table>';
									echo '<tr>';
										echo '<th>Duur</th>';
										echo '<th>Prijs</th>';
									echo '</tr>';
									if( have_rows('behandeling_tijd_prijs') ):
									    while ( have_rows('behandeling_tijd_prijs') ) : the_row();
									    	echo '<tr>';
									    		echo '<td>';
													the_sub_field('behandeling_tijd_prijs_tijd');
												echo ' min.</td>';
												echo '<td>€';
													the_sub_field('behandeling_tijd_prijs_prijs');
												echo '</td>';
											echo '</tr>';
									    endwhile;
								echo '</table>';
									else :
									endif;
							?>
							<?php } elseif ( is_singular( 'handverzorging' ) ) { ?>
								<h2>Prijs</h2>
								<?php
									echo '<table>';
										echo '<tr>';
											echo '<th>Duur</th>';
											echo '<th>Prijs</th>';
										echo '</tr>';
										if( have_rows('behandeling_tijd_prijs') ):
										    while ( have_rows('behandeling_tijd_prijs') ) : the_row();
										    	echo '<tr>';
										    		echo '<td>';
														the_sub_field('behandeling_tijd_prijs_tijd');
													echo ' min.</td>';
													echo '<td>€';
														the_sub_field('behandeling_tijd_prijs_prijs');
													echo '</td>';
												echo '</tr>';
										    endwhile;
									echo '</table>';
										else :
										endif;
								?>
								<?php } elseif ( is_singular( 'epilatie' ) ) { ?>
									<h2>Prijs</h2>
									<?php
										echo '<table>';
											echo '<tr>';
												echo '<th>Duur</th>';
												echo '<th>Prijs</th>';
											echo '</tr>';
											if( have_rows('behandeling_tijd_prijs') ):
											    while ( have_rows('behandeling_tijd_prijs') ) : the_row();
											    	echo '<tr>';
											    		echo '<td>';
															the_sub_field('behandeling_tijd_prijs_tijd');
														echo ' min.</td>';
														echo '<td>€';
															the_sub_field('behandeling_tijd_prijs_prijs');
														echo '</td>';
													echo '</tr>';
											    endwhile;
										echo '</table>';
											else :
											endif;
									?>
						<?php } elseif ( is_singular( 'arrangements' ) ) { ?>
							<table>
								<tr>
									<td>Duur</td>
									<td><?php the_field( 'arrangement_duur' ) ?> <?php the_field( 'arrangement_duur_type' ) ?></td>
								</tr>
								<tr>
									<td>Prijs</td>
									<td>€<?php the_field( 'arrangement_prijs' ) ?></td>
								</tr>
								<tr>
									<td>Aantal personen</td>
									<td><?php the_field( 'aantal_personen' ) ?></td>
								</tr>
							</table>
					<?php } else { ?>

					<?php } ?>
					<?php if( get_field( 'field_546cc6392e9b0' ) ): ?>
						<div class="promo">
							<h3><i class="fa fa-bell-o"></i> Promo</h3>
							<?php the_field( 'field_546cc6392e9b0' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<!-- Start - Maak een afspraak -->
				<?php get_template_part('templates-parts/part-2', '') ?>
			</div>
		</div>
	</div>
	<div class="b4">
		<div class="cntr">
			<ul>
				<li>
					<div class="img">
					<?php
						if ( is_singular( 'treatments' ) ) { ?>
							<img src="<?php the_field('billboard_behandelingen', 'option'); ?>">
						<?php } elseif ( is_singular( 'cures' ) ) { ?>
							<img src="<?php the_field('billboard_cures', 'option'); ?>">
						<?php } elseif ( is_singular( 'massages' ) ) { ?>
							<img src="<?php the_field('billboard_massages', 'option'); ?>">
						<?php } elseif ( is_singular( 'arrangements' ) ) { ?>
							<img src="<?php the_field('billboard_arrangementen', 'option'); ?>">
						<?php } else { ?>
							...
						<?php } ?>
					</div>
				</li>
				<li>
					<h3>
						Ontdek onze andere
						<?php
							$post_type = get_post_type_object( get_post_type($post) );
							echo $post_type->label;
						?>
					</h3>
					<?php
						if ( is_singular( 'treatments' ) ) {
							$type = 'treatments';
						} elseif ( is_singular( 'cures' ) ) {
							$type = 'cures';
						} elseif ( is_singular( 'massages' ) ) {
							$type = 'massages';
						} elseif ( is_singular( 'arrangements' ) ) {
							$type = 'arrangements';
						} else {
							echo '';
						}
						$args = array (
						  'post_type' => $type,
						  'post_status' => 'publish',
						  'posts_per_page' => -1,
						  'caller_get_posts'=> 1 );

						$current_id = $wp_query->get_queried_object_id();
						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							echo '<ul>';
							while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<?php if( $current_id == get_the_ID() ) { ?>
							    <li class="current-menu-item"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
							<?php } else { ?>
							   <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
							<?php } ?>


						<?php
						endwhile;
						echo '</ul>';
					}
					wp_reset_query();
					?>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>
