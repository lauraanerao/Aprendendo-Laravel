@extends('layout.main')

@section('title')
    Criar Post
@endsection

@section('page-title')
    Publique um novo Post
@endsection

@section('content')
    <div class="col-md-4 offset-4">
        <form method="post" action="store">
            @csrf

            <label for="title">Title</label>
            <input id="title" class="form-control" name="title">

            <br>

            <label for="description">Description</label>
            <textarea id="description" class="form-control" rows="8" name="body"></textarea>

            <br>
            <button style="width: 100%" type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
