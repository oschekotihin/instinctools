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

			 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

						<?php /* If this is a category archive */ if (is_category()) { ?>
							<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<h2>Archive for <?php the_time('F, Y'); ?></h2>

						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<h2>Archive for <?php the_time('Y'); ?></h2>

						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<h2>Author Archive</h2>

						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<h2>Blog Archives</h2>
						
						<?php } ?>

						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

						<?php while (have_posts()) : the_post(); ?>
						
							<div <?php post_class() ?>>
							
								<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								
								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

								<div class="entry">
									<?php the_excerpt(); ?>
								</div>
								
								<div class="meta meta-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></div>

							</div>

						<?php endwhile; ?>

						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
						
				<?php else : ?>

					<h2>Nothing found</h2>

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