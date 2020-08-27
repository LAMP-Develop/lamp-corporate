<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();
?>
<section id="sub-visual">
<span class="bg"></span>
<div class="container">
<div class="inner">
<h2>404 Not Found<span>ページが見つかりません</span></h2>
</div>
</div>
</section>
<section class="sec">
<div class="container">
<div class="singlepost">
<p class="text-center">お探しのページが見つかりませんでした。</p>
<div class="mt-5 text-center">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>">トップページへ戻る</a>
</div>
</div>
</div>
</section>
<?php get_footer();