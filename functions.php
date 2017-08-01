<?php
// Start the engine the other way

add_action('template_redirect', 'remove_subnav_specific_pages');
function remove_subnav_specific_pages()
{
    if (!is_front_page()) {
        remove_action('genesis_after_header', 'genesis_do_subnav');
    }
}

add_action('template_redirect', 'remove_nav_home_page');
function remove_nav_home_page()
{
    if (is_front_page()) {
        remove_action('genesis_after_header', 'genesis_do_nav');
    }
}

add_action('genesis_setup', 'genesischild_theme_setup', 15);
function genesischild_theme_setup()
{

    //Add support for HTML5 markup
    add_theme_support('html5');
    //Add viewport metatag
    add_theme_support('genesis-responsive-viewport');
    //Add 3 footer widgets
    add_theme_support('genesis-footer-widgets', 3);
    //Add support for custom background
    add_theme_support('custom-background');
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'id' => 'homeslider',
        'name' => 'Home Slider',
        'before_widget' => '<div class="slider-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
'id' => 'categoryone',
'name' => 'Category 1',
'before_widget' => '<div class="categoryone">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
'id' => 'categorytwo',
'name' => 'Category 2',
'before_widget' => '<div class="categorytwo">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
'id' => 'categorythree',
'name' => 'Category 3',
'before_widget' => '<div class="categorythree">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
'id' => 'categoryfour',
'name' => 'Category 4',
'before_widget' => '<div class="categoryfour">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
}

//* Activate the use of Dashicons
add_action('wp_enqueue_scripts', 'load_dashicons_front_end');
function load_dashicons_front_end()
{
    wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'load_responsive_javascript');
function load_responsive_javascript()
{
    wp_enqueue_script('main', get_stylesheet_directory_uri().'/js/jquery-3.2.0.min.js');
    wp_enqueue_script('scroll', get_stylesheet_directory_uri().'/js/scroll.js');
    wp_enqueue_script('responsive-menu', get_stylesheet_directory_uri().'/js/responsive-menu.js', array('jquery'), '1.0.0');
}

function stylized_login()
{
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('stylesheet_directory').'/stylized-login.css" />';
}

add_action('login_head', 'stylized_login');

function login_link($url)
{
    return get_bloginfo('url');
}

add_filter('login_headerurl', 'login_link');

add_filter('genesis_footer_creds_text', 'eo_custom_footer_creds');
function eo_custom_footer_creds()
{
    echo '<div class="creds"><p>Web Designer in Nigeria. ';
    echo 'Copyright &copy; ';
    echo '&nbsp;&nbsp;&nbsp;';
    date('Y');
    echo '&nbsp;&nbsp;&nbsp; '.bloginfo('name');
    echo  bloginfo('description').'. ';
}

set_post_thumbnail_size(50, 50); // 50 pixels wide by 50 pixels tall, resize mode

add_action('genesis_before_header', 'headwrap');

function headwrap()
{
    echo '<div class="headwrap"><div>';
}

add_action('genesis_before_footer', 'footwrap');

function footwrap()
{
    echo '<div class="clear"><div>';
}

function annointed_admin_bar_remove()
{
    global $wp_admin_bar;

    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

function remove_footer_admin()
{
    echo 'Designed by <a href="http://www.frankwaive.com" target="_blank">Frank Waive</a> </p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

remove_action('genesis_after_header', 'genesis_do_nav');
add_action('genesis_after_header', 'genesis_do_nav');

//* Display featured image before single post title
add_action('genesis_before_entry', 'featured_post_image', 8);
function featured_post_image()
{
    if (!is_singular('post')) {
        return;
    }
    the_post_thumbnail('post-image');
}
