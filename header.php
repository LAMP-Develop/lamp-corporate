<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<?php endif; ?>
</head>
<body <?php body_class(); ?> data-tmpdir="<?php echo $wp_url; ?>">
<?php wp_body_open(); ?>
<div class="loadanim">
<div><img src="<?php echo $wp_url; ?>/dist/images/laod_logo.gif" alt="loading"></div>
</div>
<header id="header">
<h1 class="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/dist/images/logo.svg" alt="<?php bloginfo('name') ?>"></a></h1>
<button type="button" class="drawer-hamburger">
<span class="drawer-hamburger-icon"></span>
<span class="drawer-txt">MENU</span>
</button>
<nav id="nav">
<ul>
<li><a href="<?php echo $home; ?>/newslist/">NEWS<span>お知らせ</span></a></li>
<li><a href="<?php echo $home; ?>/company/">COMPANY<span>会社紹介</span></a></li>
<li><a href="<?php echo $home; ?>/service/">SERVICE<span>事業内容</span></a></li>
<li><a href="<?php echo $home; ?>/recruit/">RECRUIT<span>採用情報</span></a></li>
<li><a href="<?php echo $home; ?>/contact/">CONTACT<span>お問い合わせ</span></a></li>
</ul>
</nav>
</header>
<!-- #header -->
<main id="main-content">
