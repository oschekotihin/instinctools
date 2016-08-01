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


					<?php
					//for each category, show all posts
					$cat_args=array(
					  'orderby' => 'name',
					  'order' => 'ASC'
					   );
					$categories=get_categories($cat_args);
					  foreach($categories as $category) {
					    $args=array(
					      'showposts' => -1,
					      'category__in' => array($category->term_id),
					      'caller_get_posts'=>1
					    );
					    $posts=get_posts($args);
					      if ($posts) {
					        
					        foreach($posts as $post) {
					          	setup_postdata($post); ?>
					          	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					          	<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
								<div class="entry">
									<?php the_excerpt(); ?>
								</div>
								<div class="meta meta-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></div>
					          <?php
					        } // foreach($posts
					      } // if ($posts
					    } // foreach($categories
					?>

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

