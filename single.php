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

<article class="py-5 singlepost">
<div class="container">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<h2 class="singlepost-ttl"><?php the_title(); ?></h2>
<p class="singlepost-time"><span><i class="far fa-calendar-alt mr-2"></i><?php the_time('Y.m.d'); ?></span></p>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<div class="text-center mt-4">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>/newslist/">一覧に戻る</a>
</div>
</div>
</article>

<?php get_footer();
