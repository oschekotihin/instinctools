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
			<section class="inner-page">
				<div class="slice-left">
					<div class="slice-box-left"></div>
				</div>
				<aside class="center-area-inner-page">
					<h1><?php the_title(); ?></h1>
					<?php the_content('&hellip;'); ?>
					<?php endwhile; endif; ?>
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