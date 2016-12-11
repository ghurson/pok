<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!--wp_head-->
	<?php wp_head(); //Enqueue your own stuff in functions.php or \NV\Hooks\Config::enqueue_assets() ?>
	<!--/wp_head-->

	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
	<script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	<script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7726934/7334352/css/fonts.css" />


	<!-- Font embed code goes here -->

</head>
<body <?php body_class() ?>>
<div class="wrapper">
	<a class="show-on-focus" href="#mainContent">Skip to Content</a>
	<?php GH\Display::site_header(); ?>