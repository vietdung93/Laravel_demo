@extends('layouts.master')
@section('head.title', $article->title)
@section('body.content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-sm-offset-3">
            <div class="redirect">
                <a href="{{ url('/articles') }}" class="btn btn-info"><< Back home</a>
                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning">Update</a>
                {!!
                    Form::open([
                        'route' => ['article.destroy', $article->id],
                        'method' => 'DELETE',
                        'class' =>'',
                        'style' => 'display:inline-block'
                    ])
                !!}
                {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
            <div class="jumbotron">
                <div class="container">
                    <h2>{{ $article->title }}</h2>
                    <p>{{ $article->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop