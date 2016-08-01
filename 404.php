<?php get_header(); ?>
			<section>
				<div id="caption-wrapper">
					<a class="caption" href="javascript:">
						<span><?php if (ICL_LANGUAGE_CODE == 'en') : ?>
							Today Available Specialists
						<?php else : ?>
							Свободные специалисты
						<?php endif; ?> <img src="<?php bloginfo('template_url'); ?>/images/caption.png" alt="Today Available Specialists" title="Today Available Specialists"></span>
					</a>
					<?php wp_nav_menu( array( 'theme_location' => 'specialists-menu','container' => 'false' ) ); ?>
				</div>
				<div id="banner-page">
						<h3>Not found, Error 404</h3>
				</div>
			</section>
		</header>
		<main>
			<section class="inner-page">
				<div class="slice-left">
					<div class="slice-box-left"></div>
				</div>
				<aside class="center-area-inner-page">
					<h1>Not found, Error 404</h1>
					<p>The page you are looking for, apparently, been removed or did not exist before.</p>
				</aside>
				<aside class="right-area-inner-page">
					 <?php get_sidebar('sidebar.php'); ?> 
				</aside>
			<div class="clear"></div>
			</section>
				<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
					<section id="featured-clients">
						<h3>Featured <span>Clients</span></h3>
						<aside id="brands" class="bxslider">
							<?php if( function_exists('bxslider') ) bxslider('brands-2'); ?>					</aside>
					</section>
				<?php else : ?>
					<section id="featured-clients" class="rus">
						<h3>Наши <span>клиенты</span></h3>
						<aside id="brands" class="bxslider">
							<?php if( function_exists('bxslider') ) bxslider('brendy'); ?>
						</aside>
					</section>
				<?php endif; ?>

		</main>
<?php get_footer(); ?>




<?php get_header(); ?>
	<div class="slider-top-cover"></div>
			<div id="main-content">
				<div class="main-content-area">
					<div class="leftbar">
						<h1>Not found, Error 404</h1>
						<p>The page you are looking for, apparently, been removed or did not exist before.</p>
						<p>However, you can try to find the necessary information in the following articles:</p>
						<ul><?php wp_get_archives(''); ?></ul>
					</div>
					<div class="rightbar">
						<?php include(TEMPLATEPATH.'/components/rightsidebar.php'); ?>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<?php include(TEMPLATEPATH.'/components/demo.php'); ?>
			<div id="footer">
<?php get_footer(); ?>



