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
			<section class="inner-page how-we-work">
				<div class="slice-left">
					<div class="slice-box-left"></div>
				</div>
				<div class="center-area-inner-page">
					<?php the_content('&hellip;'); ?>
					<?php endwhile; endif; ?>
				</div>
				<aside class="right-area-inner-page right-area-inner-page_transparency hide-aside">
					 <?php get_sidebar('simplified'); ?>
				</aside>
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

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/classlist/2014.01.31/classList.min.js"></script>
		<script type="text/javascript">
		//addEventListener polyfill 1.0 / Eirik Backer / MIT Licence
		(function(win, doc){
			if(win.addEventListener)return;		//No need to polyfill

			function docHijack(p){var old = doc[p];doc[p] = function(v){return addListen(old(v))}}
			function addEvent(on, fn, self){
				return (self = this).attachEvent('on' + on, function(e){
					var e = e || win.event;
					e.preventDefault  = e.preventDefault  || function(){e.returnValue = false}
					e.stopPropagation = e.stopPropagation || function(){e.cancelBubble = true}
					fn.call(self, e);
				});
			}
			function addListen(obj, i){
				if(i = obj.length)while(i--)obj[i].addEventListener = addEvent;
				else obj.addEventListener = addEvent;
				return obj;
			}

			addListen([doc, win]);
			if('Element' in win)win.Element.prototype.addEventListener = addEvent;			//IE8
			else{																			//IE < 8
				doc.attachEvent('onreadystatechange', function(){addListen(doc.all)});		//Make sure we also init at domReady
				docHijack('getElementsByTagName');
				docHijack('getElementById');
				docHijack('createElement');
				addListen(doc.all);
			}
		})(window, document);
		</script>
		<script type="text/javascript">
		var hashing = function (str) {
			return '#' + str.toLowerCase().trim().split(' ').join('-');
		};

		var switchTab = function (meta) {
			if (meta) {
				window.location.hash = meta.hashName;
				var activeTab = document.querySelector('li.ui-tabs-active.ui-state-active'),
					ariaControls = activeTab.getAttribute('aria-controls');
					activePanel = document.getElementById(ariaControls);

				activeTab.classList.remove('ui-tabs-active', 'ui-state-active');
				activePanel.style.display = 'none';

				document.getElementById(meta.id).parentElement.classList.add('ui-tabs-active', 'ui-state-active');
				document.getElementById(meta.tabID).style.display = 'block';

				switch (meta.hashName) {
					case '#transparency':
						document.getElementsByClassName('center-area-inner-page')[0]
							.classList.add('center-area-inner-page_width');
						document.getElementsByClassName('right-area-inner-page_transparency')[0]
							.classList.remove('hide-aside');
						break;
					default:
						document.getElementsByClassName('center-area-inner-page')[0]
							.classList.remove('center-area-inner-page_width');
						document.getElementsByClassName('right-area-inner-page_transparency')[0]
							.classList.add('hide-aside');
				}
			}
		};

		document.addEventListener('DOMContentLoaded', function () {
			var hashes = {};
			var tabLinks = document.getElementsByClassName('ui-tabs-anchor');

			for (var i = tabLinks.length - 1; i >= 0; i -= 1) {
				var hashName = hashing(tabLinks[i].innerText);
				hashes[hashName] = {
					id: tabLinks[i].id,
					tabID: tabLinks[i].getAttribute('href').replace('#', ''),
					hashName: hashName
				};
			}

			switchTab(hashes[window.location.hash]);

			document.addEventListener('click', function (e) {
				var hashName = hashing(e.target.innerText);

				switchTab(hashes[hashName]);
			}, false);
		}, false);
		</script>
<?php get_footer(); ?>