// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";

// テーマディレクトリ
const wp_url = $("body").attr("data-tmpdir");

// all dom ready
$(window).on("load", function () {
  $(".loadanim").fadeOut();
});

// スクロールイベント
$(window).on("scroll", function () {
  let s = $(window).scrollTop();
  if (s >= 400) {
    $("#header").addClass("scroll-on");
    $("#header>.logo img").attr("src", wp_url + "/dist/images/b_logo.svg");
  } else {
    $("#header").removeClass("scroll-on");
    $("#header>.logo img").attr("src", wp_url + "/dist/images/logo.svg");
  }
});

$(".drawer-hamburger").on("click", function () {
  $("body").toggleClass("drawer-open");
  if ($("body").hasClass("drawer-open")) {
    $("#header>.logo img").attr("src", wp_url + "/dist/images/b_logo.svg");
  } else {
    $("#header>.logo img").attr("src", wp_url + "/dist/images/logo.svg");
  }
});

// Smooth scroll
$('a[href^="#"]').click(function () {
  var speed = 500;
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? "html" : href);
  var position = target.offset().top - 71;
  $("body,html").animate({ scrollTop: position }, speed, "swing");
  return false;
});
