<!-- resources/views/cats/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/phote.css') }}">
</head>
@extends('layouts.app')

@section('content')
<div class="container" id="content">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                @if ($errors->has('image'))
                    <li>ファイルが大きすぎます。容量を減らしてください。</li>
                @endif
            </ul>
        </div>
    @endif
    <form action="{{ route('cats.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- 画像のアップロード用の input -->
        <div class="mb-3">
            <label for="name" class="form-label">お名前</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">写真を選んでください</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>

        <!-- キャプション用の textarea（オプション） -->
        <div class="mb-3">
            <label for="caption" class="form-label">コメント</label>
            <textarea class="form-control" id="caption" name="caption" rows="3"></textarea>
        </div>
        <!-- 送信ボタン -->
        <button type="submit" class="btn">送信</button>
    </form>
</div>
@endsection



