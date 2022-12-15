@extends('layout.main')

@section('title')
    Editar Post
@endsection

@section('page-title')
    Edite seu Post
@endsection

@section('content')
    <div class="col-md-4 offset-4">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        @if(session('sucesso'))
            {{ session('sucesso') }}
        @endif

        <form method="post" action="{{ route('posts.update', $post->id) }}">
            @csrf @method('PUT')
            <label for="title">Title</label>
            <input required id="title" class="form-control" name="title" value="{{ $post->title }}">

            <br>

            <label for="body">Description</label>
            <textarea required id="body" class="form-control" rows="8" name="body">{{ $post->body }}</textarea>

            <br>
            <button style="width: 100%" type="submit" class="btn btn-primary mb-2">Editar</button>

        </form>
        <form method="post" action="{{ route('posts.destroy', $post->id) }}">
            @csrf @method('DELETE')
            <button style="width: 100%" type="submit" class="btn btn-danger">Remover Post</button>
        </form>
    </div>
@endsection
