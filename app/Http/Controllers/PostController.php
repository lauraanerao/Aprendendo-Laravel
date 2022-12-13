<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
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

    public function edit() {
        return "edit";
    }

    public function update() {
        //TODO: criar método update
    }

    public function destroy() {
        //
    }

}
