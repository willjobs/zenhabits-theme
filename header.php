<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(':',true,right); ?> <?php bloginfo('name'); ?></title>

	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=12, minimum-scale=.25, user-scalable=yes" />
	<meta name="description" content="Blog about adventures and lessons learned while WWOOFing and teaching English in Thailand." />
	<meta property="og:title" content="<?php echo get_the_title(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php echo get_permalink(); ?>" />
	<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php echo get_excerpt_by_id(get_the_ID()); ?>" />

	<?php
		global $post, $posts;
		$first_img = '';
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1] [0];

		if(empty($first_img)){
			$first_img = get_site_icon_url();
		}

	?>

	<meta property="og:image" content="<?php echo $first_img; ?>" />
	
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