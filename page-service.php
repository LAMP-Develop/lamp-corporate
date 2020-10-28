<?php
/*
Template Name: サービス
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();
global $post;
$slug = $post->post_name;
if (has_post_thumbnail()) {
    $thumbnail = 'style="background-image:url("'.get_the_post_thumbnail_url(get_the_ID(), 'full').'")';
} else {
    $thumbnail = '';
}
?>
<section id="sub-visual" <?php echo $thumbnail; ?>>
<span class="bg"></span>
<div class="container">
<div class="inner">
<h2><?php echo $slug; ?><span><?php the_title(); ?></span></h2>
</div>
</div>
</section>
<section class="sec">
<div class="container">
<!-- <h2 class="ttl-h2">SERVICE<span>私たちが展開するサービス</span></h2> -->
<div class="service__takeeats">
<div class="service__takeeats__wrap">
<div class="service__takeeats__wrap-txt">
<div class="service__takeeats__wrap-logo">
<img src="<?php echo $wp_url; ?>/dist/images/logo_takeeats_1.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/logo_takeeats_1.png 1x, <?php echo $wp_url; ?>/dist/images/logo_takeeats_1@2x.png 2x">
</div>
<p>飲食店オーナー様向けのテイクアウトに特化した予約・決済システムです。初期費用・月額費用が無料で最短1営業日からスマホ事前予約や全国配送の受付がスタートできます。</p>
<div class="service__takeeats__wrap-futures">
<div>
<p>初期費用</p>
<p><span>0</span>円</p>
</div>
<div>
<p>月額費用</p>
<p><span>0</span>円</p>
</div>
<div>
<p>導入店舗</p>
<p><span>300</span>店舗</p>
</div>
</div>
<div class="text-md-left text-center">
<a class="btn btn-warning" href="https://system.take-eats.jp/" target="_blank">サービスサイトへ<i class="fas fa-long-arrow-alt-right ml-3"></i></a>
<!-- <a class="btn btn-outline-dark" href="https://demo.take-eats.jp/" target="_blank">デモページへ<i class="fas fa-long-arrow-alt-right ml-3"></i></a> -->
</div>
</div>
<div class="service__takeeats__wrap-img">
<img src="<?php echo $wp_url; ?>/dist/images/service_1.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/service_1.png 1x, <?php echo $wp_url; ?>/dist/images/service_1@2x.png 2x">
</div>
</div>
<div class="service__takeeats__wrap mt-5">
<div class="service__takeeats__wrap-txt">
<div class="service__takeeats__wrap-logo">
<img src="<?php echo $wp_url; ?>/dist/images/logo_takeeats_2.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/logo_takeeats_2.png 1x, <?php echo $wp_url; ?>/dist/images/logo_takeeats_2@2x.png 2x">
</div>
<p>全国3万店舗掲載のテイクアウトに特化した検索メディアです。<br>スマホで現在地から近くのテイクアウト可能店がヒットし、料理のジャンルやレビューで絞り込むことができます。</p>
<div class="service__takeeats__wrap-futures">
<div>
<p>登録店舗</p>
<img src="<?php echo $wp_url; ?>/dist/images/icon_04.png" alt="初期費用" srcset="<?php echo $wp_url; ?>/dist/images/icon_04.png 1x, <?php echo $wp_url; ?>/dist/images/icon_04@2x.png 2x">
</div>
<div>
<p>全国対応</p>
<img src="<?php echo $wp_url; ?>/dist/images/icon_05.png" alt="初期費用" srcset="<?php echo $wp_url; ?>/dist/images/icon_05.png 1x, <?php echo $wp_url; ?>/dist/images/icon_05@2x.png 2x">
</div>
<div>
<p>現在地から検索</p>
<img src="<?php echo $wp_url; ?>/dist/images/icon_06.png" alt="初期費用" srcset="<?php echo $wp_url; ?>/dist/images/icon_06.png 1x, <?php echo $wp_url; ?>/dist/images/icon_06@2x.png 2x">
</div>
</div>
<div class="text-md-left text-center">
<a class="btn btn-warning" href="https://take-eats.jp/" target="_blank">お店検索サイトへ<i class="fas fa-long-arrow-alt-right ml-3"></i></a>
</div>
</div>
<div class="service__takeeats__wrap-img">
<img src="<?php echo $wp_url; ?>/dist/images/service_2_new.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/service_2_new.png 1x, <?php echo $wp_url; ?>/dist/images/service_2_new@2x.png 2x">
</div>
</div>
</div>
</div>
<div class="logo-slick mt-5">
<?php for ($i = 1; $i <= 8; $i++): ?>
<span><img src="<?php echo $wp_url; ?>/dist/images/lp_logo_<?php echo $i; ?>.png" alt="TakeEats導入事例-<?php echo $i; ?>" srcset="<?php echo $wp_url; ?>/dist/images/lp_logo_<?php echo $i; ?>.png 1x, <?php echo $wp_url; ?>/dist/images/lp_logo_<?php echo $i; ?>@2x.png 2x"></span>
<?php endfor; ?>
</div>
</section>
<section id="webmarketing" class="sec bg-secondary">
<div class="container">
<h2 class="ttl-h2">WEB MARKETING<span>WEBマーケティング事業</span></h2>
<ul class="service__lists">
<li class="service__lists-item">
<a href="https://marketing.lamp.jp/" target="_blank">
<div class="logo">
<span><img src="<?php echo $wp_url; ?>/dist/images/logo_lampcm.svg" alt="LAMP C&M"></span>
</div>
<p>これまで200社以上を支援し蓄積したデータやノウハウを活かして、コンテンツを中心としたサイト制作やSEO対策、広告運用、SNS運用、訪日インバウンド対策など最適な施策をご提案します。</p>
<p class="mb-0 text-right">詳しく見る <i class="fas fa-chevron-right"></i></p>
</a>
</li>
<li class="service__lists-item">
<a href="https://seo.kagari.ai/" target="_blank">
<div class="logo">
<span><img src="<?php echo $wp_url; ?>/dist/images/logo_kagari.svg" alt="KAGARI"></span>
</div>
<p>WEBサイトの改善につなげるために、サイト上にあるすべてのページの検索順位を可視化したり、アクセス解析レポートの自動作成で業務を効率化することができるツールを提供しています。</p>
<p class="mb-0 text-right">詳しく見る <i class="fas fa-chevron-right"></i></p>
</a>
</li>
<li class="service__lists-item mb-0">
<a href="https://kyoto-masters.com/" target="_blank">
<div class="logo">
<span><img src="<?php echo $wp_url; ?>/dist/images/logo_km.svg" alt="kyoto-masters"></span>
</div>
<p>京都の観光情報を5ヶ国語（日本語・英語・韓国語・中国簡体字・中国繁体字）に翻訳し、WEBサイト・提携宿泊施設から配信をしているソリューションです。</p>
<p class="mb-0 text-right">詳しく見る <i class="fas fa-chevron-right"></i></p>
</a>
</li>
</ul>
</div>
<div class="logo-slick mt-md-5 mt-4">
<?php for ($i = 1; $i <= 7; $i++): ?>
<span class="logo-slick-client"><img src="<?php echo $wp_url; ?>/dist/images/lp_logo_2_<?php echo $i; ?>.png" alt="Webマーケの事例-<?php echo $i; ?>" srcset="<?php echo $wp_url; ?>/dist/images/lp_logo_2_<?php echo $i; ?>.png 1x, <?php echo $wp_url; ?>/dist/images/lp_logo_2_<?php echo $i; ?>@2x.png 2x"></span>
<?php endfor; ?>
</div>
</section>
<?php get_footer();
