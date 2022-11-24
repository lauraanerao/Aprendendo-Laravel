@foreach($posts as $post)
    {{ $post->title }} <br>
    {{ $post->body }}
@endforeach
