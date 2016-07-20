<?php 
/**
*
* For this displaying the header. 
*
**/
 ?>
 <!DOCTYPE html>
 <!--[if IE 6]>

<html id="ie6" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7]>

<html id="ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html id="ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title><?php wp_title(); ?></title>
 	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
 	<?php wp_head(); ?>
 </head>
<body <?php body_class(); ?>>

	
	<div class="pushit pushit-left">
		<div id="menu" class="wptouch-menu show-hide-menu">
			<ul class="menu-tree no-parent-links">
				<li class="menu-item menu-item-type-custom menu-item-object-custom no-icon">
					<a href="http://demo.wptouch.com/" class="title">WPtouch Demos Home</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-52 current_page_item current_page_parent no-icon">
					<a href="index.html" class="title">Blog</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page no-icon">
					<a href="http://demo.wptouch.com/bauhaus/sample-page/" class="title">Sample Page</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children no-icon">
					<a href="http://demo.wptouch.com/bauhaus/another-sample-page/" class="title">Another Sample Page</a>
			<ul>
				<li class="menu-item menu-item-type-post_type menu-item-object-page no-icon">
					<a href="http://demo.wptouch.com/bauhaus/child-page/" class="title">A Child Page</a>
				</li>
			</ul>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page no-icon">
					<a href="http://demo.wptouch.com/bauhaus/about/page-markup-and-formatting/" class="title">Page Markup And Formatting</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page no-icon">
					<a href="http://demo.wptouch.com/bauhaus/about/page-image-alignment/" class="title">Page Image Alignment</a>
					</li>
			</ul>
		</div>
	</div>

	
	<!-- Back Button for Web-App Mode -->
	<div class="wptouch-icon-arrow-left back-button tappable"><!-- css-button --></div>

	<div class="page-wrapper">

		<header id="header-title-logo">
			<div id="search-toggle" class="search-toggle tappable search-right" role="button"><!--icon-search--></div>
				<a href="index.html" class="header-center tappable">
					<img id="header-logo" src="../wp-content/uploads/sites/6/2015/12/logo2.png" alt="logo image" />
				</a>
			<div id="menu-toggle" class="menu-btn tappable show-hide-toggle menu-left" data-effect-target="menu" data-menu-target="menu" role="button"><!--icon-reorder--></div>
		</header>
 	