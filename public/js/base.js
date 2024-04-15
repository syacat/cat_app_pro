// base.js
//lightbox オプションの設定※https://lokeshdhakar.com/projects/lightbox2/#options参照


lightbox.option({
  'wrapAround': true,//グループ最後の写真の矢印をクリックしたらグループ最初の写真に戻る
  'albumLabel': 'total%2'//合計枚数中現在何枚目かというキャプションの見せ方を変更できる
})

function fadeAnime(){
    // flipLeft
    $('.gallery li').each(function(){ 
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
            $(this).addClass('flipLeft');
        }else{
            $(this).removeClass('flipLeft');
        }
    });
    }
    
    // 画面をスクロールをしたら動かしたい場合の記述
      $(window).scroll(function (){
        fadeAnime();/* アニメーション用の関数を呼ぶ*/
      });// ここまで画面をスクロールをしたら動かしたい場合の記述
    
    // ページが読み込まれたらすぐに動かしたい場合の記述
      $(window).on('load', function(){
        fadeAnime();/* アニメーション用の関数を呼ぶ*/
      });// ここまでページが読み込まれたらすぐに動かしたい場合の記述


// クリックしたらハートアイコンの差し替え
      // $(".heart-icon").on("click", function () {
      //   if ($(this).hasClass("change")) {
      //     $(this).attr("src", "{{ asset('img/heart1.svg') }}");
      //     $(this).toggleClass("change");
      //   } else {
      //     $(this).attr("src", "{{ asset('img/heart2.svg') }}");
      //     $(this).toggleClass("change");
      //   }
      // });