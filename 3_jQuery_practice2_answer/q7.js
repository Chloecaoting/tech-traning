$(function () {
  $('.x-scroll').on('scroll', function () {
    let scroll_val = $(this).scrollLeft();
    $('.scroll-val').text(scroll_val);
  });
});
