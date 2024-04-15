<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/logout.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
</head>
<body>
    <div class="cat">
        <div class="ear"></div>
        <div class="face">
            <div class="eye-shade"></div>
            <div class="eye-white">
                <div class="eye-ball"></div>
            </div>
            <div class="eye-shade rgt"></div>
            <div class="eye-white rgt">
                <div class="eye-ball"></div>
            </div>
            <div class="nose"></div>
            <div class="mouth"></div>
            {{-- ひげ --}}
            <div class="beard"></div>
            <div class="beard--r"></div>
    </div>
    <form id="logoutForm" method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="hand"></div>
        <div class="hand rgt"></div>
        <h1>logout</h1>
        <div class="form-group">

        </div>
        <div class="form-group">
            {{-- <input id="password" type="password" name="password" required="required" class="form-control"/>
            <label class="form-label">Password</label> --}}
            <p class="alert">Invalid Credentials..!!</p>
            <button type="button" onclick="confirmLogout()" class="btn">logout</button>
        </div>
    </form>
    <div class="paw">
        <span><a href="{{ route('index') }}">Home</a></span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M226.5 92.9c14.3 42.9-.3 86.2-32.6 96.8s-70.1-15.6-84.4-58.5s.3-86.2 32.6-96.8s70.1 15.6 84.4 58.5zM100.4 198.6c18.9 32.4 14.3 70.1-10.2 84.1s-59.7-.9-78.5-33.3S-2.7 179.3 21.8 165.3s59.7 .9 78.5 33.3zM69.2 401.2C121.6 259.9 214.7 224 256 224s134.4 35.9 186.8 177.2c3.6 9.7 5.2 20.1 5.2 30.5v1.6c0 25.8-20.9 46.7-46.7 46.7c-11.5 0-22.9-1.4-34-4.2l-88-22c-15.3-3.8-31.3-3.8-46.6 0l-88 22c-11.1 2.8-22.5 4.2-34 4.2C84.9 480 64 459.1 64 433.3v-1.6c0-10.4 1.6-20.8 5.2-30.5zM421.8 282.7c-24.5-14-29.1-51.7-10.2-84.1s54-47.3 78.5-33.3s29.1 51.7 10.2 84.1s-54 47.3-78.5 33.3zM310.1 189.7c-32.3-10.6-46.9-53.9-32.6-96.8s52.1-69.1 84.4-58.5s46.9 53.9 32.6 96.8s-52.1 69.1-84.4 58.5z"/></svg>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script>
        function confirmLogout() {
            // 確認ダイアログを表示
            var confirmLogout = confirm("Are you sure you want to logout?");

            // ユーザーが "はい" を選択した場合
            if (confirmLogout) {
                // フォームを送信
                document.getElementById('logoutForm').submit();
            }
        }
    </script>
</body>
</html>
