<?php
if (!function_exists('initialize_tinymce_styles')):
function initialize_tinymce_styles($init_array)
{
    $style_formats = array(
    array(
      'title' => 'レッド',
      'inline' => 'span',
      'classes' => 'txt-red'
    ),
    array(
      'title' => 'オレンジ',
      'inline' => 'span',
      'classes' => 'txt-orange'
    ),
    array(
      'title' => 'イエロー',
      'inline' => 'span',
      'classes' => 'txt-yellow'
    ),
    array(
      'title' => 'ブルー',
      'inline' => 'span',
      'classes' => 'txt-blue'
    ),
    array(
      'title' => 'リンクボタン',
      'inline' => 'a',
      'classes' => 'link-btn'
    ),
  );
    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;
}
endif;
add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

if (!function_exists('add_styles_to_tinymce_buttons')):
function add_styles_to_tinymce_buttons($buttons)
{
    $temp = array_shift($buttons);
    array_unshift($buttons, 'styleselect');
    array_unshift($buttons, $temp);

    return $buttons;
}
endif;
add_filter('mce_buttons_2', 'add_styles_to_tinymce_buttons');
