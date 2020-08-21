<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
 ?>

<?php if (is_page('recruit')): ?>
<?php else: ?>
<section id="contact" class="sec">
<div class="wrap">
<h2 class="uppercase">contact<span>お問い合わせ</span></h2>
<p>私たちへの業務のご依頼、ご相談を承っております。<br class="sp-only">お気軽にお問い合わせください。</p>
<div class="btn">
<a href="<?php echo $home; ?>/contact/">お問い合わせはこちら<i class="fas fa-long-arrow-alt-right"></i></a>
</div>
</div>
</section>
<?php endif; ?>
<?php if (is_page('!recruit') ): ?>
<section id="footer-link" class="sec">
<div class="link-wrapper">
  <ul>
    <li><a href="https://kagari.ai" target="_blank"><img src="<?php echo $wp_url; ?>/lib/images/common/kagari_top.svg" alt="kagari"><p>ページのSEO/SNS流入に特化したアクセス解析ツール</p></a></li>
    <li><a href="https://marketing.lamp.jp" target="_blank"><img src="<?php echo $wp_url; ?>/lib/images/common/lm_top.svg" alt="lamp-marketing"><p>コンテンツを強みとしたWEBマーケティング支援</p></a></li>
    <li><a href="http://kyoto-masters.com/" target="_blank"><img src="<?php echo $wp_url; ?>/lib/images/common/km_top.svg" alt="kyotomasters"><p>京都市内の多言語観光メディアサイト</p></a></li>
  </ul>
</div>
</section>
<?php endif; ?>
<!-- js -->
<script src="<?php echo $wp_url; ?>/lib/js/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/jquery.pjax.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/app-pjax.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/iscroll.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/drawer.min.js"></script>
<?php if (is_home() || is_front_page() || is_page('service')|| is_page('recruit') ): ?>
<script src="<?php echo $wp_url; ?>/lib/js/slick.min.js"></script>
<?php endif; ?>
<script>
<?php if (is_home() || is_front_page() || is_page('service') ): ?>
// slick
$('.slick').slick({
  autoplay: true,
  arrows: false,
});
$('.slick-logo').slick({
  autoplay: true,
  prevArrow: '<i class="fas fa-chevron-circle-left"></i>',
  nextArrow: '<i class="fas fa-chevron-circle-right"></i>',
  slidesToShow: 3,
  arrows: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
  ]
});
<?php endif; ?>

<?php if (is_page('recruit') ): ?>
// 採用ページのスライドショー
$('.slider').slick({
  infinite: true,
  centerMode: true,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToScroll: 1,
  dots:  true,
  centerPadding: 'auto',
  slidesToShow: 3,
  responsive: [{
    breakpoint: 770,
    settings: {
      centerMode: true,
      centerPadding: 'auto',
      slidesToShow: 1
    }
  }]
});

<?php endif; ?>
// Road image
$('.load-img').show();
$(document).ready(function(){
  $('.load-img').fadeOut();
});

// drawer
$(window).on('load resize', function() {
  var w = $(window).width();
  var x = 900;
  $('.drawer').drawer();
});

// Scroll event
$(window).on('load scroll', function() {
  var s = $(window).scrollTop();
  if (s >= 400) {
    $('#header').addClass('scroll-on');
    $('#header>.logo img').attr('src', '<?php echo $wp_url; ?>/lib/images/common/b_logo.svg');
  } else {
    $('#header').removeClass('scroll-on');
    $('#header>.logo img').attr('src', '<?php echo $wp_url; ?>/lib/images/common/logo.svg');
  }
});

// toggle
$('.offering-btn').on('click', function() {
  $(this).parent().next().slideToggle();
  $(this).toggleClass('active');
});
$('.close').on('click', function() {
  $(this).parent().parent().slideToggle();
});
$('#faq .dl-wrap dl dt').on('click', function() {
  $(this).next().slideToggle();
  $(this).toggleClass('dt-active');
});
$('#nav ul li.parent').on('click', function() {
  $(this).children('ul').slideToggle();
  $(this).toggleClass('active');
});

// css async road

// Smooth scroll
$('a[href^="#"]').click(function() {
  var speed = 500;
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top - 71;
  $('body,html').animate({scrollTop:position}, speed, 'swing');
  return false;
});

</script>
</main>
<!-- main end -->

<!-- footer -->
<footer id="footer">
<div class="wrapper">
<div class="wrap">
<div class="logo">
<a href="<?php echo $home; ?>/">
<img src="<?php echo $wp_url; ?>/lib/images/common/foot_logo.svg" alt="京都のコンテンツマーケティング会社「株式会社ランプ」">
</a>
<ul class="mt-2">
<!-- <li><a href="<?php echo $home; ?>/">ホーム</a></li> -->
<li><a href="<?php echo $home; ?>/newslist">お知らせ</a></li>
<li><a href="<?php echo $home; ?>/company/">会社紹介</a></li>
<li><a href="<?php echo $home; ?>/service/">事業内容</a></li>
<li><a href="<?php echo $home; ?>/portfolio/">事例紹介</a></li>
<li><a href="<?php echo $home; ?>/recruit/">採用情報</a></li>
<!-- <li><a href="<?php echo $home; ?>/document-request/">資料請求</a></li> -->
<li><a href="<?php echo $home; ?>/contact/">お問い合わせ</a></li>
</ul>
</div>
<!-- <ul>
<li><a href="<?php echo $home; ?>/service/contents-marketing/">コンテンツマーケティング事業</a></li>
<li><a href="<?php echo $home; ?>/service/">訪日インバウンド事業</a></li>
</ul> -->
<!-- <ul>
<li><a href="https://blog.lamp.jp/" target="_blank" rel="noopener">conma!</a></li>
<li><a href="http://kyoto-masters.com/" target="_blank" rel="noopener">KYOTO MASTERS</a></li>
<li><a href="https://demo.lamp.jp/" target="_blank" rel="noopener">irori</a></li>
<li><a href="<?php echo $home; ?>/service/">Danro</a></li>
</ul> -->

<div class="sns">
<a href="https://www.facebook.com/KYOTO.LAMP/" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.instagram.com/lamp.jp/" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
<!-- <a href="https://lamp.jp/feed/" target="_blank" rel="noopener"><i class="fas fa-rss"></i></a> -->
</div>

</div>
</div>
<div class="small">
<div class="wrapper">
<small>&copy; 2017 LAMP Co., Ltd.</small>
<a href="<?php echo $home; ?>/sitemap/">サイトマップ</a>
<a href="<?php echo $home; ?>/privacypolicy/">プライバシーポリシー</a>
</div>
</div>
</footer>
<!-- footer end -->
<?php wp_footer(); ?>
<!-- <script>
(function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
  w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
  m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://tenzk.net/mtc.js?uid=a418485624589929f44b6768940b705da3382e0f','mt');
mt('send', 'pageview', {"uid":"a418485624589929f44b6768940b705da3382e0f"});
</script> -->
</body>
</html>
