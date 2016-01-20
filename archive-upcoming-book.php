<?php get_header(); ?>

	<!-- main content -->

	<section id="main-content" class="col col9 main-content-index" data-menu-active="upcoming-book">

		<!-- main posts loop -->
		<section id="books">

		<h3 class="notbold">Index</h3>

		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			$meta = get_post_meta($post->ID);
		?>

			<article <?php post_class('col4'); ?> id="post-<?php the_ID(); ?>">

				<a href="<?php the_permalink() ?>">
		 	  		<?php the_post_thumbnail('col4'); ?>

		 	  		<?php
		 	  			if (!empty($meta['_cmb_alt_title'])) {
			 	  			echo '<div class="provisional-title">' . $meta['_cmb_alt_title'][0] . '</div>';
		 	  			}
		 	  		?>

		 	  		<h5><?php the_title(); ?></h5>
				</a>

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