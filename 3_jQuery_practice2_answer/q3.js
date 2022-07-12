$(function () {
  const birthday = '1999-01-01';
  $('#birthday').on("change", function () {
    if ($(this).val() == birthday) {
      $('h1').fadeIn();
    }
  });
});
