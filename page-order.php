<?php get_header(); ?>

	<!-- main content -->

	<section id="main-content" data-menu-active="page-order">

		<?php
			$order_items = get_posts(array(
				'post_type' => array( 'book', 'surjournal' ),
				'posts_per_page' => '-1',
				'category_name' => 'order'
			));
			foreach ($order_items as $post) {
				$meta = get_post_meta($post->ID);
		?>

				<div class="order-item col col3">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('col3'); ?>
					</a>

					<div class="dash">&#x2014;</div>

					<div class="post-copy">

						<?php if (get_post_type($post->ID) == 'surjournal') { ?>

							<h5>SUR Journal &ndash; <?php the_title(); ?></h5>

						<?php } else { ?>

							<h5><?php the_title(); ?></h5>

						<?php } ?>

					</div>

					<div class="post-credits">
			 	  		<?php
			 	  		if (!empty($meta['_cmb_credits'])) {
								echo wpautop($meta['_cmb_credits'][0]);
							}
						?>
		 	  		</div>

		 	  		<?php
			 	  		if (!empty($meta['_cmb_price'])) {
			 	  	?>
			 	  		<div class="post-buy">
			 	  			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

								<input type="hidden" name="business" value="PPYFZHQZG9USY">

								<input type="hidden" name="cmd" value="_xclick">

								<?php if (get_post_type($post->ID) == 'surjournal') { ?>
									<input type="hidden" name="item_name" value="SUR Journal <?php echo $post->post_title; ?>">
								<?php } else { ?>
									<input type="hidden" name="item_name" value="<?php echo $post->post_title; ?>">
								<?php } ?>

								<input type="hidden" name="amount" value="<?php echo $meta['_cmb_price'][0]; ?>">
								<input type="hidden" name="currency_code" value="USD">

								<input type="submit" class="button" value="$<?php echo $meta['_cmb_price'][0]; ?> Buy Here" border="0" alt="PayPal - The safer, easier way to pay online">
								<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

							</form>

			 	  			<!-- <button>$<?php echo $meta['_cmb_price'][0]; ?> Buy Here</button> -->
			 	  		</div>
		 	  		<?php
		 	  			}
		 	  		?>

				</div>

		<?php
			}
		?>

	<!-- end main-content -->

	</section>

<?php get_footer(); ?>