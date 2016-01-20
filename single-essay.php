<?php get_header(); ?>

	<!-- main content -->

	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		$meta = get_post_meta($post->ID);
	?>

	<section id="main-content" data-menu-active="page-essays">

			<article <?php post_class('col col9'); ?> id="post-<?php the_ID(); ?>">

				<div class="essay-content col5">

					<?php
						the_post_thumbnail('essay');
					?>

		 	  		<div class="dash">&#x2014;</div>

		 	  		<h6><?php
						if (!empty($meta['_cmb_subtitle'])) {
							echo $meta['_cmb_subtitle'][0];
						}
					?></h6>

					<h5><?php the_title(); ?></h5>

					<h6><?php
						if (!empty($meta['_cmb_author'])) {
							echo 'Text by <i>' . $meta['_cmb_author'][0] . '</i>';
						}
					?></h6>

		 	  		<div class="essay-copy">
			 	  		<?php the_content(); ?>
		 	  		</div>

		 	  		<div class="dash">&#x2014;</div>

		 	  		<div class="essay-download">
		 	  			<button><a target="_blank" href="<?php
			 	  		if (!empty($meta['_cmb_pdf'])) {
								echo $meta['_cmb_pdf'][0];
							}
						?>">Download PDF in English</a></button>
		 	  		</div>

		 	  		<div class="essay-download">
		 	  			<button><a target="_blank" href="<?php
			 	  		if (!empty($meta['_cmb_pdf_esp'])) {
								echo $meta['_cmb_pdf_esp'][0];
							}
						?>">Bajar PDF en Español</a></button>
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