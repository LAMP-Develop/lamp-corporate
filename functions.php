<?php

// アイキャッチ設定
add_theme_support('post-thumbnails');

// html5許可
add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);

// RSS用リンク出力
add_theme_support('automatic-feed-links');

// oembed消去
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// wp-json消去
remove_action('template_redirect', 'rest_output_link_header', 11);

// 絵文字消去
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// 外部投稿ツール消去
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// meta generator消去
remove_action('wp_head', 'wp_generator');

// 短縮URL消去
remove_action('wp_head', 'wp_shortlink_wp_head');

// 次の記事消去
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// adminbarカスタマイズ
function remove_adminbar_item($wp_admin_bar)
{
    if (!is_admin()) {
        $wp_admin_bar->remove_node('wp-logo');
        $wp_admin_bar->remove_node('new-content');
        $wp_admin_bar->remove_node('comments');
        $wp_admin_bar->remove_node('appearance');
        $wp_admin_bar->remove_node('updates');
        $wp_admin_bar->remove_node('search');
        $wp_admin_bar->remove_node('customize');
    }
}
add_action('admin_bar_menu', 'remove_adminbar_item', 999);

// タイトルタグ追加
add_theme_support('title-tag');

// タイトルタグセパレーター変更
function title_separator($sep)
{
    $sep = '｜';
    return $sep;
}
add_filter('document_title_separator', 'title_separator');

// 標準のjquery消去
function my_delete_local_jquery()
{
    if (!is_admin() && !is_page(['contact', 'recruit-form']) && !is_single()) {
        wp_deregister_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'my_delete_local_jquery');

// ウィジェット登録
function arphabet_widgets_init()
{
    register_sidebar([
        'name' => 'サイドウイジェット',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-ttl">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'arphabet_widgets_init');

// メニュー登録
function register_my_menu()
{
    register_nav_menu('header-menu', __('ヘッダーメニュー'));
}
add_action('init', 'register_my_menu');

// エディタースタイル
function gutenberg_support_setup()
{
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'gutenberg_support_setup');

// CSSの管理
function twpp_enqueue_styles()
{
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri().'/dist/css/style.css',
        [],
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

// JSの管理
function add_my_scripts()
{
    wp_enqueue_script(
        'base-script',
        get_template_directory_uri().'/dist/js/bundle.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

// 外観GAメニュー追加
function ga_theme_customize_register($wp_customize)
{
    $wp_customize->add_section(
        'ga_id_scheme',
        array(
            'title' => 'Google Analytics ID',
            'priority' => 1,
        )
    );
    $wp_customize->add_setting(
        'ga_id',
        array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        'ga_id_origin_text',
        array(
            'settings' => 'ga_id',
            'label' => 'トラッキングID',
            'section' => 'ga_id_scheme',
            'type' => 'text',
        )
    );
}
add_action('customize_register', 'ga_theme_customize_register');

// 記事一覧アイキャッチ表示
function customize_manage_posts_columns($columns)
{
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');

function customize_manage_posts_custom_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'thumbnail', array('style'=>'width:100px;height:auto'));
    }
    if (isset($thum) && $thum) {
        echo $thum;
    }
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);

// アドミンバーCSS
add_theme_support('admin-bar', array('callback' => '__return_false'));
function mytheme_admin_bar_callback()
{
    if (is_user_logged_in()) {
        echo '<style>html{padding-top:32px !important}@media(max-width:782px){html{padding-top:46px !important}#wpadminbar{position:fixed !important}}</style>';
    }
}
add_action('wp_head', 'mytheme_admin_bar_callback');

// ソーシャルボタン
function set_sns($id)
{
    $ttl = get_the_title($id);
    $permalink = get_the_permalink($id);
    $source_html = <<< EOM
<div class="sns-btns clearfix">
<a class="btn-t" href="https://twitter.com/share" data-text="{$ttl}" data-url="{$permalink}" data-hashtags="株式会社ランプ" data-via="twitterdev" data-related="twitterapi,twitter" target="_blank"><i class="fab fa-twitter"></i></a>
<a class="btn-f" href="https://www.facebook.com/sharer.php?u={$permalink}" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a class="btn-g" href="https://plus.google.com/share?url={$permalink}" target="_blank"><i class="fab fa-google-plus-g"></i></a>
<a class="btn-h" href="http://b.hatena.ne.jp/add?mode=confirm&url={$permalink}" target="_blank"><i class="fa fa-hatena"></i></a>
<a class="btn-p" href="http://getpocket.com/edit?url={$permalink}" target="_blank"><i class="fab fa-get-pocket"></i></a>
<a class="btn-l" href="http://line.naver.jp/R/msg/text/{$permalink}" target="_blank"><i class="fab fa-line"></i></a>
</div>
EOM;
    echo $source_html;
}

// 親ページ判定
function is_parent_slug()
{
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    } else {
    }
}

// 記事消去時に画像も消去
function delete_post_attachment($post_id)
{
    $args = array(
        'numberposts' => -1,
        'post_parent' => $post_id,
        'post_type' => 'attachment',
        'post_status' => 'any',
        'post_mime_type' => 'image'
    );
    $attachments = get_children($args);
    foreach ($attachments as $attachment) {
        wp_delete_attachment($attachment->ID, true);
    }
}
add_action('before_delete_post', 'delete_post_attachment');
