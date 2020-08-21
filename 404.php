<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="not-found" class="sec">
<div class="wrapper">
<p>お探しのページは見つかりません。</p>
</div>
</section>
<?php get_footer();