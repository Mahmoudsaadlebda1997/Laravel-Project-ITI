<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Select* From posts
        // return view
        
        $posts=Post::all();
        return view("posts.index",["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            "title"=>$request->title,
            "description"=>$request->description
        ]);
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // select * from posts where ID=$id
       $post=Post::find($id);
        return view("posts.show",$post);

    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view("posts.edit",$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        // $posts=Post::all();
        // return view("posts.index",["posts"=>$posts]);
        // Second Method To Show slove Undefined Variable of $posts
        // return view ("posts.index", compact("posts"));
        // Best Way to Go Other Page without Reapting Code
        return redirect()->route("posts.index");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        // $posts=Post::all();
        // return view("posts.index",["posts"=>$posts]);
        // Best Way to Go Other Page without Reapting Code
        return redirect()->route("posts.index");
        
    }
}
