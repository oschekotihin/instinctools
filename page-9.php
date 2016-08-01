<?php get_header(); ?>
	<section>
				<div id="caption-wrapper">
					<a class="caption" href="javascript:">
						<span>Today Available Specialists <img src="<?php bloginfo('template_url'); ?>/images/caption.png" alt="Today Available Specialists" title="Today Available Specialists"></span>
					</a>
					<?php wp_nav_menu( array( 'theme_location' => 'specialists-menu','container' => 'false' ) ); ?>
				</div>
				<div id="banner-partner">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('EN Banner partner')) ?>
				</div>
				<div id="banner-expert">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('EN Banner expert')) ?>
				</div>
			</section>
		</header>
		<main>
			<section id="brands-logo">
				<ul>
					<li><a href="https://clutch.co/profile/instinctools" title="Top Web & Software Developers Belarus 2015" target="_blank" id="brand-1"></a></li>
					<li><a href="http://www.park.by/it/enterprise-258/type-full/" title="Resident of Belarus HighTech Park" target="_blank" id="brand-2"></a></li>
					<li><a href="javascript:" title="Eclipse Strategic Member" id="brand-3"></a></li>
					<li><a href="http://instinctools.eu/services/xamarin-app-development" title="Xamarin Certified Developers" target="_blank" id="brand-4"></a></li>
					<li><a href="javascript:" title="CISCO Certified Team" target="_blank" id="brand-5"></a></li>
					<li><a href="http://nodejs-experts.com/" title="Node.Js Certified Developers" target="_blank" id="brand-6"></a></li>
				</ul>	
			</section>
			<section id="benefits">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('EN Benefits')) ?>
			</section>
			<section id="expertise-areas">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('EN Areas of Expertise')) ?>
			</section>
			<section id="featured-clients">
				<h3>Featured <span>Clients</span></h3>
				<aside id="brands" class="bxslider">
						<?php if( function_exists('bxslider') ) bxslider('brands-2'); ?>
				</aside>
			</section>
			<section id="free-estimation">
				<?php echo do_shortcode("[contact-form-7 id='322' title='Estimate Your Project for Free']"); ?>

				<div id="blockquote">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('EN Blockquote')) ?>
				</div>
			</section>
			<section id="client-testimonials">
				<h3>
					Client <span>Testimonials</span>	
				</h3>
				<aside id="testimonial" class="bxslider">
					<?php if( function_exists('bxslider') ) bxslider('testimonial'); ?>
				</aside>
				<aside id="author" class="bxslider">
					<?php if( function_exists('bxslider') ) bxslider('author'); ?>
				</aside>
				<div class="clear"></div>
			</section>
			<section id="nearshoring">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('EN Convenient Nearshoring')) ?>
			</section>
		</main>
		
<?php get_footer(); ?>