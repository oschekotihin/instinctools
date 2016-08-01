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
						<h3><?php the_title(); ?></h3>
				</div>
			</section>
		</header>
		<main>
			<div class="team">

				<h2 class="team__header">Top Management</h2>
				<?php the_content('&hellip;'); ?>
				<?php endwhile; endif; ?>
				<ul class="team__top">
					<li class="team__item">
						<div class="team__portrait" id="ceo">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://de.linkedin.com/in/alexeyspas" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Alexey Spas</span><span class="team__position">CEO</span></span>
							</span>
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="vp-business-development">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://de.linkedin.com/in/vitaly-schiglinski-b1748a1" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Vitaly Schiglinski</span><span class="team__position">VP Business Development</span></span>
							</span>		
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="cto">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://www.linkedin.com/in/alexey-astakhov-9a35214" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Alexey Astakhov</span><span class="team__position">VP of Engineering</span></span>
							</span>		
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="vp-hr-recruiting">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://www.linkedin.com/in/irina-yastrebkova-0219a622" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Irina Yastrebkova</span><span class="team__position">VP HR & Recruiting</span></span>
							</span>
						</div>
					</li>
				</ul>

				<h2 class="team__header">PreSale Team</h2>
				<ul class="team__sales">
					<li class="team__item">
						<div class="team__portrait" id="senior-presale">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://de.linkedin.com/in/romanrimsha/en" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li class="fa-item"><a href="mailto:roman.rimsha@instinctools.eu" target="_blank"><i class="fa fa-envelope fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Roman Rimsha</span><span class="team__position">Senior Presale Consultant</span></span>
							</span>
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="presale-1">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://de.linkedin.com/in/harry-weever-8793bab5" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li class="fa-item"><a href="mailto:gary.weaver@instinctools.eu" target="_blank"><i class="fa fa-envelope fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Gary Weaver</span><span class="team__position">Presale Consultant</span></span>
							</span>		
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="presale-2">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://de.linkedin.com/in/anna-vasilevskaya-171ba691/en" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li class="fa-item"><a href="mailto:anna.vasilevskaya@instinctools.eu" target="_blank"><i class="fa fa-envelope fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Anna Vasilevskaya</span><span class="team__position">Presale Consultant</span></span>
							</span>		
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="presale-3">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://de.linkedin.com/in/daria-nieder-60938a83/en" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li class="fa-item"><a href="mailto:daria.nieder@instinctools.ru" target="_blank"><i class="fa fa-envelope fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Daria Nieder</span><span class="team__position">Presale Consultant</span></span>
							</span>
						</div>
					</li>
				</ul>

				<h2 class="team__header">Software Development</h2>
				<ul class="team__dev">
					<li class="team__item">
						<div class="team__portrait" id="head-of-cloud">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://www.linkedin.com/in/yurybaranovsky" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Yury Baranovsky</span><span class="team__position">CTO - instinctools</span></span>
							</span>
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="head-of-mobile">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://www.linkedin.com/in/алексей-морской-a805a14a" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Alexey Morskoi</span><span class="team__position">Head of Mobile Development</span></span>
							</span>		
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="head-of-node">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://www.linkedin.com/in/pavelzubkou" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Pavel Zubkou</span><span class="team__position">Head Of Node.js Department</span></span>
							</span>		
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="head-of-xamarin">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://de.linkedin.com/in/xamarindeveloper" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Daniil Rybin</span><span class="team__position">Head of .net & Xamarin Department</span></span>
							</span>
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="head-of-qa">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://www.linkedin.com/in/dzmitry-zdanovich-36521a98/en" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Dzmitry Zdanovich</span><span class="team__position">Head of QA</span></span>
							</span>
						</div>
					</li>
					<li class="team__item">
						<div class="team__portrait" id="head-of-devops">
							<span class="team__icons">
								<ul class="team__iconsList">
									<li class="fa-item"><a href="https://www.linkedin.com/in/siarheiliashchuk" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<span class="team__caption"><span class="team__title">Siarhei Liashchuk</span><span class="team__position">Head of DevOps</span></span>
							</span>
						</div>
					</li>
				</ul>
				
			</div>
<?php get_footer(); ?>