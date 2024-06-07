<?php 
// template Name:ブログページ
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Homee</title>
</head>
<body>

 @include('cats.header')
  <h1>Gallery</h1><!-- クリックしたら動かしたいときはa要素で囲む(動かしたい対象全て) -->
  <ul class="gallery">
    @foreach($photos as $photo)
    <li>
      <a href="{{ asset(Storage::url($photo->image_path)) }}" class="gallery-photo" data-lightbox="gallery1" data-title="{{ $photo->caption }}">
          <img src="{{ asset(Storage::url($photo->image_path)) }}" class="gallery-photo">
          <img src="{{ asset('img/heart1.svg') }}" class="heart-icon" alt="ハート">
      </a>
    </li>
    @endforeach
  </ul>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="{{ asset('js/lightbox.js') }}"></script>
   <script src="{{ asset('js/base.js') }}"></script>
   <script>
    $(".heart-icon").on("click", function () {
  if ($(this).hasClass("change")) {
    $(this).attr("src", "{{ asset('img/heart1.svg') }}");
    $(this).toggleClass("change");
  } else {
    $(this).attr("src", "{{ asset('img/heart2.svg') }}");
    $(this).toggleClass("change");
  }
  });
  $(".gallery-photo").on("click", function (e) {
    e.preventDefault();
    var photoId = $(this).data("photo-id");
    var imagePath = $(this).find('img').attr('src');
    $.ajax({
        url: "/mypage",
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            "photoId": photoId,
            "image_path": imagePath
        },
        success: function(data) {
            console.log("Photo added to mypage");
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
        }
    });
});


</script>


</body>
</html>

{{-- <p>画像拡大に使用したライブラリ：<a href="https://lokeshdhakar.com/projects/lightbox2/" target="_blank">https://lokeshdhakar.com/projects/lightbox2/</a></p> --}}