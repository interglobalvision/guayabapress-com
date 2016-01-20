<?php get_header(); ?>

	<!-- main content -->

	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		$meta = get_post_meta($post->ID);
	?>

	<section id="main-content" data-menu-active="post-<?php the_ID(); ?>" data-menu-active-parent="<?php echo get_post_type($post->ID); ?>">

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<div class="post-images col col4">
					<?php
						the_post_thumbnail('col4');

						if (!empty($meta['_cmb_images'])) {
							echo wpautop($meta['_cmb_images'][0]);
						}
					?>
				</div>


				<div class="post-content col col4">
					<header class="cf">

						<?php
			 	  			if (!empty($meta['_cmb_alt_title'])) {
				 	  			echo '<div class="provisional-title">' . $meta['_cmb_alt_title'][0] . '</div>';
				 	  			echo '<h5>' . $post->post_title . '</h5>';
			 	  			} else {
			 	  		?>

				 	  		<a href="<?php the_permalink() ?>">
						 		<h4><?php the_title(); ?></h4>
						 	</a>

				 	  	<?php
			 	  			}
		 	  			?>

						<?php if (!empty($meta['_cmb_spanish_copy'])) { ?>
					 	<nav class="language-toggles">
					 		<span class="language-toggle language-toggle-spanish" data-language="spanish">ESP</span>
					 		<span class="language-toggle language-toggle-english" data-language="english">ENG</span>
					 	</nav>
					 	<?php } ?>

				 	</header>

		 	  		<div class="post-copy">
			 	  		<?php if (!empty($meta['_cmb_spanish_copy'])) { ?>

			 	  		<div class="copy english-copy">
			 	  			<?php the_content(); ?>
			 	  		</div>

			 	  		<div class="copy spanish-copy">
			 	  			<?php echo wpautop($meta['_cmb_spanish_copy'][0]); ?>
			 	  		</div>

					 	<?php } else {
						 	the_content();
					 	}?>
		 	  		</div>

		 	  		<div class="dash">&#x2014;</div>

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

		 	  		<div class="post-footer">
			 	  		<?php
			 	  		if (!empty($meta['_cmb_footer'])) {
								echo wpautop($meta['_cmb_footer'][0]);
							}
						?>
		 	  		</div>
				</div>

			</article>

	<!-- end main-content -->

	</section>

	<?php endwhile; else: ?>
			<section id="main-content">
				<p><?php _e('Sorry, nothing matched your request :{'); ?></p>
			</section>
	<?php endif; ?>

<?php get_footer(); ?>