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
				
				

					<div id="primary" class="content-area">
						<div id="content" class="site-content" role="main">

						<?php if ( have_posts() ) : ?>
								<h2 class="archive-title"><?php printf( __( 'Category Archives: %s', 'instinctools' ), single_cat_title( '', false ) ); ?></h2>

							
							<?php /* The loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
								<?php
									endif;

									if ( is_single() ) :
										the_title( '<h2 class="entry-title">', '</h2>' );
									else :
										the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
									endif;
								?>
								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
								<div class="entry">
									<?php the_excerpt(); ?>
								</div>
								<div class="meta meta-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></div>
							<?php endwhile; ?>

							<?php wp_pagenavi(); ?>

						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>

						</div><!-- #content -->
					</div><!-- #primary -->

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