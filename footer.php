<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
</main>
<!-- main end -->
<footer id="footer">
<div class="container">
<div class="logo">
<a href="<?php echo $home; ?>/">
<img src="<?php echo $wp_url; ?>/dist/images/foot_logo.svg" alt="京都のコンテンツマーケティング会社「株式会社ランプ」">
</a>
</div>
<ul>
<li><a href="<?php echo $home; ?>/">ホーム</a></li>
<li><a href="<?php echo $home; ?>/news/">お知らせ</a></li>
<li><a href="<?php echo $home; ?>/company/">会社紹介</a></li>
<li><a href="<?php echo $home; ?>/service/">事業内容</a></li>
<li><a href="<?php echo $home; ?>/recruit/">採用情報</a></li>
<li><a href="<?php echo $home; ?>/contact/">お問い合わせ</a></li>
</ul>
<div class="sns">
<a href="https://www.facebook.com/KYOTO.LAMP/" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
</div>
</div>
<div class="copy">
<div class="container">
<small>&copy; 2017 LAMP Co., Ltd.</small>
<a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
</div>
</div>
</footer>
<!-- footer end -->
<?php wp_footer(); ?>
</body>
</html>
