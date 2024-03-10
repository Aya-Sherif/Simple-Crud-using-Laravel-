<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::paginate();

        return view('posts.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.add');
    }
    public function store(Request $request)
    {
        $request->validate(
            ['title'=>['required','string','min:3','max:150'],
            'description'=>['required','string','min:3','max:1000'],

        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return back()->with('success','Data Added Successfuley' );
    }
    public function edit($id)
    {
        $post=Post::findOrFail($id); //to get the pos with this id if its exist and return not found if it is not exist
        return view('posts.edit', ['post'=> $post]);
    }
    public function destroy($id)
    {
        Post::destroy($id);

        return back()->with('success','Data Deleted Successfuley' );

    }
    public function update(Request $request,$id)
    {
        $request->validate(
            ['title'=>['required','string','min:3','max:150'],
            'description'=>['required','string','min:3','max:1000'],

        ]);
        $post =  Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('Posts')->with('success','Data Updated Successfuley' );
    }
}
