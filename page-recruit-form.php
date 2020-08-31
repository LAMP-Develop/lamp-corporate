<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$recruit_id = $_GET['recruit_id'];
$job_name = get_post($recruit_id)->post_title;
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
<h2>Entry Form<span><?php the_title(); ?></span></h2>
</div>
</div>
</section>
<section class="sec">
<div class="container">
<h2 class="h4 font-weight-bold text-center mb-4">採用応募について</h2>
<p class="text-md-center">入力内容の確認後、担当者よりご連絡させていただきます。
<br>各項目を入力していただき、入力が終わりましたら送信ボタンをクリック下さい。</p>
<?php the_content(); ?>
</div>
</section>
<script>
document.getElementById("your-job").value = "<?php echo $job_name; ?>";
</script>
<?php get_footer();
