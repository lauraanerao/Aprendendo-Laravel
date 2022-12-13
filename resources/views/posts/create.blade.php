@extends('layout.main')

@section('title')
    Criar Post
@endsection

@section('page-title')
    Publique um novo Post
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

        <form method="post" action="store">
            @csrf
             <label for="title">Title</label>
            <input required id="title" class="form-control" name="title" value="{{ old('title') }}">

            <br>

            <label for="body">Description</label>
            <textarea required id="body" class="form-control" rows="8" name="body">{{ old('body') }}</textarea>

            <br>
            <button style="width: 100%" type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
