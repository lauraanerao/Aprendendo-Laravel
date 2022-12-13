@extends('layout.main')

@section('title')
    {{ $post->title }}
@endsection

@section('page-title')
    {{ $post->title }}
@endsection

@section('content')
    <p>
        {{ $post->body }}
    </p>
@endsection
