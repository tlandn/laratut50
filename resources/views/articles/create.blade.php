@extends('app')

@section('content')
    <h1>Write a new Article</h1>
    <hr/>

    {!! Form::open( ['url' => 'articles']) !!}
        @include('articles.form',['submitButtonText' => 'Create Article'])

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


@stop