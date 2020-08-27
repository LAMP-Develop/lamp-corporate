<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
if (have_posts()): while (have_posts()): the_post();
if (has_post_thumbnail()) {
    $thumbnail = 'style="background-image:url("'.get_the_post_thumbnail_url(get_the_ID(), 'full').'")';
} else {
    $thumbnail = '';
}
$job_arr = get_field_objects(get_the_ID());
?>
<section id="sub-visual" <?php echo $thumbnail; ?>>
<span class="bg"></span>
<div class="container">
<div class="inner">
<h2>recruit<span><?php the_title(); ?></span></h2>
</div>
</div>
</section>
<section class="sec recruit__single">
<div class="container">
<div class="singlepost"><?php the_content(); ?></div>
<div class="job__table table-wrap">
<table class="">
<tbody>
<tr>
<th class="text-nowrap">職種</th>
<td><?php the_title(); ?></td>
</tr>
<?php
foreach ($job_arr as $key => $job_field):
  if ($key === 'job_desc' || $key === 'job_must') {
      continue;
  }
?>
<tr>
<th class="text-nowrap"><?php echo $job_field['label']; ?></th>
<td><?php echo $job_field['value']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<div class="mt-4 text-center">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>/recruit-form?recruit_id=<?php echo get_the_ID(); ?>">応募フォームに進む<i class="fas fa-long-arrow-alt-right ml-3"></i></a>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer();
