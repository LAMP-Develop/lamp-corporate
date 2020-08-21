<?php

// スマホ判定
function is_mobile()
{
    $useragents = array('iPhone','iPod','Android','dream','CUPCAKE','blackberry9500','blackberry9530','blackberry9520','blackberry9550','blackberry9800','webOS','incognito','webmate');
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// ダッシュボードウィジェット（お知らせ）
function lamp_dashboard_widgets()
{
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', '株式会社ランプからのお知らせ', 'lamp_dashboard_text');
}

function lamp_dashboard_text()
{
    echo '<iframe src="https://lamp.jp/addbox/" width="100%" height="300"></iframe>';
}
add_action('wp_dashboard_setup', 'lamp_dashboard_widgets');

// 外観GAメニュー追加
function ga_theme_customize_register($wp_customize)
{
    $wp_customize->add_section('ga_id_scheme',
        array(
            'title' => 'Google Analytics ID',
            'priority' => 1,
        )
    );
    $wp_customize->add_setting('ga_id',
        array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control('ga_id_origin_text',
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
