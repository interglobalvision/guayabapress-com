<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- social graph meta -->
	<meta name="twitter:site" value="@">
	<?php if (have_posts()):while(have_posts()):the_post();
		$excerpt = get_the_excerpt();
		if(has_post_thumbnail()) {
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'opengraph' );
		}
		endwhile; endif;
		if (!empty($thumb)) {
	?>
	<meta property="og:image" content="<?php echo $thumb['0'] ?>" />
		<?php } else { ?>
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" />
		<?php }
		if (is_home()) { ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta name="twitter:card" value="<?php bloginfo('description'); ?>">
<?php } elseif (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:description" content="<?php echo $excerpt ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } else { ?>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
<?php } ?>

<!-- if you are looking for stylesheets they are enqueued in functions.php -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">
	<link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon-touch.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">

<!-- modernizr here, jquery in the footer, all other scripts are in enqueued in functions.php -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
	<script type="text/javascript">
		Modernizr.load([
			{
				test: Modernizr.mq('only all'),
				nope: "<?php bloginfo('stylesheet_directory'); ?>/js/polyfills/mediaqueries.js"
			}
		]);
	</script>

<!-- wordpress header -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<section class="container">
<!-- sub 7.0 internet explorer warning-->
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- start content -->
<header class="col col3">

	<h3 class="page-home"><a href="<?php echo home_url(); ?>">Guayaba Press</a></h3>

	<ul id="menu">
		<li class="page-about"><a href="<?php echo home_url('about'); ?>">About</a></li>
		<li><a class="surjournal" href="<?php echo home_url('surjournal'); ?>"><i>Sur</i> Journal</a>
			<ul>
				<?php
					$journals = get_posts('post_type=surjournal&posts_per_page=-1&order=ASC');
					foreach ($journals as $post) {
						echo '<li class="post-' . $post->ID . '"><a href="';
						the_permalink();
						echo '">';
						the_title();
						echo '</a></li>';
					}
				?>
			</ul>
		</li>
		<li><a class="book" href="<?php echo home_url('book'); ?>">Books</a>
			<ul>
				<?php
/* 					$published_books = get_posts('post_type=book&posts_per_page=-1&category_name=published'); */
					$published_books = get_posts('post_type=book&posts_per_page=-1');
					foreach ($published_books as $post) {
						echo '<li class="post-' . $post->ID . '"><a href="';
						the_permalink();
						echo '">';
						the_title();
						echo '</a></li>';
					}
				?>
			</ul>
		</li>
		<li><a class="upcoming-book" href="<?php echo home_url('upcoming-book'); ?>">Upcoming Books</a>
			<ul>
				<?php
/* 					$upcoming_books = get_posts('post_type=upcoming_book&posts_per_page=-1&category_name=upcoming'); */
					$upcoming_books = get_posts('post_type=upcoming-book&posts_per_page=-1');
					foreach ($upcoming_books as $post) {
						echo '<li class="post-' . $post->ID . '"><a href="';
						the_permalink();
						echo '">';
						the_title();
						echo '</a></li>';
					}
				?>
			</ul>
		</li>
		<li class="page-essays"><a href="<?php echo home_url('essay'); ?>">Essays</a></li>
		<li class="page-contact"><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
		<li class="page-distribution"><a href="<?php echo home_url('distribution'); ?>">Distribution</a></li>
<!-- 		<li class="page-news"><a href="<?php echo home_url('news'); ?>">News</a></li> -->
		<li class="page-order"><a href="<?php echo home_url('order'); ?>">Order</a></li>
	</ul>

</header>