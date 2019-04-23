@extends('layouts.app')
<h1>商品詳細</h1>
{{link_to_route('items.index','商品一覧へ',[],['class'=>'btn btn-success'])}}

@section('content')
    <p>ID:{{$item->id}}</p>
    <p>商品名:{{$item->name}}</p>
    <p>カテゴリー名:{{$item->category->name}}</p>
    <p>登録日:{{$item->created_at}}</p>
    <p>更新日:{{$item->updated_at}}</p>
@endsection
