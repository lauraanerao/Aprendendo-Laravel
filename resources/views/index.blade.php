@extends('layout.main')

@section('title')
    Home
@endsection

@section('page-title')
    Home Page
@endsection

@section('page-description')
    Descrição da Página
@endsection

@section('content')

    @foreach($posts as $post)
        <h4> <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h4>
        <p>{{ $post->body }}</p>
        <hr>
    @endforeach

@endsection
