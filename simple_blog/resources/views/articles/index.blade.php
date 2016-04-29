@extends('layouts.master')
@section('head.title', 'List articles')
@section('body.content')
    @foreach ($articles as $a)
    <div class="jumbotron">
        <div class="container">
            <h2><strong>{{ $a->title }}</strong></h2>
            <p>{{ $a->content }}</p>
            <p>
                <a href="{{ route('article.show', $a->id) }}" class="btn btn-primary btn-lg">Read more</a>
                <a href="{{ route('article.edit', $a->id) }}" class="btn btn-primary btn-lg">Update</a>
                <a href="{{ route('article.destroy', $a->id) }}" class="btn btn-danger btn-lg">Delete</a>
<!-- 
                 {!!
                    Form::open([
                        'route' => ['article.destroy', $a->id],
                        'method' => 'DELETE',
                        'class' =>'',
                        'style' => 'display:inline-block'
                    ])
                !!}
                {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!} -->
                <!-- <a href="{{ route('article.show', $a->id) }}" class="btn btn-primary btn-lg">Learn more</a> -->
            </p>
        </div>
    </div>
    @endforeach
    <div class="contickt">
        {{ $articles->render() }}
    </div>
@stop
