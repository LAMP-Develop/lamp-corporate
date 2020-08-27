<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$path = explode("/", substr($_SERVER['REQUEST_URI'], 0, -1));
$now_slug = end($path);
get_header(); ?>

<section id="sub-visual" <?php echo $thumbnail; ?>>
<span class="bg"></span>
<div class="container">
<div class="inner">
<h2>NEWS<span>お知らせ</span></h2>
</div>
</div>
</section>

<section class="sec">
<div class="container">

<div class="newslist__cats">
<?php
if ($now_slug === 'newslist') {
  $cat_class = 'active';
} else {
  $cat_class = '';
}
?>
<a class="<?php echo $cat_class; ?>" href="<?php echo $home; ?>/newslist/">すべて</a>
<?php
$cats = get_categories();
foreach ($cats as $key => $cat):
if ($now_slug === $cat->slug) {
    $cat_class = 'active';
} else {
    $cat_class = '';
}
?>
<a class="<?php echo $cat_class; ?>" href="<?php echo $home.'/'.$cat->slug; ?>"><?php echo $cat->name; ?></a>
<?php endforeach; ?>
</div>

<div class="newslist__list">
<?php
if (have_posts()): while (have_posts()):
the_post();
$t = get_the_title();
$p = get_the_permalink();
$categories = get_the_category();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/no-img.png';
}
?>
<a class="newslist__list-item" href="<?php echo $p; ?>">
<div class="newslist__list-thumbnail">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="newslist__list-txt">
<p class="newslist__list-ttl"><?php echo $t; ?></p>
<div class="newslist__list-meta">
<span><?php the_time('Y.m.d'); ?></span>
<span><?php echo $categories[0]->name; ?></span>
</div>
</div>
</a>
<?php endwhile; endif; ?>
</div>
<?php wp_pagenavi(); ?>

</div>
</section>

<?php get_footer();
