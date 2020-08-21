<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
// include_once('aa.php');
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php wp_head(); ?>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700&display=swap">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" media="(max-width: 900px)" href="<?php echo $wp_url; ?>/lib/css/drawer.min.css">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/first.css?20190617_01">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/style.css?20190731_1">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/blog.css">
<?php if (is_home() || is_front_page() || is_page('service')): ?>
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/slick.css">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/slick-theme.css">
<style media="screen">#sub-visual{background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center;background-size:cover}</style>
<?php elseif (is_page('recruit') || is_page('test')): ?>
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/slick.css">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/slick-theme.css">
<style media="screen">#main-visual{background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center;background-size:cover}</style>
<?php elseif (is_single()):
if (get_the_post_thumbnail_url() != '') {
    $thumbnailurl = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>
<style media="screen">#sub-visual{background: url('<?php echo $thumbnailurl; ?>') no-repeat center center;background-size:cover}</style>
<?php } else {
    $thumbnailurl = '';
} ?>
<?php elseif (is_404()): ?>
<style media="screen">#sub-visual{background: url('<?php echo $home; ?>/wp-content/uploads/2018/04/bg_sub.png') no-repeat center center;background-size:cover}</style>
<?php elseif (is_category()):
$cat_id = get_queried_object()->cat_ID;
$post_id = 'category_'.$cat_id;
if (get_field('cat_main', $post_id) != '') {
    $thumbnail = get_field('cat_main', $post_id);
} else {
    $thumbnail = $home.'/wp-content/uploads/2018/04/bg_sub.png';
} ?>
<style media="screen">#sub-visual{background: url('<?php echo $thumbnail; ?>') no-repeat center center;background-size:cover}</style>
<?php else:
if (has_post_thumbnail()): ?>
<style media="screen">#sub-visual{background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center;background-size:cover}</style>
<?php else: ?>
<style media="screen">#sub-visual{background: url('<?php echo $home; ?>/wp-content/uploads/2018/04/bg_sub.png') no-repeat center center;background-size:cover}</style>
<?php endif; endif; ?>
<?php if (!is_user_logged_in() && get_option('ga_id') != null && !is_page('addbox')): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_option('ga_id'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo get_option('ga_id'); ?>');
</script>
<?php endif; ?>
<?php if (is_page('recruit')): ?>
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "JobPosting",
  "title" : "Webデザイナー",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "株式会社ランプ",
    "sameAs": "https://lamp.jp/",
    "logo": "https://lamp.jp/wp-content/uploads/2018/04/favi.png"
  },
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "中京区三条通烏丸東入梅忠町24-1 加藤ビル2F",
      "addressLocality": "京都市",
      "addressRegion": "京都府",
      "postalCode": "6048136",
      "addressCountry": "JP"
    }
  },
  "baseSalary" : {
    "@type" : "MonetaryAmount",
    "currency" : "JPY",
    "value": {
      "@type": "QuantitativeValue",
      "Value": 900,
      "unitText": "HOUR"
    }
  },
  "employmentType" : ["PART_TIME","INTERN"],
  "description" : "<p><em>業務内容</em><br>コンテンツマーケティングを主体とした事業展開を行っております。<br>弊社で一緒に仕事をしていただけるコンテンツを充実するライター・動画クリエイター、ユーザーの視線を集めるWEBデザイナーを探しています。</p><p><em>求めるスキル・経験</em><br>ライター・動画作成（Illustrator・プレミア）・WEBデザイン（Illustrator・Photoshop）いずれかの経験者。</p>",
  "datePosted" : "2019-04-18",
  "validThrough" : "2019-08-31T00:00"
}
</script>
<?php endif; ?>
</head>
<body class="drawer drawer--right">
<!-- header -->
<header id="header">
<div class="logo">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/common/logo.svg" alt="京都のコンテンツマーケティング会社「株式会社ランプ」ロゴ">
</a>
</div>
<!-- hamburger -->
<button type="button" class="drawer-toggle drawer-hamburger"><span class="drawer-hamburger-icon"></span><span class="sr-only">MENU</span></button>
<nav id="nav" class="drawer-nav">
<div class="logo">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/common/b_logo.svg" alt="京都のコンテンツマーケティング会社「株式会社ランプ」ロゴ">
</a>
</div>
<ul class="drawer-menu">
<li><a href="<?php echo $home; ?>/newslist/">NEWS<span>お知らせ</span></a></li>
<li><a href="<?php echo $home; ?>/company/">ABOUT US<span>会社紹介</span></a></li>
<li><a href="<?php echo $home; ?>/service/">SERVICE<span>事業内容</span></a>
  <!-- <ul>
  <li><a href="<?php echo $home; ?>/service/#webmarketing">WEBマーケティング領域 </a></li>
  <li><a href="<?php echo $home; ?>/service/#deta-platform" target="_self">データプラットフォーム領域 </a></li>
  <li><a href="<?php echo $home; ?>/service/#inboundservice">訪日インバウンド領域 </a></li>
  </ul> -->
</li>
<li><a href="<?php echo $home; ?>/portfolio/">WORKS<span>事例紹介</span></a>
<!-- <ul>
<li><a href="<?php echo $home; ?>/portfolio/contentsmarketing/">コンテンツマーケティング</a></li>
<li><a href="<?php echo $home; ?>/portfolio/instagram/">Instagramマーケティング</a></li>
<li><a href="<?php echo $home; ?>/portfolio/web-production/">WEBサイト制作</a></li>
<li><a href="<?php echo $home; ?>/portfolio/jp-inbound/">訪日インバウンド</a></li>
</ul> -->
</li>
<li><a href="<?php echo $home; ?>/recruit/">RECRUIT<span>採用情報</span></a></li>
<li><a href="<?php echo $home; ?>/contact/">CONTACT<span>お問い合わせ</span></a></li>
<!-- <li><a href="<?php echo $home; ?>/document-request/">DOCUMENT<span>資料請求</span></a></li> -->
</ul>
<!-- <div class="sns">
<a href="https://www.facebook.com/KYOTO.LAMP/" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.instagram.com/lamp.jp/" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
</div> -->
</nav>
</header>
<!-- header end -->
<!-- main -->
<main id="<?php echo 'page-'.basename(get_the_permalink()); ?>" class="content-wrapper">
<!-- load -->
<div class="load-img">
<img src="<?php echo $wp_url; ?>/lib/images/common/laod_logo.gif" alt="京都のコンテンツマーケティング会社「株式会社ランプ」ローディング">
</div>
<?php if (is_home() || is_front_page()): ?>
<section id="main-visual">
<div class="inner">
<p class="tlt">Creative Marketing Company <br>in Kyoto.</p>
<h1>株式会社ランプは京都を拠点に全国の皆さまへWEBサービスをお届けする会社です。</h1>
</div>
<div class="scroll"><a href="#concept" class="jump">SCROLL DOWN<i class="fas fa-long-arrow-alt-down"></i></a></div>
</section>
<?php elseif (is_page('recruit') || is_page('test')): ?>
<section id="main-visual" class="recruit-visual">
<div class="inner">
<img class="ttl" src="<?php echo $wp_url; ?>/lib/images/recruit-new/recruit_catch.png" alt="京都のITベンチャー">
<h1>歴史の都"京都"で共に成長したいあなたへ</h1>
</div>
<!-- <div class="scroll"><a href="#about-r" class="jump">株式会社ランプの採用について<i class="fas fa-long-arrow-alt-down"></i></a></div> -->
</section>
<?php elseif (is_page('recruit-new')): ?>
<!-- <section id="main-visual" class="recruit-new-visual">
  <div class="inner">
  <img class="ttl" src="<?php echo $wp_url; ?>/lib/images/recruit-new/recruit_catch.png" alt="京都のITベンチャー">
  <h1>世界中を灯す会社を創る</h1>
  </div>
</section> -->
<?php elseif (is_single()): ?>
<?php elseif (is_404()): ?>
<section id="sub-visual">
<span class="bg"></span>
<div class="wrapper">
<div class="inner">
<h1>404 NOT FOUND</h1>
</div>
</div>
</section>
<?php elseif (is_category()):
$cat = get_the_category();
$cat_name = $cat[0]->cat_name;
$cat_slug  = $cat[0]->category_nicename; ?>
<section id="sub-visual">
<span class="bg"></span>
<div class="wrapper">
<div class="inner">
<h1><?php
$cat_id = get_queried_object()->cat_ID;
$post_id = 'category_'.$cat_id;
echo get_field('cat_ttl', $post_id); ?><span><?php single_cat_title(); ?></span></h1>
<!-- <h1><?php echo strip_tags(category_description()); ?></h1> -->
</div>
</div>
</section>
<?php else: ?>
<section id="sub-visual">
<span class="bg"></span>
<div class="wrapper">
<div class="inner">
<h1><?php the_field('title'); ?><span><?php the_field('sub_title'); ?></span></h1>
<!-- <h1><?php the_field('description'); ?></h1> -->
</div>
</div>
</section>
<?php endif;
