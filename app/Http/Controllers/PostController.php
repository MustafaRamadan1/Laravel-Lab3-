<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //

    public function Create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //create a new record in db by the model we have and as we said it know it's the model of the table 
        // by naming conviention 

       $post = new Post();
       $post->title = $request->title;
       $post->content = $request->content;
       $post->user_id= $request->user()->id;
       $post->save();
        return back();
    //     // $post = Post::created(array_merge($request->all(), ['users_id']));
    
    }

    public function index()
    {

        $all_posts =  Post::all();
       
        return view('posts.index', ['posts' => $all_posts]);
    }

    public function edit(Request $request, $id) 
    {   
        
        return view('posts.edit', ['post'=> Post::find($id)]);
    }
    public function update(Request $request, $id) 
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        if($post->save())
        return redirect('posts');
    }

    public function destroy($id){
        Post::find($id)->delete();
        return redirect()->route('posts.index');
    }

}





