<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/phote.css') }}">
    <title>送信ページ</title>
</head>
<body>
    @include('cats.header')
    @yield('content') <!-- 各ページのコンテンツが差し込まれるセクション -->
    {{-- <div class="pet-wrapper">
        <div class="box"><img src="{{ asset('img/cat.png') }}" alt=""></div>
        <div class="box"><img src="{{ asset('img/cat.png') }}" alt=""></div>
        <div class="box"><img src="{{ asset('img/cat.png') }}" alt=""></div>
    </div> --}}
</body>
</html>
