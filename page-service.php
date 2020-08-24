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

<?php get_footer();