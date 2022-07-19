$(function () {
  $("#search_btn").click(function () {
    // 入力された値を取得

    // urlを設定
    var url = "https://zipcloud.ibsnet.co.jp/api/search";
    // 送るデータを成形する
    var param = { zipcode: $('#zipcode').val() };
    // サーバーと通信(Ajax)

    $.ajax({
      type: "GET",
      cache: false,
      data: param,
      url: url,
      dataType: "jsonp"
    })
      .done(function (res) {
        if (res.status != 200) {
          // 通信には成功。APIの結果がエラー
          // エラー内容を表示
          $('#zip_result').html(res.message);
        } else {
          //住所を表示
          let resultHtml = '';
          for (let i = 0; i < res.results.length; i++) {
            let result = res.results[i];
            console.log(res.results);
            resultHtml += '<h2>住所' + (i + 1) + '</h2>';
            resultHtml += '<div>都道府県コード：' + result.prefcode + '</div>';
            resultHtml += '<div>都道府県：' + result.address1 + '</div>';
            resultHtml += '<div>市区町村：' + result.address2 + '</div>';
            resultHtml += '<div>町域：' + result.address3 + '</div>';
            resultHtml += '<div>都道府県(カナ)：' + result.kana1 + '</div>';
            resultHtml += '<div>市区町村(カナ)：' + result.kana1 + '</div>';
            resultHtml += '<div>町域(カナ)：' + result.kana1 + '</div>';
          }

          $('#zip_result').html(resultHtml);
        }
      })
      .fail(function (error) {
        console.log(error);
        $('#zip_result').html("<p>通信エラーです。時間をおいてお試しください</p>");
      });
  });
});
