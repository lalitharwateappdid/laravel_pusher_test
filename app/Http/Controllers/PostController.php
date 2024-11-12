<?php

namespace App\Http\Controllers;

use App\Events\TestNotification;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            "author" => "required|string|max:255",
            "title" => "required|string|max:255"
        ]);

        // create the post
        $post = Post::create([
            "author" => $request->author,
            "title" => $request->title
        ]);

        // dispatch the event
        event(new TestNotification([
            "author" => $post->author,
            "title" => $post->title
        ])  );

        return redirect()->back()->with("success","Post Created Successfully");
    }
}
