<?php get_header(); ?>

	<!-- main content -->

<!-- 	<section id="main-content" class="js-masonry" data-menu-active="page-home"> -->
	<section id="main-content" data-menu-active="page-home">
		<div class="animatation-container">

		<?php
			$home_items = get_posts(array(
				'post_type' => array( 'book', 'surjournal', 'essay' ),
				'posts_per_page' => '4',
				'orderby' => 'rand'
			));
			$i = 0;
			foreach ($home_items as $post) {
			$meta = get_post_meta($post->ID);
			?>

<!-- 				<div class="home-item col col3"> -->
				<div class="home-item">
					<a href="<?php the_permalink(); ?>">
						<?php
							if (get_post_type($post->ID) == 'essay') {
						?>
							<div class="col2 center-block">
								<h1 class="essay">
									<?php
										if (!empty($meta['_cmb_number'])) {
											echo $meta['_cmb_number'][0];
										}
									?>
								</h1>
							</div>
						<?php
							} else {
								the_post_thumbnail('home');
							}
						?>
					</a>
				</div>

		<?php
				if ($i === 3) {
/* 					echo '<div class="home-item col col3">'; */
					echo '<div class="home-item">';
					echo '<img src="' . get_bloginfo('stylesheet_directory') . '/img/guayaba_01.jpg" />';
					echo '</div>';
				}
				$i++;
			}
		?>

	<!-- end main-content -->
		</div>
	</section>

<?php get_footer(); ?>