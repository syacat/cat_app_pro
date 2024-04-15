<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mypage</title>
</head>
<body>
    <h1>マイページ</h1>
    <div class="image-gallery">
        @isset($mypageImages)
            @foreach ($mypageImages as $image)
                <div class="image-item">
                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="My Image">
                </div>
            @endforeach
        @endisset
    </div>
</body>
</html>
