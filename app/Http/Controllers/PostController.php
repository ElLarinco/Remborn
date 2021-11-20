<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy("id", "desc") -> paginate();
        return view("posts.index", compact("posts"));
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
    public function store(PostRequest $request, Post $post)
    {
        /*$post = new Post();
        $post -> title = $request -> title;
        $post -> content = $request -> content;
        $post -> category = $request -> category;
        $post -> save();*/

        $request -> merge([
            "slug" => Str::slug($request -> title),
        ]);

        $post = Post::create($request -> all()
            /*["title" => $request -> title,
            "content" => $request -> content,
            "category" => $request -> category,]*/);

        return redirect()->route("posts.show", $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $post = Post::find($id);
        return view("posts.show", compact("post"));
    }*/
    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        $post = Post::find($id);
        return view("posts.edit", compact("post"));
    }*/
    public function edit(Post $post)
    {
        return view("posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(PostRequest $request, $id)
    {
        //$post = Post::find($id);
        //$post -> title = $request -> title;
        //$post -> content = $request -> content;
        //$post -> category = $request -> category;
        //$post -> update();

        $post = Post::find($id);
        $post -> update($request -> all());

        return redirect()->route("posts.show", $post -> id);
    }*/
    public function update(PostRequest $request, Post $post)
    {
        /*$post = Post::find($id);
        $post -> title = $request -> title;
        $post -> content = $request -> content;
        $post -> category = $request -> category;
        $post -> update();*/

        $request -> merge([
            "slug" => Str::slug($request -> title),
        ]);
        $post -> update($request -> all());

        return redirect()->route("posts.show", $post -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();
        return redirect()->route("posts.index");
    }*/
    public function destroy(Post $post)
    {
        $post -> delete();
        return redirect()->route("posts.index");
    }
}