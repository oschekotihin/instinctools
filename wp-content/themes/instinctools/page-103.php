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
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div id="banner-page">
						<h3><?php echo get_post($post->post_parent)->post_title; ?></h3>
				</div>
			</section>
		</header>
		<main>
			<section class="inner-page contact">
				<div class="slice-left">
					<div class="slice-box-left"></div>
				</div>
				<aside class="center-area-inner-page">
					<h1><?php the_title(); ?></h1>
					<?php the_content('&hellip;'); ?>
					<?php endwhile; endif; ?>
				</aside>
				<aside id="contact-form">
					<?php echo do_shortcode("[contact-form-7 id='584' title='Contact']"); ?>
				</aside>
				<div class="clear"></div>
				<div class="wrapper">
					<?php echo get_post(582)->post_content; ?>
					<div class="clear"></div>
				</div>
			</section>
				<section id="featured-clients">
					<h3>
						<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
							Featured <span>Clients</span>
						<?php else : ?>
							Наши <span>клиенты</span>
						<?php endif; ?>
					</h3>
					<aside id="brands" class="bxslider">
						<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
							<?php if( function_exists('bxslider') ) bxslider('brands-2'); ?>
						<?php else : ?>
							<?php if( function_exists('bxslider') ) bxslider('brendy'); ?>
						<?php endif; ?>
					</aside>
				</section>
		</main>
<?php get_footer(); ?>