<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(':',true,right); ?> <?php bloginfo('name'); ?></title>

	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=12, minimum-scale=.25, user-scalable=yes" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php echo dirname(get_site_url()); ?>/favicon.ico" /> 


	<?php wp_head(); ?>

</head>
<body>
	<div class="container">
		<div class="top">
			<h1><a href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a> : <a id="tagline" href="<?php echo dirname(get_site_url()); ?>">Back to home</a></h1>
		</div> <!-- /end .top -->