"use strict";

// ヘッダー過ぎたら背景色を付与する
var header = jQuery('.js-top-header');
var headerHeight = jQuery('.js-top-header').outerHeight(); //ヘッダーコンテンツ

var imgHeight = jQuery('.js-mv').outerHeight() - headerHeight; //画像の高さを取得。これがイベント発火位置になる。

jQuery(window).on('load scroll', function () {
  if (jQuery(window).scrollTop() < imgHeight) {
    //メインビジュアル内にいるので、クラスを外す。
    header.removeClass('js-headerColor');
  } else {
    //メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
    header.addClass('js-headerColor');
  }
}); // 下層ページヘッダー過ぎたら背景色を付与する

var subHeader = jQuery('.js-sub-header');
var headerHeightSub = jQuery('.js-sub-header').outerHeight(); //ヘッダーコンテンツ

var imgHeightSub = jQuery('.js-sub-mv').outerHeight() - headerHeightSub; //画像の高さを取得。これがイベント発火位置になる。

jQuery(window).on('load scroll', function () {
  if (jQuery(window).scrollTop() < imgHeightSub) {
    //メインビジュアル内にいるので、クラスを外す。
    subHeader.removeClass('js-headerColor');
  } else {
    //メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
    subHeader.addClass('js-headerColor');
  }
});