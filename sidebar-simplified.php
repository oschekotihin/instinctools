<div id="testimanials-section">
<h3>
	<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
		Client <span>Testimonials</span>
	<?php else : ?>
		Отзывы <span>Клиентов</span>
	<?php endif; ?>
</h3>
<aside id="testimonial" class="bxslider">
	<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
		<?php if( function_exists('bxslider') ) bxslider('testimonial'); ?>
	<?php else : ?>
		<?php if( function_exists('bxslider') ) bxslider('rekomendacii'); ?>
	<?php endif; ?>
</aside>
<aside id="author" class="bxslider">
	<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
		<?php if( function_exists('bxslider') ) bxslider('author'); ?>
	<?php else : ?>
		<?php if( function_exists('bxslider') ) bxslider('avtor'); ?>
	<?php endif; ?>
</aside>
</div>

<div class="estimate-contact">
	<div class="box-estimate-contact">
		<div class="box-estimate-contact-inner">
			<div class="area-estimate">
				<?php echo do_shortcode("[contact-form-7 id='322' title='Estimate Your Project for Free']"); ?>
			</div>
		</div>
	</div>
</div>