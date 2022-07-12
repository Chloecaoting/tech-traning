$(function () {
  $('input').on('keyup', function () {
    $('.val').text($(this).val());
  });
});
