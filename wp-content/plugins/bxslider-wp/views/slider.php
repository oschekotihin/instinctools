<?php if(!defined('ABSPATH')) die('Direct access denied.'); ?>

<!-- <ul class="bxslider" <?php bxslider_options( $slider_id ); ?>> -->
    <?php foreach($slides  as $slide): ?>
        <?php if($slide['type'] == 'image'): ?>
        <div class="slide">
            <?php if ($slide['enable_link']=='true'): ?><a target="<?php echo esc_attr($slide['link_target']); ?>" href="<?php echo esc_url( $slide['link'] ); ?>"><?php endif; ?>
            <img src="<?php echo esc_url( $slide['image_url'] ); ?>" title="<?php echo esc_attr( $slide['caption'] ); ?>" />
            <?php if ($slide['enable_link']=='true'): ?></a><?php endif; ?>
        </div>
        <?php else: ?>
        <div class="slide">
            <div class="slide-inner">
                <?php echo $slide['custom']; ?>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
<!-- </ul> -->