<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Post;
use App\Http\Resources\PostResource;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return PostResource::collection($posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        try{
//            $posts = Post::where('id' , $id)->firstOrFail();
//        }catch (\Exception $e){
//            dd($e);
//        }

        $posts = Post::where('id' , $id)->firstOrFail();
        return new PostResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id' , $id)->firstOrFail();
        return view('posts.edit')
                ->with('posts', $post)
                ->with('category' , Category::all())
                ->with('tags', Tag::all())
            ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::where('id', $id)->first();

        //dd($post);
        $this->validate($request, [
            "title" => "required",
            "content" => "required",
        ]);
        /*
         * Test if image changed
         * Created By : Do3a2 Al3abbar
         * Date : 17/12/2019 07:29 AM
         */
        if ($request->hasFile('image')) {


        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
         * $categoy = Category::find($id);
         * $categoy->delete();
         * return redirect()->route('categories');
        */
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts');
    }
    public function trashed()
    {
        /*
         *
        $categoy = Category::find($id);
        $categoy->delete();
        return redirect()->route('categories');
        */
        $post = Post::onlyTrashed()->get();
        //   dd($post);
        // return redirect()->route('posts');
        return view('posts.softdeleted')->with('posts' , $post);
    }
    public function hdelete($id)
    {
        /*
         * Delete full info with data base
         */
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
        return redirect()->back();
    }
    public function restore($id)
    {
        /*
         * restore data that deleted soft delete
         *
         */
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('posts');
    }
}
