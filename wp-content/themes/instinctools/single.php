<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.6";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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

				<div class="single-post">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<?php
								$pre_title =  get_post_meta(get_the_ID(), 'pretitle', true);

								if ($pre_title != '') {
								?>
							<h2>
								<span class="pre-title"><?php echo "{$pre_title}"; ?></span>
								<br/>
								<?php the_title(); ?>
							</h2>
								<?php
								} else {
								?>
							<h2><?php the_title(); ?></h2>
								<?php
								}
							?>
							<div class="share-line">
								<div class="share-list-wrap">
									<ul class="share-list">
										<li class="share-toogle">Share</li>
										<li class="share-item share-linkedin">
											<a href="http://www.linkedin.com/shareArticle?url=<?php echo urlencode(get_permalink()); ?>&title=<?php bloginfo('description'); ?>" target="_blank" title="share on linkedin">
												<i class="fa fa-linkedin-square" aria-hidden="true"></i>
											</a>
										</li>
										<li class="share-item share-facebook">
											<a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="share on facebook">
												<i class="fa fa-facebook-official" aria-hidden="true"></i>
											</a>
										</li>
										<li class="share-item share-twitter">
											<a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php bloginfo('description'); ?>" target="_blank" title="share on twitter">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<i class="fa fa-share-alt" aria-hidden="true"></i>
										</li>
									</ul>
								</div>
							</div>

							<?php # include (TEMPLATEPATH . '/inc/meta.php' ); ?>

							<div class="entry">

								<?php the_content(); ?>

								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

								<?php the_tags( 'Tags: ', ', ', ''); ?>

								<div class="clear"></div>
								<div class="social linkedin"><script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script><script type="IN/Share"></script></div>
								<div class="social facebook">
									<div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-mobile-iframe="true"></div>
								</div>
								<div class="social twitter">
									<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								</div>
								<div class="clear"></div>

							</div>

						</div>

					<div class="meta meta-comments"><?php comments_template(); ?></div>

					<?php endwhile; endif; ?>

					</div>

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