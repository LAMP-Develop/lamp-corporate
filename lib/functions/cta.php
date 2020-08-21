<?php

// cta出力
function lamp_get_cta($pid = "")
{
    global $post;
    $check_cta = '';
    $lamp_cta = get_post_meta($post->ID, 'lamp_cta', true);
    if (is_array($lamp_cta)) {
        extract($lamp_cta);
    }
    if ('none' == $check_cta || '' == $check_cta) {
        return false;
    } elseif ($check_cta == 'custompost') {
        $cp_id =  $cta_select;
        $lamp_cta = get_post_meta($cp_id, 'lamp_cta', true);
        extract($lamp_cta);
        $customposts = get_post($cp_id);
        $lamp_cta['title'] = ($customposts->post_title);
        $lamp_cta['content'] = $customposts->post_content;
        $lamp_cta['button_text'] = ($select_button);
        $lamp_cta['button_url'] = esc_url($select_button_url);
        $thumbnail_id = get_post_thumbnail_id($cp_id);
        $image = wp_get_attachment_image_src($thumbnail_id, 'large');
        $src = $image[0];
        $width = $image[1];
        $height = $image[2];
        $lamp_cta['image'] = '<img src="'.$src.'" alt="'.$lamp_cta['title'].'" width="'.$width.'" height="'.$height.'">';
    } elseif ($check_cta == 'pageorg') {
        $cta_title = ($org_title);
        $lamp_cta['title'] = esc_html($cta_title);
        $lamp_cta['content'] = $org_content;
        $lamp_cta['image'] = '<img src="'.esc_url($org_image).'">';
        $lamp_cta['button_text'] = ($org_button_text);
        $lamp_cta['button_url'] = esc_url($org_button_url);
    }
    if (isset($lamp_cta['title']) && $lamp_cta['title'] !== '' && isset($lamp_cta['content']) && $lamp_cta['content'] !== ''  && isset($lamp_cta['image']) && $lamp_cta['image'] !== '<img src="">') {
        lamp_make_cta_block($lamp_cta);
    }
}
function lamp_make_cta_block($lamp_cta)
{
    $title = '';
    $cta_content = '';
    $title = (isset($lamp_cta['title']) && $lamp_cta['title'] !== '') ? $lamp_cta['title'] : "";
    $cta_content = (isset($lamp_cta['content']) && $lamp_cta['content'] !== '') ? $lamp_cta['content'] : "";
    $button_text = (isset($lamp_cta['button_text']) && $lamp_cta['button_text'] !== '') ? $lamp_cta['button_text'] : "";
    $button_url = (isset($lamp_cta['button_url']) && $lamp_cta['button_url'] !== '') ? $lamp_cta['button_url'] : "";
    $image = (isset($lamp_cta['image']) && $lamp_cta['image'] !== '') ? $lamp_cta['image'] : "";
    $source_html=<<<eof
<div class="post-cta-inner">
<div class="cta-img">{$image}</div>
<div class="txt-wrap">
<h2 class="cta-post-title">{$title}</h2>
<div class="cta-cap">{$cta_content}</div>
<div class="btn">
<a class="button" href="{$button_url}">{$button_text}<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
eof;
    echo $source_html;
}

// ctaのcustomfield

add_action('save_post', 'lamp_my_box_save');
function lamp_my_box_save($post_id)
{
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    (isset($_POST['lamp_cta'])) ? update_post_meta($post->ID, 'lamp_cta', $_POST['lamp_cta']) : "";
    (isset($_POST['lamp_cta_select_button'])) ? update_post_meta($post->ID, 'lamp_cta_select_button', $_POST['lamp_cta_select_button']) : "";
    (isset($_POST['lamp_cta_select_button_url'])) ? update_post_meta($post->ID, 'lamp_cta_select_button_url', $_POST['lamp_cta_select_button_url']) : "";
    (isset($_POST['lamp_cta_select_button_cvtag'])) ? update_post_meta($post->ID, 'lamp_cta_select_button_cvtag', $_POST['lamp_cta_select_button_cvtag']) : "";
}

add_action('add_meta_boxes', 'add_lamp_cta');
function add_lamp_cta()
{
    add_meta_box('ctameta_box', 'CTA設定', 'lamp_post_cta', 'post', 'normal', 'low');
}

function lamp_post_cta()
{
    global $post;
    wp_nonce_field(wp_create_nonce(__FILE__), 'my_nonce_cta');
    $saved_lamp_cta = "";
    $saved_lamp_cta = get_post_meta($post->ID, 'lamp_cta', true); ?>
<script>
jQuery('document').ready(function(){
jQuery('.media-upload').each(function(){
var rel = jQuery(this).attr("rel");
jQuery(this).click(function(){
window.send_to_editor = function(html) {
html = '<a>' + html + '</a>';
imgurl = jQuery('img', html).attr('src');
jQuery('#'+rel).val(imgurl);
tb_remove();
}
formfield = jQuery('#'+rel).attr('name');
tb_show(null, 'media-upload.php?post_id=0&type=image&TB_iframe=true');
return false;
});
});
});
</script>
<?php
    $lamp_cta = get_post_meta($post->ID, 'lamp_cta', true);
    $check_cta = "";
    $cta_select = "";
    $org_title = "";
    $org_image = "";
    $org_content = "";
    $org_button_text = "";
    $org_button_url = "";
    if (is_array($lamp_cta)) {
        extract($lamp_cta);
    } ?>
<table class="form-table cmb_metabox">
<tr>
<td>
<small>記事直下に表示するCTAを選択して下さい。</small>
<ul>
<li class="cmb_option"><input type="radio" name="lamp_cta[check_cta]" id="lamp_cta1" value="none" <?php checked($check_cta, "none"); ?>>
<label for="lamp_cta1">表示しない</label>
</li>
<li class="cmb_option"><input type="radio" name="lamp_cta[check_cta]" id="lamp_cta2" value="custompost" <?php checked($check_cta, "custompost"); ?>>
<label for="lamp_cta2">既に作成してあるCTAの中から選ぶ</label>
</li>
<li class="cmb_option">
<input type="radio" name="lamp_cta[check_cta]" id="lamp_cta3" value="pageorg" <?php checked($check_cta, "pageorg"); ?>>
<label for="lamp_cta3">このページ独自のCTAを作る</label>
</li>
</ul>
<p class="cmb_metabox_description"></p>
</td>
</tr>
<tr class="cmb-type-cta_select cmb_id_lamp_cta_select">
<td>
<h4>既に作成してあるCTAの中から選ぶ</h4>
<p><small>管理画面メニュー「CTA」で作成した物を下記より選んで下さい。</small></p>
<?php lamp_cmb_render_cta_select('lamp_cta[cta_select]', $cta_select); ?><br><br>
</td>
</tr>
<tr class="cmb-type-cta_select cmb_id_lamp_cta_org_title">
<td>
<h4>ページ独自のCTAタイトル</h4>
<input type="text" class="regular-text" name="lamp_cta[org_title]" id="lamp_cta_org_title" value="<?php echo esc_html($org_title); ?>">
</td>
</tr>
<tr class="cmb-type-cta_select cmb_id_lamp_cta_org_image">
<td>
<h4>画像</h4>
<input type="text" id="lamp_cta_org_image" name="lamp_cta[org_image]" class="regular-text" value="<?php echo esc_url($org_image); ?>">
<a class="media-upload" href="JavaScript:void(0);" rel="lamp_cta_org_image">
<input class="cmb_upload_button button" type="button" value="画像をアップロードする">
</a>
</td>
</tr>
<tr class="cmb-type-cta_select cmb_id_lamp_cta_org_content">
<td>
<h4>ページ独自のCTAコンテンツ</h4>
<?php wp_editor($org_content, 'lamp_cta_org_content', array('media_buttons'=>true, 'textarea_name'=>'lamp_cta[org_content]','textarea_rows'=>10,'tiny_mce'=>true, 'tinymce_adv' => array( 'width' => '600'))); ?>
</td>
</tr>
<tr class="cmb-type-cta_select cmb_id_lamp_cta_org_button_text">
<td>
<h4>ボタンに表示されるテキスト</h4>
<input type="text" class="regular-text" name="lamp_cta[org_button_text]" id="lamp_cta_org_button_text" value="<?php echo esc_html($org_button_text); ?>">
</td>
</tr>
<tr class="cmb-type-cta_select cmb_id_lamp_cta_org_button_url">
<td>
<h4>ボタンをクリックしたときのリンク先URL</h4>
<input type="text" class="regular-text" name="lamp_cta[org_button_url]" id="lamp_cta_org_button_url" value="<?php echo esc_url($org_button_url); ?>">
</td>
</tr>
</table>
<?php
}

add_filter('lamp_cmb_render_cta_select', 'lamp_cmb_render_cta_select', 10, 2);
function lamp_cmb_render_cta_select($field, $meta)
{
    $args = array(
      'post_type' => 'cta',
      'showposts' => -1
    );
    $the_query = new WP_Query($args);
    $cta_loop = '<select name="'.$field.'">';
    foreach ($the_query->posts as $cta) {
        $selected = selected($cta->ID, $meta, false);
        $cta_loop .= '<option value="'.$cta->ID.'"'.$selected.'>'.esc_html($cta->post_title).'</option>';
    }
    $cta_loop .= '</select>';
    wp_reset_postdata();
    echo $cta_loop;
}

add_action('add_meta_boxes', 'add_lamp_cta_button');
function add_lamp_cta_button()
{
    add_meta_box('lamp_cta_button', 'CTAで使用するボタンの設定', 'lamp_cta_button', 'cta', 'normal', 'low');
}

function lamp_cta_button()
{
    global $post;
    wp_nonce_field(wp_create_nonce(__FILE__), 'my_nonce');
    $lamp_cta = get_post_meta($post->ID, 'lamp_cta', true);
    $check_cta = "";
    $select_button = "";
    $select_button_url = "";
    if (is_array($lamp_cta)) {
        extract($lamp_cta);
    } ?>
<h4>ボタンに表示されるテキスト</h4>
<input type="text" name="lamp_cta[select_button]" id="lamp_cta_select_button" value="<?php echo esc_html($select_button); ?>">
<h4>ボタンをクリックしたときのリンク先URL</h4>
<input type="text" name="lamp_cta[select_button_url]" id="lamp_cta_select_button_url" value="<?php echo esc_url($select_button_url); ?>">
<?php
}

// エディターjsの追加
function lamp_admin_asset()
{
    wp_register_script('lamp_admin_js', get_template_directory_uri().'/lib/js/wp.js', array('jquery'));
    wp_enqueue_script('lamp_admin_js');
}
add_action('admin_enqueue_scripts', 'lamp_admin_asset');
