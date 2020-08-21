$(document).on('click', 'a:not([target])', function(e) {
  e.preventDefault();
  var href = $(this).attr('href');
  $.pjax({
    url: href,
    container: '.content-wrapper',
    scrollTo: false,
    load: {
      head: 'base, meta, link',
      css: true,
      script: true,
    },
    wait: 0
  });
});
$(document).on('pjax:send', function() {
  $('.load-img').show();
});
$(document).on('pjax:complete', function() {
  $('.load-img').show();
});