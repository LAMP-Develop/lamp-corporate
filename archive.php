<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section>
<div class="wrapper">
<ul class="local-menu">
<li><a href="<?php echo $home; ?>/portfolio/contentsmarketing/">コンテンツマーケティング</a></li>
<li><a href="<?php echo $home; ?>/portfolio/web-production/">WEB制作</a></li>
<li><a href="<?php echo $home; ?>/portfolio/jp-inbound/">訪日インバウンド</a></li>
<li><a href="<?php echo $home; ?>/portfolio/instagram/">Instagramマーケティング</a></li>
</ul>
</div>
</section>
<section id="works" class="sec oblique">
<div class="wrap">
<div class="works-list-wrap">
<ul class="works-list">
<?php if (have_posts()): while (have_posts()):
the_post();
$t = get_the_title();
if (mb_strlen($t, 'UTF-8') > 28) {
    $t = mb_substr($t, 0, 28, 'UTF-8').'…';
}
$i = get_the_post_thumbnail_url(get_the_ID(), 'large');
$company = get_field('company_name');
$cats = get_the_category(); ?>
<li>
<div class="img-wrap">
<a href="<?php the_permalink(); ?>">
<img class="gray" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</a>
</div>
<div class="inner">
<h3><a href="<?php the_permalink(); ?>"><?php echo $t; ?></a></h3>
<div class="cats">
<?php foreach ($cats as $category) {
    echo '<span style="background-color:#'.get_field('color_code', 'category_'.$category->cat_ID).'">'.$category->name.'</span>';
} ?>
</div>
</div>
</li>
<?php endwhile; endif; ?>
</ul>
</div>
<?php include_once('pagenavi.php'); ?>
</div>
</section>
<?php get_footer();