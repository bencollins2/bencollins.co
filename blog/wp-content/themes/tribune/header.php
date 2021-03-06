<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title('&raquo;',true,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="all" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css" media="all" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" /> 

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );?>

	<?php wp_head(); ?>
</head>
<body>

<div class="outerwrap">
<div class="wrap">

	<div class="wrapout topbar">
		<div class="wrapin">

		<ul class="menu">
			<li><a href="/" class="menu-home">Home</a></li>
			<?php wp_list_pages('depth=1&title_li=');?>
			<li><a href="<?php bloginfo('rss2_url'); ?>" class="menu-subscribe">Subscribe</a></li>
		</ul>
		</div>

	</div>

	<div class="logo">
		<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h4><?php bloginfo('description'); ?></h4>
	</div>

	<div class="innerwrap">

		<div class="c1">

			<?php if ( is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_tag() ) {
			?>
				<p class="pageinfo">
				<?php /* If this is a tag archive */ if (is_tag()) { ?>
				Browsing the archives for the <b><?php single_tag_title(''); ?></b> tag
				<?php /* If this is a category archive */ } elseif (is_category()) { ?>
				Browsing the archives for the <b><?php single_cat_title(''); ?></b> category
				<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
				Browsing the blog archivesfor the day <B><?php the_time('l, F jS, Y'); ?></B>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				Browsing the blog archives for <B><?php the_time('F, Y'); ?></B>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				Browsing the blog archives for the year <B><?php the_time('Y'); ?></B>
				<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
				Search result for <strong>'<?php the_search_query(); ?>'</strong>
				<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				Browsing the blog archives
				<?php } ?>
				</p>
			<?php }?>
