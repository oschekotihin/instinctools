<?php get_header(); ?>
	<div class="slider-top-cover"></div>
			<div id="main-content">
				<div id="leftbar">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<div class="news-date">
							<?php the_date(); ?>
						</div>
						<?php the_content('&hellip;'); ?>
						<a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read more ></a>
					<?php endwhile; endif; ?>
				</div>
				<div id="rightbar">
					<?php include(TEMPLATEPATH.'/rightsidebar.php'); ?>
				</div>
			</div>
			<div class="demo-top-cover"></div>
			<div id="demo">
				<div id="demo-area">
					<div class="demo-left">
						<h3>Tasklist Integrator:<br/>много задач &ndash; одно решение!</h3>
						<div class="demo-ver">
							<p class="desc-demo">Позволяет объединить задачи из различных систем в простом интерфейсе пользователя с быстрым откликом</p>
							<div class="demo-button">
								<a href="/">Демо-версия</a>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="demo-right">
						<div class="heads-top"></div>
						<div class="heads-body"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="demo-bottom-cover"></div>
			<div id="footer">
		
<?php get_footer(); ?>