<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page('Ustawienia Szablonu');
}

/***
 * Pobieranie danych z ustawień szablonu
 */
function get_option_field($var) {
    return get_field($var, 'option');
}

function add_svg_to_upload_mimes( $types ) {
    $types[ 'svg' ] = 'image/svg+xml';
    return $types;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes' );

function image($id, $size, $class)
{
    return wp_get_attachment_image($id, $size, false, ['class' => $class]);
}

// get aktualnosci

function blog() {
    $posts = get_posts(array(
        'numberposts'      => 6,
        'orderby'   => 'date',
        'sort_order' => 'asc',
        'post_type'  => 'post',
        'category'   => 140,
    ));

    return $posts;
}

function wplab_remove_skus_from_product_page( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }
    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'wplab_remove_skus_from_product_page' );

function check_parent($id) {
    $current_cat = get_queried_object()->term_id;

    if(in_array($id, get_ancestors($current_cat, 'product_cat'))) {
        return true;
    }
}


function check_current($id) {
    if(get_queried_object()->term_id == $id) {
        return true;
    }
}

function get_cat_cover($id) {
    $thumbnail_id = get_woocommerce_term_meta($id, 'thumbnail_id', true );
    $image = wp_get_attachment_url($thumbnail_id);
    return "<img src='{$image}' alt='kategoria' />";
}

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 15;
  return $cols;
}

register_nav_menu( 'left', 'left menu' );
register_nav_menu( 'right', 'right menu' );
add_filter('woocommerce_show_variation_price', function() {return true;});


/* Make Variation Visible */
add_filter('woocommerce_variation_is_visible', 'product_variation_always_shown', 10, 2);
function product_variation_always_shown($is_visible, $id){
    return true;
}


function get_current_product_category(){

    global $post;
    $terms = get_the_terms( $post->ID, 'product_cat' );
    foreach ($terms as $term ) {
        $product_cat_id = $term->term_id;
        $product_cat_name = $term->name;
        break;
    }

    $parent = get_ancestors( $product_cat_id, 'product_cat' );
    $parent_id = $parent[count($parent)-1];
    $parent_name = get_term($parent_id)->name;

    if($parent) {
        return $parent_name;
    }
    else {
        return $product_cat_name;
    }
}
