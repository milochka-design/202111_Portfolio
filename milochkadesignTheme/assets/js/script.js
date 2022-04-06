// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});


	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});


	/*スクロールするとフェードインするアニメーション*/
	jQuery(function(){
		jQuery('.js-animation').css('visibility','hidden');
		jQuery(window).scroll(function(){
		 var windowHeight = jQuery(window).height(),
			 topWindow = jQuery(window).scrollTop();
		 jQuery('.js-animation').each(function(){
		  var targetPosition = jQuery(this).offset().top;
		  if(topWindow > targetPosition - windowHeight + 100){
		   jQuery(this).addClass("js-fadeInDown");
		  }
		 });
		});
		});


// 背景画像のパララックス
jQuery(function () {
    var target1 = $(".js-parallax");
    var targetPosOT1 = target1.offset().top;
    var targetFactor = 0.5;
    var windowH = $(window).height();
    var scrollYStart1 = targetPosOT1 - windowH;
    $(window).on('scroll', function () {
        var scrollY = $(this).scrollTop();
        if (scrollY > scrollYStart1) {
            target1.css('background-position-y', (scrollY - targetPosOT1) * targetFactor + 'px');
        } 
    });
});


});
});
