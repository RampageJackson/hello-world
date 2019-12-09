<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function show()
    {
        $posts = Post::all();

        return view('post', [
            'posts' => $posts
        ]);
    }

    public function store(){
        $post = new Post();

        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');

        $post->save();

        return redirect('/posts');
    }

    public function delete(){
        $post = new Post();

        $post->id = request('id');

        $post::where('id',$post->id)->delete();

        return redirect('/posts');
    }

}
