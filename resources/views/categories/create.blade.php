@extends('layouts.app')
<h1>カテゴリー登録</h1>
{{link_to_route('categories.index','カテゴリー一覧へ',[],['class'=>'btn btn-success'])}}
@section('content')
    {{Form::open(['route'=>'categories.store'])}}
    <div class="form-group">
        {{ Form::label('name', 'カテゴリー名：') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
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