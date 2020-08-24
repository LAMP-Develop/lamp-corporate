<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="sub-visual" <?php echo $thumbnail; ?>>
<span class="bg"></span>
<div class="container">
<div class="inner">
<h2>NEWS<span>お知らせ</span></h2>
</div>
</div>
</section>

<section class="sec newslist">
<div class="container">
<ul class="newslist__cats">
<li><a href="<?php echo $home; ?>/newslist/"><i class="fas fa-tag text-light mr-2"></i>すべて</a></li>
<li><a href="<?php echo $home; ?>/news/"><i class="fas fa-tag text-warning mr-2"></i>お知らせ</a></li>
<li><a href="<?php echo $home; ?>/press-release/"><i class="fas fa-tag text-danger mr-2"></i>プレスリリース</a></li>
<li><a href="<?php echo $home; ?>/event/"><i class="fas fa-tag text-success mr-2"></i>イベント</a></li>
</ul>

<div class="newslist-list">
<?php
if (have_posts()): while (have_posts()):
the_post();
$t = get_the_title();
$p = get_the_permalink();
$cat_name = get_the_category()[0]->name;
$cat_slug = get_the_category()[0]->slug;
?>
<a class="<?php echo $cat_slug; ?>" href="<?php echo $p; ?>">
<span class="time"><?php the_time('Y.m.d'); ?></span>
<span class="cat"><?php echo $cat_name; ?></span>
<span class="ttl"><?php echo $t; ?></span>
</a>
<?php endwhile; endif; ?>
</div>
<?php wp_pagenavi(); ?>

</div>
</section>

<?php get_footer();
