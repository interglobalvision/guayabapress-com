<?php get_header(); ?>

	<!-- main content -->

	<section id="main-content" class="col col9" data-menu-active="page-essays">

		<!-- main posts loop -->
		<section id="essays">

		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			$meta = get_post_meta($post->ID);
		?>

			<article <?php post_class('cf'); ?> id="post-<?php the_ID(); ?>">

				<div class="col2 essay-thumb">
					<a href="<?php the_permalink() ?>"><h1 class="essay">
						<?php
							if (!empty($meta['_cmb_number'])) {
								echo $meta['_cmb_number'][0];
							}
						?>
					</h1></a>
				</div>

				<div class="col5 essay-info">
				 	<div class="dash">&#x2014;</div>

				 	<a href="<?php the_permalink() ?>">
					<!--
<?php
						if (!empty($meta['_cmb_subtitle'])) {
							echo $meta['_cmb_subtitle'][0];
						}
					?>
-->
					ESSAY <?php
						if (!empty($meta['_cmb_number'])) {
							echo $meta['_cmb_number'][0];
						}
					?>
				 	</a>

				 	<a href="<?php the_permalink() ?>">
						<h5><?php the_title(); ?></h5>
				 	</a>

				 	<a href="<?php the_permalink() ?>">
					<?php
						if (!empty($meta['_cmb_author'])) {
							echo 'Text by <i>' . $meta['_cmb_author'][0] . '</i>';
						}
					?>
					</a>

					<div class="copy">
						<?php the_content(); ?>
					</div>
				</div>

			</article>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
		<?php endif; ?>

		<!-- end posts -->
		</section>

		<?php if (get_next_posts_link() || get_previous_posts_link()) { ?>
		<!-- post pagination -->
		<nav id="pagination">
			<?php if ($previous = get_previous_posts_link()) {echo $previous; } ?> <?php if ($next = get_next_posts_link()) {echo $next; } ?>
		</nav>
		<?php } ?>

	<!-- end main-content -->

	</section>

<?php get_footer(); ?>