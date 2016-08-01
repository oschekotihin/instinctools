<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-EN">
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php if (is_single()) { ?>
			<meta property="og:url"           content="<?php  echo get_permalink(); ?>" />
			<meta property="og:type"          content="article" />
			<meta property="og:title"         content="<?php bloginfo('description'); ?>" />
			<meta property="og:description"   content="<?php bloginfo('description'); ?>" />
		<?php } ?>
		<link rel="shortcut icon" href="http://www.instinctools.com/wp-content/themes/instinctools/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/wp-content/themes/instinctools/css/font-awesome-4.5.0/css/font-awesome.min.css" />
		<title>
			<?php
				if (is_front_page()) {
					bloginfo('name');
					echo ' / ';
					bloginfo('description');
				} else if (is_single()) {
					echo 'Blog / ';
					wp_title('');
				} else {
					wp_title('') ;
					echo ' / ';
					bloginfo('name');} ?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
		    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-ie.css" type="text/css" media="screen" />
		<![endif]-->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-1.1.1.min.js"></script>
		<script language="JavaScript" type="text/javascript" src="http://tthom4pa.appmetrx.com/t/tthom4pa.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<style>
			article, aside, details, figcaption, figure, footer,header,hgroup, menu, nav, section { display: block; }

			/*------------------------fonts styles------------------------------*/

			@font-face {
			    font-family: 'Roboto Light';
			    src: url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_light.eot');
			    src: url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_light.eot?#iefix') format('embedded-opentype'),
			         url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_light.woff') format('woff'),
			         url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_light.ttf') format('truetype');
			    font-weight: normal;
			    font-style: normal;

			}
			@font-face {
			    font-family: 'Roboto Medium';
			    src: url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_medium.eot');
			    src: url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_medium.eot?#iefix') format('embedded-opentype'),
			         url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_medium.woff') format('woff'),
			         url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto_medium.ttf') format('truetype');
			    font-weight: normal;
			    font-style: normal;

			}
			@font-face {
			    font-family: 'Roboto Light';
			    src: url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto-lightitalic.eot');
			    src: url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto-lightitalic.eot?#iefix') format('embedded-opentype'),
			         url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto-lightitalic.woff') format('woff'),
			         url('<?php get_site_url(); ?>/wp-content/themes/instinctools/fonts/roboto-lightitalic.ttf') format('truetype');
			    font-weight: normal;
			    font-style: italic;

			}
		</style>
		<?php wp_head();?>
		    <script type="text/javascript">
		        var ua = navigator.userAgent;
				var isiPad = /iPad/i.test(ua) || /iPhone OS 3_1_2/i.test(ua) || /iPhone OS 3_2_2/i.test(ua);
		        $(document).ready(function() {
		        	if (isiPad) {
			        	$('.menu > li > a').not(':first').attr('href','javascript:');
			        	$('#cover-image').show();
			        }
			        document.addEventListener('touchstart', function(event) {
						video.play();
						$('#cover-image').fadeOut(2000);
					}, false);

		        });
		    </script>
	</head>
	<body <?php if(is_front_page()) { echo "id=\"home\""; } ?> <?php if (ICL_LANGUAGE_CODE == 'ru') { echo "class=\"version_ru\""; } ?>>
		<?php $check = strripos($_SERVER['REQUEST_URI'], "instinctools_pdf") || strripos($_SERVER['REQUEST_URI'], "instinctools_presentation_dms") || strripos($_SERVER['REQUEST_URI'], "cv_"); if ($check !== false) echo "<div id=\"cover\"></div>"; ?>
		<iframe src="http://www.linkedin.com/in/alexeyspas" id="linkedin" frameborder="0" width="100%" height="0"></iframe>
		<header class="main-all main-all-<?php the_ID(); ?>">
			<div>
				<ul id="language">
					<?php language_selector_flags(); ?>
				</ul>
				<a id="logo" href="http://www.instinctools.eu">
					<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="instinctools" title="instinctools" />
				</a>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container' => 'false','after' => '<span></span><span class="submenu-division"></span>' ) ); ?>
				</nav>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/images/header-video.jpg" alt="" id="cover-image">
			<?php
				if (is_front_page()) $check_num = 1; else $check_num = 2;
				switch($check_num) {
					case 1: $video = 'medium'; break;
					default: {
						$random = mt_rand ( 1 , 4 );
						switch($random) {
							case 1: $video = 'vid2'; $style = 'video-1'; break;
							case 2: $video = 'medium'; $style = 'video-1'; break;
							case 3: $video = 'mobidev'; $style = 'video-2'; break;
							case 4: $video = 'devdev2'; $style = 'video-2'; break;
							default: $video = 'vid2';
						}
					}
				}	?>
			<?php
				if (!strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) { ?>
					<video width="100%" id="video"  loop="true" class="<?=$style; ?>" autoplay poster="images/header-video.jpg">
					  <source src="<?php bloginfo('template_url'); ?>/video/<?=$video ?>.mp4" type="video/mp4" preload="auto">
					  <source src="<?php bloginfo('template_url'); ?>/video/<?=$video ?>.ogv" type="video/ogg" preload="auto">
					  <source src="<?php bloginfo('template_url'); ?>/video/<?=$video ?>.webm" type="video/webm" preload="auto">
					  <object data="<?php bloginfo('template_url'); ?>/video/<?=$video ?>.mp4"></object>
					</video>
			<?php } else { ?>
					<img src="images/header-video.jpg" alt="video">
			<?php } ?>
