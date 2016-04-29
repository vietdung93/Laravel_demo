@extends('layouts.master')
@section('head.title', 'Add an article');
@section('body.content')
    <div class="container">
        <div class="row">
            <div class="com-sm-6 col-sm-offset-3">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <strong>Whoop!</strong> There were problems with your input.
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                {!! 
                    Form::open([
                        'route' => 'article.store',
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ]) 
                !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title article:', ['class'=>'control-label']) !!}
                    {!! Form::text('title', null, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Please input title...']) !!}
                </div>
               <div class="form-group">
                   {!! Form::label('content', 'Content article:', ['class'=>'control-label']) !!}
                   {!! Form::text('content', null, ['class'=>'form-control','id'=>'content','placeholder'=>'Please input content...']) !!}
               </div>
               <div class="form-group">
                   {!! Form::submit('Add new article', ['class'=>'btn btn-primary']) !!}
               </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop