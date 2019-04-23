@extends('layouts.app')
<h1>カテゴリー詳細</h1>
{{link_to_route('categories.index','カテゴリー一覧へ',[],['class'=>'btn btn-success'])}}
@section('content')
    <p>ID：{{ $category->id }}</p>
    <p>カテゴリー名：{{ $category->name }}</p>
    <p>登録日：{{ $category->created_at }}</p>
    <p>更新日：{{ $category->updated_at }}</p>
@endsection