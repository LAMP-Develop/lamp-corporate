<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section>
<div class="wrapper">
<ul class="local-menu">
<li><a href="<?php echo $home; ?>/portfolio/">すべて</a></li>
<li><a href="<?php echo $home; ?>/portfolio/marketing/">マーケティング</a></li>
<li><a href="<?php echo $home; ?>/portfolio/creative/">クリエイティブ</a></li>
<li><a href="<?php echo $home; ?>/portfolio/reservation/">予約プラットフォーム</a></li>
</ul>
</div>
</section>
<section id="works" class="sec">
<div class="works-list-wrap">
<div class="wrap">
<ul class="works-list">
<?php if (have_posts()): while (have_posts()):
the_post();
$t = get_the_title();
$i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
$i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
$company = get_field('company_name');
$cats = get_the_category();
?>
<li>
<div class="img-wrap">
<a href="<?php the_permalink(); ?>">
<img src="<?php echo $i; ?>" srcset="<?php echo $i; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
</a>
</div>
<div class="inner">
<h3><a href="<?php the_permalink(); ?>"><?php echo $t; ?></a></h3>
<div class="cats">
<?php foreach ($cats as $category) {
    if ($category->parent) {
        echo '<span style="background-color:#'.get_field('color_code', 'category_'.$category->cat_ID).'">'.$category->name.'</span>';
    }
} ?>
</div>
</div>
</li>
<?php endwhile; endif; ?>
</ul>
<?php include_once('pagenavi.php'); ?>
</div>
</div>
</section>
<?php get_footer();
