<?php
/*
Template Name: 採用情報
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section id="main-visual" class="recruit-visual">
<div class="inner text-center p-md-0">
<img class="ttl" src="<?php echo $wp_url; ?>/dist/images/recruit_catch.png" alt="京都のITベンチャー">
<p class="desc text-center mx-auto">ー 歴史の都"京都"で共に成長したいあなたへ ー</p>
</div>
</section>
<section class="sec recruit__message">
<div class="container">
<div class="row justify-content-between align-items-center mx-0">
<div class="col-md-7 px-0 ml-md-n5">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/message_pict.png" alt="ランプ社員" srcset="<?php echo $wp_url; ?>/dist/images/message_pict.png 1x, <?php echo $wp_url; ?>/dist/images/message_pict@2x.png 2x">
</div>
<div class="col-md-5 mb-md-0 mb-4 pr-0 pl-4">
<div class="recruit__message-box">
<p><img src="<?php echo $wp_url; ?>/dist/images/mission_txt.png" alt="Mission"></p>
<p class="ttl">これまでの飲食業界の<br>ビジネスモデルを覆し、<br>日本の食文化を永続させる</p>
<p class="mb-0">アフターコロナに向け、従来の営業ができなくなった飲食店に対してテイクアウトやデリバリーなどの”中食文化”を私たちが持つデジタルの力で推進し、新たな収益源を生み出すことで地域社会に貢献することが私たちのミッションです。</p>
</div>
</div>
</div>
</div>
</section>
<section class="sec pb-0">
<div class="container">
<h2 class="ttl-h2 mb-4">VALUE<span>5つの行動指針</span></h2>
</div>
<div class="bg-secondary py-5">
<div class="container">
<div class="recruit__value">
<div class="recruit__value-item">
<img src="<?php echo $wp_url; ?>/dist/images/value_01.png" alt="スピード" srcset="<?php echo $wp_url; ?>/dist/images/value_01.png 1x, <?php echo $wp_url; ?>/dist/images/value_01@2x.png 2x">
<p>1. とにかく早く行動</p>
</div>
<div class="recruit__value-item">
<img src="<?php echo $wp_url; ?>/dist/images/value_02.png" alt="逆算" srcset="<?php echo $wp_url; ?>/dist/images/value_02.png 1x, <?php echo $wp_url; ?>/dist/images/value_02@2x.png 2x">
<p>2. 先を見て逆算</p>
</div>
<div class="recruit__value-item">
<img src="<?php echo $wp_url; ?>/dist/images/value_03.png" alt="こだわり" srcset="<?php echo $wp_url; ?>/dist/images/value_03.png 1x, <?php echo $wp_url; ?>/dist/images/value_03@2x.png 2x">
<p>3. 徹底的にこだわる</p>
</div>
<div class="recruit__value-item">
<img src="<?php echo $wp_url; ?>/dist/images/value_04.png" alt="整理" srcset="<?php echo $wp_url; ?>/dist/images/value_04.png 1x, <?php echo $wp_url; ?>/dist/images/value_04@2x.png 2x">
<p>4. 常に整理整頓</p>
</div>
<div class="recruit__value-item">
<img src="<?php echo $wp_url; ?>/dist/images/value_05.png" alt="コンセンサス" srcset="<?php echo $wp_url; ?>/dist/images/value_05.png 1x, <?php echo $wp_url; ?>/dist/images/value_05@2x.png 2x">
<p>5. コンセンサス推進</p>
</div>
</div>
</div>
</div>
<!-- <div class="mt-5 mr-5">
<img class="w-100  d-none d-lg-block" src="<?php echo $wp_url; ?>/dist/images/value_img_pc.png" alt="オフィス写真" srcset="<?php echo $wp_url; ?>/dist/images/value_img_pc.png 1x, <?php echo $wp_url; ?>/dist/images/value_img_pc@2x.png 2x">
<img class="w-100 d-block d-lg-none" src="<?php echo $wp_url; ?>/dist/images/value_img_sp.png" alt="オフィス写真" srcset="<?php echo $wp_url; ?>/dist/images/value_img_sp.png 1x, <?php echo $wp_url; ?>/dist/images/value_img_sp@2x.png 2x">
</div> -->
</section>
<section class="sec">
<div class="container">
<h2 class="ttl-h2">JOB LIST<span>募集職種</span></h2>
<div class="joblist">
<div class="joblist-sort">
<button class="d-inline-block w-auto btn btn-outline-dark active" data-group="all">すべて</button>
<button class="d-inline-block w-auto btn btn-outline-success" data-group="career">キャリア採用</button>
<button class="d-inline-block w-auto btn btn-outline-primary" data-group="intern">新卒・インターン</button>
<button class="d-inline-block w-auto btn btn-outline-warning" data-group="parttime">アルバイト・パート</button>
</div>
<div class="joblist-grid">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'jobtype',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
$employment = get_the_terms(get_the_ID(), 'employment');
$job_type = $employment[0]->name;
$job_el = $employment[0]->slug;
$job_desc = get_field('job_desc');
$job_place = get_field('job_place');
$job_must = get_field('job_must');
?>
<div class="joblist-item all <?php echo $job_el; ?>">
<?php if ($job_must): ?>
<div class="joblist-must">
<span>＼ 積極採用中！ ／</span>
</div>
<?php endif; ?>
<p class="joblist-type"><span><?php echo $job_type; ?></span></p>
<h3 class="joblist-ttl"><?php echo $t; ?></h3>
<p class="joblist-desc"><?php echo $job_desc; ?></p>
<p class="joblist-place">勤務地：<?php echo $job_place; ?></p>
<div class="joblist-btn">
<a href="<?php echo $p; ?>">募集要項をみる</a>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>
</section>
<?php get_footer();
