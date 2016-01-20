<?php get_header(); ?>

	<!-- main content -->
	<section id="main-content" class="col col9" data-menu-active="surjournal">

			<article>

				<div class="col4 center-block">
			 	  	<?php
				 	  	$about = get_page(10);
/* 				 	  	$about = get_page(8); */
				 	  	$meta = get_post_meta($about->ID);
			 	  	?>

			 	  	<?php
			 	  		if (!empty($meta['_cmb_surindex_img'])) {
				 	  		echo wpautop($meta['_cmb_surindex_img'][0]);
				 	  	}
				 	?>

					<header class="cf">

					 	<h4><i>Sur</i> Journal</h4>

					 	<nav class="language-toggles">
					 		<span class="language-toggle language-toggle-spanish" data-language="spanish">ESP</span>
					 		<span class="language-toggle language-toggle-english" data-language="english">ENG</span>
					 	</nav>

				 	</header>

				 	<div class="copy english-copy">

					 	<?php
				 	  		if (!empty($meta['_cmb_surindex_copy'])) {
					 	  		echo wpautop($meta['_cmb_surindex_copy'][0]);
					 	  	}
					 	?>

				 	</div>

				 	<div class="copy spanish-copy">

					 	<?php
				 	  		if (!empty($meta['_cmb_surindex_copy_esp'])) {
					 	  		echo wpautop($meta['_cmb_surindex_copy_esp'][0]);
					 	  	}
					 	?>

				 	</div>
				</div>

			</article>

	<!-- end main-content -->
	</section>


<?php get_footer(); ?>