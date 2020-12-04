<?php
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
<?php var_dump($slug) ?>
<section id="sub-visual" class="<?php echo $slug; ?>-visual">
<span class="bg"></span>
<div class="container">
<div class="inner">
<h2><?php echo $slug; ?><span><?php the_title(); ?></span></h2>
</div>
</div>
</section>
<section class="sec">
<div class="container">
<div class="singlepost"><?php the_content(); ?></div>
</div>
</section>
<?php get_footer();
