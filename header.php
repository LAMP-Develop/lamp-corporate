<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_option('ga_id'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo get_option('ga_id'); ?>');
</script> -->
<?php endif; ?>
</head>

<body class="drawer drawer--right">

<header id="header">
<div class="logo">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/common/logo.svg" alt="京都のコンテンツマーケティング会社「株式会社ランプ」ロゴ">
</a>
</div>
<button type="button" class="drawer-toggle drawer-hamburger"><span class="drawer-hamburger-icon"></span><span class="sr-only">MENU</span></button>
<nav id="nav" class="drawer-nav">
<div class="logo">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/common/b_logo.svg" alt="京都のコンテンツマーケティング会社「株式会社ランプ」ロゴ">
</a>
</div>
<ul class="drawer-menu">
<li><a href="<?php echo $home; ?>/newslist/">NEWS<span>お知らせ</span></a></li>
<li><a href="<?php echo $home; ?>/company/">COMPANY<span>会社紹介</span></a></li>
<li><a href="<?php echo $home; ?>/service/">SERVICE<span>事業内容</span></a></li>
<li><a href="<?php echo $home; ?>/recruit/">RECRUIT<span>採用情報</span></a></li>
<li><a href="<?php echo $home; ?>/contact/">CONTACT<span>お問い合わせ</span></a></li>
</ul>
</nav>
</header>
<!-- #header -->

<main>

<div class="load-img">
<img src="<?php echo $wp_url; ?>/lib/images/common/laod_logo.gif" alt="京都のコンテンツマーケティング会社「株式会社ランプ」ローディング">
</div>
<!-- .load-img -->
