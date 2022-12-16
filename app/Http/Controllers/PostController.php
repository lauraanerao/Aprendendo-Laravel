<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function create() {

        return view('posts.create');
    }

    public function store(PostRequest $request) {
       $data = $request->validated();
       Post::create($data);
       return back()->with('sucesso', 'Post publicado com sucesso!');
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, PostRequest $request) {
        $data = $request->validated();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return back()->with('sucesso', 'Post editado com sucesso!');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect(route('posts.index'))->with('sucesso', 'Post apagado com sucesso!');
    }

}
