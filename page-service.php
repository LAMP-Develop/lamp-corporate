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
<h2 class="ttl-h2">SERVICE<span>私たちが展開するサービス</span></h2>
<div class="service__takeeats">

<div class="service__takeeats__wrap">
<div class="service__takeeats__wrap-txt">
<div class="service__takeeats__wrap-logo">
<img src="<?php echo $wp_url; ?>/dist/images/logo_takeeats_1.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/logo_takeeats_1.png 1x, <?php echo $wp_url; ?>/dist/images/logo_takeeats_1@2x.png 2x">
</div>
<p>飲食店オーナー様向けのテイクアウト（お持ち帰り）に特化した予約・決済システムです。サービスの拡大やシステムの導入を検討している飲食店オーナー様のご要望にお応えするために生まれました。</p>
<div class="service__takeeats__wrap-futures">
<div>
<p>初期費用</p>
<img src="<?php echo $wp_url; ?>/dist/images/icon_01.png" alt="初期費用" srcset="<?php echo $wp_url; ?>/dist/images/icon_01.png 1x, <?php echo $wp_url; ?>/dist/images/icon_01@2x.png 2x">
</div>
<div>
<p>即日対応</p>
<img src="<?php echo $wp_url; ?>/dist/images/icon_02.png" alt="初期費用" srcset="<?php echo $wp_url; ?>/dist/images/icon_02.png 1x, <?php echo $wp_url; ?>/dist/images/icon_02@2x.png 2x">
</div>
<div>
<p>事前決済</p>
<img src="<?php echo $wp_url; ?>/dist/images/icon_03.png" alt="初期費用" srcset="<?php echo $wp_url; ?>/dist/images/icon_03.png 1x, <?php echo $wp_url; ?>/dist/images/icon_03@2x.png 2x">
</div>
</div>
<div class="text-md-left text-center">
<a class="btn btn-outline-dark" href="https://system.take-eats.jp/" target="_blank">サービスサイトへ<i class="fas fa-long-arrow-alt-right ml-3"></i></a>
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
<p>全国3万店舗掲載のテイクアウトに特化した検索サイトです。<br>エリアや料理のジャンル、人気の店舗などからお店を検索することが出来ます。</p>
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
<a class="btn btn-outline-dark" href="https://take-eats.jp/" target="_blank">お店検索サイトへ<i class="fas fa-long-arrow-alt-right ml-3"></i></a>
</div>
</div>
<div class="service__takeeats__wrap-img">
<img src="<?php echo $wp_url; ?>/dist/images/service_2.png" alt="TakeEats" srcset="<?php echo $wp_url; ?>/dist/images/service_2.png 1x, <?php echo $wp_url; ?>/dist/images/service_2@2x.png 2x">
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
<li class="service__lists-item mb-0">
<a href="https://seo.kagari.ai/" target="_blank">
<div class="logo">
<span><img src="<?php echo $wp_url; ?>/dist/images/kagari_seo.svg" alt="KAGARI"></span>
</div>
<p>WEBサイトの改善につなげるために、サイト上にあるすべてのページの検索順位を可視化したり、アクセス解析レポートの自動作成で業務を効率化することができるツールを提供しています。</p>
<p class="mb-0 text-right">詳しく見る <i class="fas fa-chevron-right"></i></p>
</a>
</li>
</ul>
</div>
</section>

<div class="logo-slick my-5">
<?php for ($i = 1; $i <= 7; $i++): ?>
<span><img src="<?php echo $wp_url; ?>/dist/images/lp_logo_2_<?php echo $i; ?>.png" alt="Webマーケの事例-<?php echo $i; ?>" srcset="<?php echo $wp_url; ?>/dist/images/lp_logo_2_<?php echo $i; ?>.png 1x, <?php echo $wp_url; ?>/dist/images/lp_logo_2_<?php echo $i; ?>@2x.png 2x"></span>
<?php endfor; ?>
</div>

<?php get_footer();