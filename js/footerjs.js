jQuery(function(){
  jQuery(window).scroll(function(){
    //最上部から現在位置までの距離を取得して、変数[now]に格納
    var now = jQuery(window).scrollTop();
    //最上部から現在位置までの距離(now)が600以上
    if(now > 600){
      //[#page-top]をゆっくりフェードインする
      jQuery('#page-top').fadeIn('slow');
      //それ以外だったらフェードアウトする
    }else{
      jQuery('#page-top').fadeOut('slow');
    }
  });
  //ボタン(id:move-page-top)のクリックイベント
  jQuery('#move-page-top').click(function(){
  //ページトップへ移動する
  jQuery('body,html').animate({
          scrollTop: 0
      }, 800);
  });
});


jQuery(function(){
     var jQueryelem = jQuery(".footer-top"), //表示の操作をするオブジェクト(フッター)
               jQuerycontent = jQuery("footer"), //表示を変更する基準となるオブジェクト
               jQuerywin = jQuery(window); //windowオブジェクト

     var contentTop = 0; //表示変更をする基準点

     jQuerywin
          .load(function(){
               updatePosition();
               update();
          })
          .resize(function(){
               updatePosition();
               update();
          })
          .scroll(function(){
               update();
          });


     // HTMLが動的に変わることを考えて、contentTopを最新の状態に更新します
     function updatePosition(){
          contentTop = jQuerycontent.offset().top + jQueryelem.outerHeight();
     }

     // スクロールのたびにチェック
     function update(){
          // 現在のスクロール位置 + 画面の高さで画面下の位置を求めます
          if( jQuerywin.scrollTop() + jQuerywin.height() > contentTop ){
               jQueryelem.addClass("static");
          }else if( jQueryelem.hasClass("static") ){
               jQueryelem.removeClass("static");
          }
     }
}); 