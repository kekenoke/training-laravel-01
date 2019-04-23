@extends('layouts.app')
 <h1>商品登録</h1>
{{link_to_route('items.index','商品一覧へ',[],['class'=>'btn btn-success'])}}
@section('content')
    {{Form::open(['route'=>'items.store'])}}
    <div class="form-group">
        {{Form::label('name', '商品名：') }}
        {{Form::text('name', null, ['class' => 'form-control']) }}
        {{Form::label('name', 'カテゴリー名：') }}
        {{Form::select('category_id',$categories, null, ['class' => 'form-control','placeholder' => '選択してください'])}}
    </div>
    <div class="form-group">
        {{ Form::submit('登録', ['class' => 'btn btn-primary form-control']) }}
    </div>
        {{ Form::close() }}
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif