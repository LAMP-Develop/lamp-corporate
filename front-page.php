<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="main-visual">
<div class="inner">
<p class="tlt">DX Platform to Society<br>from KYOTO.</p>
<p class="desc">株式会社ランプは京都にあるベンチャー企業です。
<br>創業以来8年間、200社以上の中小企業のWEBマーケティングを支援したのち、<br class="d-md-inline d-none">アフターコロナに向けて地域社会に貢献するべく立ち上がりました。</p>
</div>
<div class="scroll"><a class="text-uppercase" href="#skip-content">Scrolldown<i class="fas fa-long-arrow-alt-down"></i></a></div>
</section>
<div id="skip-content"></div>
<section id="home-news" class="sec bg-diagonal">
<div class="container">
<h2 class="ttl-h2">NEWS<span>最新情報</span></h2>
<div class="newslist__list">
<?php
$args = [
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
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
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="more-btn mt-md-5">
<a href="<?php echo $home; ?>/newslist/">VIEW MORE<i class="fas fa-long-arrow-alt-right ml-3"></i></a>
</div>
</div>
</section>
<section id="home-service" class="sec">
<div class="container">
<h2 class="ttl-h2">SERVICE<span>私たちが展開するサービス</span></h2>
<div class="service__hero">
<a class="service__hero-item" href="<?php echo $home; ?>/service/">
<div class="service__hero-logo">
<img src="<?php echo $wp_url; ?>/dist/images/logo_takeeats_1_w.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/logo_takeeats_1_w.png 1x, <?php echo $wp_url; ?>/dist/images/logo_takeeats_1_w@2x.png 2x" style="width: auto; height: 46px;">
</div>
<p class="service__hero-ttl">飲食店向けテイクアウトの<br>プラットフォーム</p>
<div class="service__hero-btn">VIEW MORE<i class="fas fa-long-arrow-alt-right ml-3"></i></div>
</a>
<a class="service__hero-item" href="<?php echo $home; ?>/service/">
<div class="service__hero-logo">
<img src="<?php echo $wp_url; ?>/dist/images/logo_takeeats_2_w.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/logo_takeeats_2_w.png 1x, <?php echo $wp_url; ?>/dist/images/logo_takeeats_2_w@2x.png 2x" style="width: auto; height: 70px;">
</div>
<p class="service__hero-ttl">全国のおうちグルメが<br>楽しめるお店検索サイト</p>
<div class="service__hero-btn">VIEW MORE<i class="fas fa-long-arrow-alt-right ml-3"></i></div>
</a>
</div>
</div>
</section>
<section id="recruit" class="sec">
<div class="container">
<h2 class="ttl-h2">RECRUIT<span>採用について</span></h2>
<img src="<?php echo $wp_url; ?>/dist/images/recruit_3.jpg" alt="採用情報">
<div class="inner">
<p>株式会社ランプは
<br>京都が好きな人材が集まり、
<br>共に高みを目指して働いています。</p>
<div class="mt-md-5 mt-4 text-md-left text-center">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>/recruit/">採用情報を見る<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</section>
<?php get_footer();
