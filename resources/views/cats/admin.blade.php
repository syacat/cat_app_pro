<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
     <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>

    </style>
</head>
<body>
    @include('cats.header')
    <!-- 写真一覧 -->
<h2>投稿した写真</h2>
<table class="admin">
    <thead>
        <tr>
            <th>ID</th>
            <th>画像</th>
            <th>投稿日時</th>
            <th>投稿者</th>
            <th>削除</th>
        </tr>
    </thead>
    <tbody>
        @foreach($photos as $photo)
        <tr>
            <td>{{ $photo->id }}</td>
            <td><img src="{{ asset('storage/' . $photo->image_path) }}" alt="写真"></td>
            <td>{{ $photo->created_at }}</td>
            {{-- <td>{{ $cats->name }}</td> --}}
            <td>{{ $photo->cat ? $photo->cat->name : '未指定' }}</td>
            <td>
                <!-- 削除ボタン -->
                <form action="{{ route('photo.delete', $photo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- ユーザー一覧 -->
<h2>登録されたユーザー</h2>
<table class="admin">
    <thead>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>Email</th>
            <th>削除</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->email }}</td>
            {{-- <td>{{ $cat->created_at }}</td> --}}
            <td>
                <form action="{{ route('cat.delete', $cat->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
   function confirmDelete(id) {
        var result = window.confirm('本当に削除しますか？');
        if (result) {
            document.getElementById('delete-form-' + id).submit();
        }
    }

    // メッセージ表示
    @if(session('success'))
        alert('{{ session('success') }}');
    @endif
</script>
</body>
</html>