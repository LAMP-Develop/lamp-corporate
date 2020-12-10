// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import "slick-carousel";

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

// ドロワーメニュー
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

// slick
$(".logo-slick").slick({
  slidesToShow: 5,
  centerMode: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 10000,
  swipe: false,
  cssEase: "linear",
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1.5,
      },
    },
  ],
});

// job sort
$(".joblist-sort .btn").on("click", function () {
  $(".joblist-sort .btn").removeClass("active");
  $(this).addClass("active");
  let sort_group = $(this).attr("data-group");
  $.when($(".joblist-grid").children(".joblist-item").fadeOut()).done(function () {
    $(".joblist-grid")
      .children("." + sort_group)
      .fadeIn();
  });
});
