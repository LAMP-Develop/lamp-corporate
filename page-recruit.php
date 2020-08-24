<?php
/*
Template Name: 採用情報-new
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section id="main-visual" class="recruit-visual">
<div class="inner text-center p-md-0">
<img class="ttl" src="<?php echo $wp_url; ?>/dist/images/recruit_catch.png" alt="京都のITベンチャー">
<p class="desc">ー 歴史の都"京都"で共に成長したいあなたへ ー</p>
</div>
</section>

<section class="sec recruit__message">
<div class="container">
<div class="recruit__message-pict">
<img src="<?php echo $wp_url; ?>/dist/images/message.png" alt="河野 匠">
</div>
<div class="recruit__message-txt">
<img src="<?php echo $wp_url; ?>/dist/images/about_txt.png" alt="message">
<div class="recruit__message-box">
<p class="ttl">これまでの飲食業界のビジネスモデルを覆し、多種多様な食文化を永続させる。</p>
<p class="mb-0">アフターコロナに向け、従来の営業ができなくなった飲食店に対してテイクアウトやデリバリーなどの”中食文化”を私たちが持つデジタルの力で推進し、新たな収益源を生み出すことで地域社会に貢献することが私たちのミッションです。</p>
</div>
</div>
</div>
</section>

<?php wp_footer();
