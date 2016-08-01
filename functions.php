<?php

register_sidebar( array(
    'name'         => __( 'EN Banner partner' ),
    'id'           => 'en-banner-partner',
    'description'  => __( 'Banner partner area for english version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'EN Banner expert' ),
    'id'           => 'en-banner-expert',
    'description'  => __( 'Banner expert area for english version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'EN Benefits' ),
    'id'           => 'en-benefits',
    'description'  => __( 'Benefits area for english version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'EN Blockquote' ),
    'id'           => 'en-blockquote',
    'description'  => __( 'Blockquote area for english version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'EN Areas of Expertise' ),
    'id'           => 'en-expertise-areas',
    'description'  => __( 'Areas of Expertise for english version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
register_sidebar( array(
    'name'         => __( 'EN Convenient Nearshoring' ),
    'id'           => 'en-convenient-nearshoring',
    'description'  => __( 'Convenient Nearshoring for english version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
register_sidebar( array(
    'name'         => __( 'EN RIGHT ESTIMATE' ),
    'id'           => 'en-right-estimate',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
register_sidebar( array(
    'name'         => __( 'EN Sidebar' ),
    'id'           => 'en-sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );

register_sidebar( array(
    'name'         => __( 'RU Баннер "Ваш партнер"' ),
    'id'           => 'ru-banner-partner',
    'description'  => __( 'Banner partner area for russian version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'RU Баннер "Эксперт"' ),
    'id'           => 'ru-banner-expert',
    'description'  => __( 'Banner expert area for russian version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'RU Преимущества' ),
    'id'           => 'ru-benefits',
    'description'  => __( 'Benefits area for russian version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'RU Цитата' ),
    'id'           => 'ru-blockquote',
    'description'  => __( 'Blockquote area for russian version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<div class="none">',
    'after_title'  => '</div>',
) );
register_sidebar( array(
    'name'         => __( 'RU Экспертная область' ),
    'id'           => 'ru-expertise-areas',
    'description'  => __( 'Areas of Expertise for russian version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
register_sidebar( array(
    'name'         => __( 'RU Удобный офшор' ),
    'id'           => 'ru-convenient-nearshoring',
    'description'  => __( 'Convenient Nearshoring for russian version' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
register_sidebar( array(
    'name'         => __( 'RU RIGHT ESTIMATE' ),
    'id'           => 'ru-right-estimate',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );
register_sidebar( array(
    'name'         => __( 'RU Sidebar' ),
    'id'           => 'ru-sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h3>',
    'after_title'  => '</h3>',
) );

function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<li><a href="'.$l['url'].'"><span></span>'; else echo '<li><a class="active" href="'.$l['url'].'"><span></span>';
              echo $l['native_name'];
//            echo '<img src="'.$l['country_flag_url'].'" alt="'.$l['language_code'].'" border="0"/////>';
            if(!$l['active']) echo '</a></li>'; else echo '</a></li>';
        }
    }
}

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support( 'post-thumbnails' ); 


$filters = array('pre_term_description', 'pre_link_description', 'pre_link_notes', 'pre_user_description');
foreach ( $filters as $filter ) {
remove_filter($filter, 'wp_filter_kses');
}
foreach ( array( 'term_description' ) as $filter ) {
remove_filter( $filter, 'wp_kses_data' );
}
 
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
	  
      <div class="comment-author vcard">
         <?php echo get_avatar( $comment->comment_author_email, 48 ); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>

     <div class="comment-meta-date commentmetadata">
		<?php printf(__('%1$s (%2$s)'), get_comment_date(),  get_comment_time('H:i:s')) ?>
		<?php edit_comment_link(__('(Edit)'),'  ','') ?>
	</div>
	<?php if ($comment->comment_approved == '0') : ?>
         <br/><br/><em><?php _e('Comment Moderation') ?></em>
      <?php endif; ?>
		<div class="clear"></div>
		<div id="comment-text"><?php comment_text() ?></div>
      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => 'Answer'))) ?>
      </div>
     </div>
<?php
}

// KILL UPDATES
remove_action( 'wp_version_check', 'wp_version_check' );
remove_action( 'admin_init', '_maybe_update_core' );
add_filter( 'pre_transient_update_core', create_function( '$a', "return null;"));
add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;"));
wp_clear_scheduled_hook( 'wp_version_check' );

remove_action( 'load-plugins.php', 'wp_update_plugins' );
remove_action( 'load-update.php', 'wp_update_plugins' );
remove_action( 'load-update-core.php', 'wp_update_plugins' );
remove_action( 'admin_init', '_maybe_update_plugins' );
remove_action( 'wp_update_plugins', 'wp_update_plugins' );
add_filter( 'pre_transient_update_plugins', create_function( '$a', "return null;" ) );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_plugins' );
 
remove_action( 'load-themes.php', 'wp_update_themes' );
remove_action( 'load-update.php', 'wp_update_themes' );
remove_action( 'load-update-core.php', 'wp_update_themes' );
remove_action( 'admin_init', '_maybe_update_themes' );
remove_action( 'wp_update_themes', 'wp_update_themes' );
add_filter( 'pre_transient_update_themes', create_function( '$a', "return null;" ) );
add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_themes' );
// End of KILL UPDATES

class WPSE_78121_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth, $args) {
      global $wp_query;           

      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

      $class_names = $value = '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
      $class_names = ' class="' . esc_attr( $class_names ) . '"';

      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
      $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

      $output .= $indent . '<li' . $id . $value . $class_names .'>';

      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

                  // new addition for active class on the a tag
                  if(in_array('current-menu-item', $classes)) {
                      $attributes .= ' class="active"';
                  }

      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'><span></span>';
      $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}
function my_wp_nav_menu_args( $args = '' ) {
  $args['walker'] = new WPSE_78121_Sublevel_Walker;
  return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
function register_my_menus() {
  register_nav_menus(array( 'header-menu' => 'Главное меню', 'footer-menu' => 'Карта сайта'));
}
if (function_exists('register_nav_menus')) {
  add_action( 'init', 'register_my_menus' );
}

?>