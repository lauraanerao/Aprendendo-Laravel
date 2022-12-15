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
    <div class="text-right">
        <a href="{{ route('posts.edit', $post->id) }}"><button class="btn btn-primary float-right">Editar</button></a>
    </div>
@endsection
