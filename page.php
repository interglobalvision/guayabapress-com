<?php get_header(); ?>

	<!-- main content -->

	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		$meta = get_post_meta($post->ID);
	?>

	<section id="main-content" data-menu-active="page-<?php echo $post->post_name ?>">

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<div class="col col4">
			 	  		<?php the_content(); ?>
				</div>

				<div class="col col4">
						<?php
							if (!empty($meta['_cmb_spanish'])) {
								echo wpautop($meta['_cmb_spanish'][0]);
							}
						?>
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