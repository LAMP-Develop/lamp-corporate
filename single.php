<?php
  $post = $wp_query->post;
  if ( in_category('news') || in_category('event') || in_category('press-release') ) {
	  include(TEMPLATEPATH.'/single-news.php');
  } elseif ( in_category('portfolio') ) {
	  include(TEMPLATEPATH.'/single-portfolio.php');
  } else {
	  include(TEMPLATEPATH.'/single-portfolio.php');
  }
?>
