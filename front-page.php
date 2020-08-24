<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="main-visual">
<div class="inner">
<p class="tlt">DX Platform to Society.<br>from KYOTO</p>
<p class="desc">株式会社ランプは京都を拠点に全国の飲食店の中食産業にDXプラットフォームを提供するスタートアップ企業です。
<br>創業以来8年間、200社以上の中小企業のWEBマーケティングを支援したのち、アフターコロナに向けて地域社会に貢献するべく立ち上がりました。</p>
</div>
<div class="scroll"><a href="#skip-content">SCROLL DOWN<i class="fas fa-long-arrow-alt-down"></i></a></div>
</section>

<div id="skip-content"></div>

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
