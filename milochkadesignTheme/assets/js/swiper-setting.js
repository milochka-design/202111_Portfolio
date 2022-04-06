

"use strict";

var mySwiper = new Swiper('.p-works__slider', {
  // 以下にオプションを設定
  loop: true,
  //最後に達したら先頭に戻る
  //ページネーション表示の設定
  pagination: {
    el: '.swiper-pagination',
    //ページネーションの要素
    type: 'bullets',
    //ページネーションの種類
    clickable: true //クリックに反応させる

  },
  //自動再生の設定
  autoplay: {
    delay: 6000,
    disableOnInteraction: false
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});

