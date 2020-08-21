<?php
/*
Template Name: サービス
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section id="service-concept" class="sec">
<div class="wrapper">
<div class="txt-wrap">
<h2 class="service-ttl">デジタルコンテンツを基軸にサービスを展開</h2>
<p>私たちの特長はコンテンツにこだわり、デザイナーやライター、カメラマンなど各分野のエキスパートが社内に在籍していることです。
<br>デジタルコンテンツを中心に、様々なニーズにお応えできるサービスをご提供いたします。</p>
</div>
<div class="img-wrap">
<img src="<?php echo $wp_url; ?>/lib/images/service/pic_service.png" alt="WEBを活用した独自の技術で企業様のビジネスをサポート">
</div>
</div>
</section>
<section id="strong" class="sec">
<div class="wrapper">
<div class="flex-wrap">
<div class="flex">
<div class="img-wrap">
<img src="<?php echo $wp_url; ?>/lib/images/service/contentsmarketing.png" alt="長年のノウハウを活かした最善のWEBマーケティングの手法を企業様に提供">
</div>
<div class="txt-wrap">
<span>01.</span>
<h3>長年のノウハウを活かした最善の<br>WEBマーケティング手法を企業様に提供</h3>
<p>スマホの普及などにより、WEBマーケティングの需要がますます高まる中、私たちは長年研究してきたノウハウを中小企業様を中心に様々な業種業界で実施し成果を上げております。</p>
<div class="btn">
<a href="<?php echo $home; ?>/service/contents-marketing/">詳しく見る<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="flex">
<div class="img-wrap">
<img src="<?php echo $wp_url; ?>/lib/images/service/anaiysis.png" alt="月間利用者数2,000万人超えの人気SNSを活用して販促">
</div>
<div class="txt-wrap">
<span>02.</span>
<h3>月間利用者数2,000万人超えの<br>人気SNSを活用して販促</h3>
<p>20代〜30代の女性を中心に利用者数の多い人気写真共有SNS「Instagram（インスタグラム）」を活用したマーケティングサービスをBtoC向け企業様を中心にご提供しております。</p>
<div class="btn">
<a href="<?php echo $home; ?>/service/instagram-marketing/">詳しく見る<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
<div class="flex">
<div class="img-wrap">
<img src="<?php echo $wp_url; ?>/lib/images/service/inbound.png" alt="増加し続ける訪日観光客に向けたおもてなしサービスを展開示">
</div>
<div class="txt-wrap">
<span>03.</span>
<h3>増加し続ける訪日観光客に向けた<br>おもてなしサービスを展開</h3>
<p>世界中の観光客をいかに集客し、いかにホスピタリティーを提供できるかが重要になりつつあります。 私たちはWEBサイトとアプリ、紙面を連動させた多言語対応のサービスを展開しています。</p>
<div class="btn">
<a href="<?php echo $home; ?>/service/inbound-service/">詳しく見る<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- <section class="sec">
<div class="wrap">
<div class="logo-list slick-logo">
<div class="km">
<a href="http://kyoto-masters.com/" target="_blank" rel="noopener">
<img src="<?php echo $wp_url; ?>/lib/images/common/km.png" alt="訪日インバウンドメディア「KYOTO MASTRES-京都マスターズ」">
<p>京都市内の宿泊施設と連動した<br>多言語観光メディアサイト</p>
</a>
</div>
<div class="irori">
<img src="<?php echo $wp_url; ?>/lib/images/common/irori.png" alt="株式会社ランプオリジナルWordPressテーマ「irori」">
<p>コンテンツマーケティングに特化した<br>オリジナルWordPressテーマ</p>
</div>
<div class="tomosu">
<img src="<?php echo $wp_url; ?>/lib/images/common/tomosu.png" alt="インフルエンサー検索システム「tomosu」">
<p>インスタグラムユーザーの<br>企業向けクラウドプラットフォーム</p>
</div>
<div class="danro">
<img src="<?php echo $wp_url; ?>/lib/images/common/danro.png" alt="Web解析システム「Danro」">
<p>WEBサイト・コンテンツを細かく分析<br>アクセス解析ツール</p>
</div>
</div>
</div>
</section> -->
<section id="option">
<div class="wrapper">
<h2 class="top-ttl">OTHER<span>その他の私たちにできること</span></h2>
<ul>
<li>
<a href="<?php echo $home; ?>/service/owend-media/">
<img src="<?php echo $wp_url; ?>/lib/images/service/media.png" alt="オウンドメディア制作">
<p>オウンドメディア制作</p>
<p>WordPressでのテーマ設計</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/web-creative/">
<img src="<?php echo $wp_url; ?>/lib/images/service/web-create.png" alt="WEBサイト制作">
<p>WEBサイト制作</p>
<p>デザイン性・運用性に強み</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/seo/">
<img src="<?php echo $wp_url; ?>/lib/images/service/seo.png" alt="SEO対策">
<p>SEO対策</p>
<p>内部対策検索順位の上位化</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/access-analysis/">
<img src="<?php echo $wp_url; ?>/lib/images/service/access.png" alt="アクセス解析">
<p>アクセス解析</p>
<p>サイト分析とレポート提出</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/contents-creation/">
<img src="<?php echo $wp_url; ?>/lib/images/service/content-create.png" alt="コンテンツ制作">
<p>コンテンツ制作</p>
<p>執筆・画像挿入に対応</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/instagram-marketing/">
<img src="<?php echo $wp_url; ?>/lib/images/service/inst.png" alt="Instagramマーケティング">
<p>Instagramマーケティング</p>
<p>インスタ活用をサポート</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/inbound-service/">
<img src="<?php echo $wp_url; ?>/lib/images/service/inbounds.png" alt="訪日インバウンド対策">
<p>訪日インバウンド対策</p>
<p>多言語化・アプリと連動</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/web-consulting/">
<img src="<?php echo $wp_url; ?>/lib/images/service/consul.png" alt="WEBコンサルティング">
<p>WEBコンサルティング</p>
<p>マーケティングの総合支援</p>
<span>詳しく見る<i class="fas fa-chevron-right"></i></span>
</a>
</li>
</ul>
</div>
</section>
<?php include_once('get-portfolio.php'); ?>
<?php get_footer();