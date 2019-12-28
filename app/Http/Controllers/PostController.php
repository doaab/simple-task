<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['role:super_admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('posts.index')
                ->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $tags = Tag::all();
        if ($categories->count() == 0 ){
            return redirect()->route('category.create');
        }elseif ($tags->count() == 0){
            return redirect()->route('tag.create');
        }
        return view('posts.create')
                ->with('categories', $categories)
                ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title"     => "required",
            "content"   => "required",
            "tags"      => "required",
            "category"  => "required",
            "image" => "required|image",
        ]);
        $featrued = $request->image;
        $featrued_new_name = time().$featrued->getClientOriginalName();
        $featrued -> move('uploads/posts/' , $featrued_new_name);

        $post  = Post::create(array(
            "title"       => $request->title,
            "content"     => $request->content,
            "image"    => 'uploads/posts/'.$featrued_new_name,
            "slug"   => str_slug($request->title)
        ));

        $post->tags()->attach($request->tags);
        $post->categories()->attach($request->category);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id' , $id)->first();
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

        $post = Post::where('id' , $id)->first();

        //dd($post);
        $this->validate($request, [
            "title"    => "required",
            "content"  => "required",
        ]);
        /*
         * Test if image changed
         * Created By : Do3a2 Al3abbar
         * Date : 17/12/2019 07:29 AM
         */
        if($request->hasFile('image')){
            $featrued = $request->image;
            $featrued_new_name = time().$featrued->getClientOriginalName();
            $featrued -> move('uploads/posts/' , $featrued_new_name);

            $post->featrued = 'uploads/posts/'.$featrued_new_name;
        }
        $post->title = $request->title;
        $post->content = $request->content;
//        dd($post->tags()->sync($request->tags));
//        dd($post->categories()->sync($request->category));
        $post->save();

        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->category);

        return redirect()->back();
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
