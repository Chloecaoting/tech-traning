$(function () {
  $('#color-change').on("change", function () {
    let select_color = $(this).val();
    $('#title').css('color', select_color);
  });
});
