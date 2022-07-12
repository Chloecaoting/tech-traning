$(function () {
  $('.clone').on('click', function () {
    let li_clone = $('li').eq(0).clone();
    $('ul').append(li_clone);
  });
});
