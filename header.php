<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie10 lt-ie9 lt-ie8 eq-ie7"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie10 lt-ie9 eq-ie8"> <![endif]-->
<!--[if IE 9]> <html class="lt-ie10 eq-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="" lang="en-US"> <!--<![endif]-->
<head>

	<meta charset="utf-8">

	<title><?php
	wp_title('-',true,'right');
	bloginfo('name');
	?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css and js -->
	<?php wp_head(); ?>

	<!-- be sure to add all of your favicons from http://realfavicongenerator.net/ -->

	<!-- uncomment this block if you want to hide the admin bar while logged in
		<style type="text/css" media="screen">
			/*	#wpadminbar {
				display: none!important;
			}
			html { margin-top: 0px !important; }
			* html body { margin-top: 0px !important; }
			@media screen and ( max-width: 782px ) {
				html { margin-top: 0px !important; }
				* html body { margin-top: 0px !important; }
			}
			* html body { margin-top: 0px !important; }*/
		</style>
	-->
</head>
<body>
<div class="wrap">
	<header>
		<?php $page_slug = trim( $_SERVER["REQUEST_URI"] , '/' ); ?>

		<h1><a href="<?php bloginfo('url'); ?>/" class="logo">bloginfo('name')</a></h1>


		<ul class="navigation">
			<li><a href="<?php bloginfo('url'); ?>/"<?php if($page_slug == ''){echo ' class="active-navigation"';}?>>Home</a></li>
			<li><a href="<?php bloginfo('url'); ?>/about/"<?php if($page_slug == 'about'){echo ' class="active-navigation"';}?>>About</a></li>
			<li><a href="<?php bloginfo('url'); ?>/events/"<?php if($page_slug == 'events'){echo ' class="active-navigation"';}?>>Events</a></li>
			<li><a href="<?php bloginfo('url'); ?>/blog/"<?php if($page_slug == 'blog'){echo ' class="active-navigation"';}?>>Blog</a></li>
			<li><a href="<?php bloginfo('url'); ?>/contact/"<?php if($page_slug == 'contact'){echo ' class="active-navigation"';}?>>Contact</a></li>
		</ul>

	</header>