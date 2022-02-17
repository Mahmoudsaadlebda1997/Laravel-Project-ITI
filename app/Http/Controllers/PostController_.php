<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{   
    // list all posts
    function index(){
        $posts = [[
            "id"=>1,
            "name"=>"Mahmoud",
            "body"=>" Iam Silkroad Player",
            "title"=>"Silkroad Topic"
        ],[
            "id"=>2,
            "name"=>"Mahmoud Gamal",
            "body"=>" Iam Gebna Player",
            "title"=>"Gebna Topic"
        ],[
            "id"=>3,
            "name"=>"Reda",
            "body"=>" Iam Valorant Player",
            "title"=>"Valorant Topic"
        ],[
            "id"=>4,
            "name"=>"Mohamed Saad",
            "body"=>"Iam Valorant player",
            "title"=>" Valorant Topic"
        ]];
        return view("posts.index",["posts"=>$posts]);
            
    }
        //  show post

    function show($id){
        $post = [
            "id"=>$id,
            "name"=>"Mahmoud",
            "body"=>"Iam Silkroad Player",
            "title"=>"Silkroad World"
        ];
        
        return view("posts.show",$post);
    }
        // edit post

    function edit(){

        return view("posts.edit",);
    }
    function update(){

    }
    function create(){
        return view("posts.create");
    }

    function destroy(){
        return view("posts.create");
    }
}
