<?php get_header(); ?>
	<section>
				<div id="caption-wrapper">
					<a class="caption" href="javascript:">
						<span>Свободные специалисты <img src="<?php bloginfo('template_url'); ?>/images/caption.png" alt="Today Available Specialists" title="Today Available Specialists"></span>
					</a>
					<?php wp_nav_menu( array( 'theme_location' => 'specialists-menu','container' => 'false' ) ); ?>
				</div>
				<div id="banner-partner">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('RU Баннер "Ваш партнер"')) ?>
				</div>
				<div id="banner-expert">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('RU Баннер "Эксперт"')) ?>
				</div>
			</section>
		</header>
			<main>
			<section id="benefits">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('RU Преимущества')) ?>
			</section>
			<section id="expertise-areas">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('RU Экспертная область')) ?>
			</section>
			<section id="featured-clients" class="rus">
				<h3>Наши <span>клиенты</span></h3>
				<aside id="brands" class="bxslider">
					<?php if( function_exists('bxslider') ) bxslider('brendy'); ?>
				</aside>
			</section>
			<section id="free-estimation">
				<?php echo do_shortcode("[contact-form-7 id='323' title='Оцените Ваш проект бесплатно']"); ?>
				<div id="blockquote">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('RU Цитата')) ?>
				</div>
			</section>
			<section id="client-testimonials">
				<h3>
					Отзывы <span>клиентов</span>	
				</h3>
				<aside id="testimonial" class="bxslider">
					<?php if( function_exists('bxslider') ) bxslider('rekomendacii'); ?>
				</aside>
				<aside id="author" class="bxslider">
					<?php if( function_exists('bxslider') ) bxslider('avtor'); ?>
				</aside>
			</section>
			<section id="nearshoring">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('RU Удобный офшор')) ?>
			</section>
		</main>
		
<?php get_footer(); ?>