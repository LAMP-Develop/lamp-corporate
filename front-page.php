<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="main-visual">
<div class="inner">
<p class="tlt">Creative Marketing Company <br>in Kyoto.</p>
<h1>株式会社ランプは京都を拠点に全国の皆さまへWEBサービスをお届けする会社です。</h1>
</div>
<div class="scroll"><a href="#concept" class="jump">SCROLL DOWN<i class="fas fa-long-arrow-alt-down"></i></a></div>
</section>

<section id="concept">
<div class="wrap top">
<h2>WHAT WE DO</h2>
<div class="img-wrap">
<img src="<?php echo $wp_url; ?>/lib/images/top/bg_top_concept.png" alt="株式会社ランプのコンセプト">
</div>
<span class="abs"></span>
<div class="txt-wrap">
<div class="inner">
<h3>私たち独自のWEBサービスで”灯火”を</h3>
<p>創業以来、私たちは200社以上の企業のマーケティング活動を支援してきました。
<br>クリエイティブとテクノロジーを融合させ、買い手と売り手、そして地域社会を明るく灯す会社を目指しています。</p>
<div class="btn">
<a href="<?php echo $home; ?>/company/" class="mt-2">会社紹介を見る<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
</section>

<section id="service" class="sec">
<h2 class="top-ttl">SERVICE<span>私たちが展開するサービス</span></h2>
<div class="wrap">
<div class="home-services">

<div class="inner">
<a href="https://system.take-eats.jp/" target="_blank">
<i class="fas fa-long-arrow-alt-right"></i>
<div class="img">
<img src="<?php echo $wp_url; ?>/lib/images/top/service_img_05.png" alt="TakeEats">
</div>
<div class="txt">
<div class="txt-inner">
<img style="margin-top:-10px;" src="<?php echo $wp_url; ?>/lib/images/top/logo_takeeats.png" alt="TakeEats">
<p class="sub-ttl">飲食店向けテイクアウト予約サービス</p>
<p>TakeEatsは飲食店オーナー様向けのテイクアウト（お持ち帰り）に特化した予約・決済システムです。</p>
</div>
</div>
</a>
</div>

<div class="inner">
<a href="https://system.take-eats.jp/" target="_blank">
<i class="fas fa-long-arrow-alt-right"></i>
<div class="img">
<img src="<?php echo $wp_url; ?>/lib/images/top/service_img_06.png" alt="TakeEats">
</div>
<div class="txt">
<div class="txt-inner">
<img style="margin-top:-10px;" src="<?php echo $wp_url; ?>/lib/images/top/logo_takeeats_02.png" alt="TakeEatsお店検索">
<p class="sub-ttl">テイクアウトができるお店検索</p>
<p>TakeEatsお店検索は、全国のテイクアウト（お持ち帰り）ができるお店を検索することができるポータルサイトです。</p>
</div>
</div>
</a>
</div>

<div class="inner">
<a href="https://marketing.lamp.jp" target="_blank">
<i class="fas fa-long-arrow-alt-right"></i>
<div class="img">
<img src="<?php echo $wp_url; ?>/lib/images/top/service_img_01.png" alt="WEBマーケティング支援">
</div>
<div class="txt">
<div class="txt-inner">
<img src="<?php echo $wp_url; ?>/lib/images/top/logo_cm.png" alt="WEBマーケティング支援">
<p class="sub-ttl">WEBマーケティング支援</p>
<p>200社以上を支援した実績を持つ解析解析データと質の高いデジタルコンテンツを用いたWEBマーケティングをご提供します。</p>
</div>
</div>
</a>
</div>

<div class="inner">
<a href="https://kagari.ai" target="_blank">
<i class="fas fa-long-arrow-alt-right"></i>
<div class="img">
<img src="<?php echo $wp_url; ?>/lib/images/top/service_img_02.png" alt="アクセス解析ツール">
</div>
<div class="txt">
<div class="txt-inner">
<img src="<?php echo $wp_url; ?>/lib/images/top/logo_main_kagari.png" alt="アクセス解析ツール">
<p class="sub-ttl">アクセス解析ツール</p>
<p>50,000ページ以上を手掛けたノウハウをもとに開発した独自のアクセス解析ツールです。</p>
</div>
</div>
</a>
</div>
</section>

<section id="recruit">
<div class="wrap">
<h2 class="top-ttl">RECRUIT<span>採用について</span></h2>
<img src="<?php echo $wp_url; ?>/lib/images/top/recruit_3.jpg" alt="採用情報" class="abs">
<div class="inner">
<p>株式会社ランプは
<br>京都が好きな人材が集まり、
<br>共に高みを目指して働いています。</p>
<div class="btn">
<a href="<?php echo $home; ?>/recruit/">採用情報を見る<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</section>
<?php get_footer();
