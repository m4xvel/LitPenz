<?php

function enqueue_custom_styles()
{
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    if (is_page_template('book-custom.php')) {
        wp_enqueue_style('style-book', get_template_directory_uri() . '/assets/css/style-book.css');
    } else if (is_page_template('author-custom.php')) {
        wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8.4.7/swiper-bundle.min.css');
        wp_enqueue_style('style-author', get_template_directory_uri() . '/assets/css/style-author.css');
    } else if (is_404()) {
        wp_enqueue_style('style-404', get_template_directory_uri() . '/assets/css/style-404.css');
    } else if (is_search()) {
        wp_enqueue_style('style-search', get_template_directory_uri() . '/assets/css/style-search.css');
    }
}

function enqueue_custom_scripts()
{
    if (is_page('home')) {
        wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js',  array(), null, true);
    } else if (is_page_template('book-custom.php')) {
        wp_enqueue_script('script-book', get_template_directory_uri() . '/assets/js/script-book.js',  array(), null, true);
    } else if (is_page_template('author-custom.php')) {
        wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8.4.7/swiper-bundle.min.js',  array(), null, true);
        wp_enqueue_script('script-author', get_template_directory_uri() . '/assets/js/script-author.js',  array(), null, true);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter('upload_mimes', 'svg_upload_allow');

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {

        // разрешим
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext']  = false;
            $data['type'] = false;
        }
    }

    return $data;
}
