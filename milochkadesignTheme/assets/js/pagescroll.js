"use strict";

// トップへ戻るボタン
jQuery(function (jQuery) {
  // この中であればWordpressでも「jQuery」が使用可能になる
  var topBtn = jQuery('.js-pagetop');
  topBtn.hide(); // ボタンの表示設定

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 800) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  }); // ボタンをクリックしたらスクロールして上に戻る

  topBtn.click(function () {
    jQuery('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });
}); // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

jQuery(document).on('click', 'a[href*="#"]', function () {
  var time = 400;
  var header = jQuery('header').innerHeight();
  var target = jQuery(this.hash);
  if (!target.length) return;
  var targetY = target.offset().top - header;
  jQuery('html,body').animate({
    scrollTop: targetY
  }, time, 'swing');
  return false;
});