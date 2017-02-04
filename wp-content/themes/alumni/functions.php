<?php

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'=>'サイドバー1',
'id' => 'sidebar-1',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="sidebar-title">',
'after_title' => '</div>',
));


function new_excerpt_more( $more ) {
 return ' <p><a class="button2" href="'. get_permalink( get_the_ID() ) . '">View Detail</a></p>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function add_favicon_link(){ ?>
 <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
 <?php }
add_action('wp_head', 'add_favicon_link');
add_theme_support( 'post-thumbnails' );

/**
 * Custom Post Type UIの日本語化ファイルをすでにあるものより優先して読み込ませるようにします。
 */
function override_load_cptui_ja( $override, $domain, $mofile ) {
    if ( 'cpt-plugin' == $domain
        && strrpos( $mofile, WP_PLUGIN_DIR . '/custom-post-type-ui/languages/cpt-plugin-ja.mo' ) === 0 ) {
        load_textdomain( 'cpt-plugin', WP_LANG_DIR . '/plugins/cpt-plugin-ja.mo' );
        return true;
    }
    return $override;
}
add_filter( 'override_load_textdomain', 'override_load_cptui_ja', 10, 3 );


function no_edit_lock($retval, $cur_time, $lock_time, $post_date_gmt){
	return false;
}
add_filter( 'bbp_past_edit_lock', 'no_edit_lock', 1, 4);

?>