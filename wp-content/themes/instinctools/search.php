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
					<h3>Blog</h3>
				</div>
			</section>
		</header>
		<main>
			<section class="inner-page">
				<div class="slice-left">
					<div class="slice-box-left"></div>
				</div>
				<aside class="center-area-inner-page">

					<?php if (have_posts()) : ?>

						<h1>Search Results</h1>

						<?php while (have_posts()) : the_post(); ?>

							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

								<h2><?php the_title(); ?></h2>

								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

								<div class="entry">
									<?php the_excerpt(); ?>
								</div>

							</div>

						<?php endwhile; ?>

						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					<?php else : ?>

						<h2>No posts found.</h2>

					<?php endif; ?>

				</aside>
				<aside class="right-area-inner-page">
					 <?php include (TEMPLATEPATH . '/sidebar-blog.php' ); ?> 
				</aside>
			<div class="clear"></div>
			</section>
				<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
					<section id="featured-clients">
						<h3>Featured <span>Clients</span></h3>
						<aside id="brands" class="bxslider">
							<?php if( function_exists('bxslider') ) bxslider('brands-2'); ?>
						</aside>
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