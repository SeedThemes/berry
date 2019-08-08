<?php
/* LAYOUT */
$GLOBALS['s_blog_layout']          = 'full-width';  // full-width, leftbar, rightbar
$GLOBALS['s_blog_layout_single']   = 'full-width';  // full-width, leftbar, rightbar
$GLOBALS['s_blog_columns_m']       = '1';           // 1,2,3
$GLOBALS['s_blog_columns_d']       = '3';           // 1,2,3,4,5,6
$GLOBALS['s_blog_columns_d_style'] = 'card';        // list, card, caption
$GLOBALS['s_blog_profile']         = 'enable';      // disable, enable
$GLOBALS['s_shop_layout']          = 'full-width';  // full-width, leftbar, rightbar
$GLOBALS['s_shop_pagebuilder']     = 'disable';     // disable, enable
$GLOBALS['s_logo_path']            = 'none';        // theme folder relative path, such as img/logo.svg .
$GLOBALS['s_logo_width']           = '200';         // any number, use in Custom Logo
$GLOBALS['s_logo_height']          = '100';         // any number, use in Custom Logo
$GLOBALS['s_thumb_width']          = '350';         // any number
$GLOBALS['s_thumb_height']         = '184';         // any number
$GLOBALS['s_thumb_crop']           = true;          // true, false
$GLOBALS['s_title_style']          = 'banner';      // minimal, banner

/* ADD-ON */
$GLOBALS['s_member_url']           = 'none';        // none, url path such as: /my-account/
$GLOBALS['s_member_label']         = 'Member';      // ex: Member, สมาชิก
$GLOBALS['s_style_css']            = 'disable';     // disable, enable
$GLOBALS['s_jquery']               = 'disable';     // disable, enable
$GLOBALS['s_fontawesome']          = 'enable';      // disable, enable
$GLOBALS['s_flickity']             = 'enable';		// disable, enable
$GLOBALS['s_wp_comments']          = 'disable';     // disable, enable
$GLOBALS['s_admin_bar']            = 'hide';        // hide, show

/**
 * Enqueue scripts and styles.
 */
function berry_scripts() {
    wp_dequeue_style( 'seed-style');
    wp_enqueue_style('b-style', get_stylesheet_uri());

    if($GLOBALS['s_jquery'] == 'enable') {
        $need_jquery = true;
    } else {
        $need_jquery = false;
    }
	wp_enqueue_script( 'berry-js', get_stylesheet_directory_uri() . '/js/main.js', array(), filemtime( get_stylesheet_directory_uri() . '/js/main.js' ), $need_jquery );
}
add_action( 'wp_enqueue_scripts', 'berry_scripts' , 20 );