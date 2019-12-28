<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home')->with('posts', Post::all());
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Post::first();
        $last_post = Post::orderBy('created_at','desc')->take(3)->get();
        $last_image = Post::orderBy('created_at','desc')->take(6)->get();
        $next_page = Post::where('id', '>' , $post->id)->min('id');
        $prev_page = Post::where('id', '<' , $post->id)->max('id');
        return view('welcome')
            ->with('posts' , Post::all())
            ->with('category' , Category::all())
            ->with('tags' , Tag::all())
            ->with('last_post' , $last_post)
            ->with('last_image' , $last_image)
            ->with('next',Post::find($next_page))
            ->with('prev',Post::find($prev_page))

            ;
    }
    /**
     * Show the application Categories.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function categories()
    {
        $post = Post::first();

        $last_post = Post::orderBy('created_at','desc')->take(3)->get();
        $last_image = Post::orderBy('created_at','desc')->take(6)->get();
        $next_page = Post::where('id', '>' , $post->id)->min('id');
        $prev_page = Post::where('id', '<' , $post->id)->max('id');
        return view('category.show')
            ->with('posts' , Post::all())
            ->with('category' , Category::orderBy('created_at', 'desc')->get())
            ->with('tags' , Tag::all())
            ->with('last_post' , $last_post)
            ->with('last_image' , $last_image)
            ->with('next',Post::find($next_page))
            ->with('prev',Post::find($prev_page))

            ;
    }    /**
     * Show the application Single category.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function category($id)
    {
        $single = Category::where('id', $id)->first();

        $post = Post::first();
        $last_post = Post::orderBy('created_at','desc')->take(3)->get();
        $last_image = Post::orderBy('created_at','desc')->take(6)->get();
        $next_page = Post::where('id', '>' , $post->id)->min('id');
        $prev_page = Post::where('id', '<' , $post->id)->max('id');
        return view('category.single')
            ->with('posts' , Post::all())
            ->with('category' , Category::orderBy('created_at', 'desc')->get())
            ->with('single' , $single->category)
            ->with('single_post' , $single)
            ->with('tags' , Tag::all())
            ->with('last_post' , $last_post)
            ->with('last_image' , $last_image)
            ->with('next',Post::find($next_page))
            ->with('prev',Post::find($prev_page))

            ;
    }
    /*
     * Show the application single post
     */
    public function post($slug){
        $post = Post::where('slug', $slug)->first();
        $next_page = Post::where('id', '>' , $post->id)->min('id');
        $prev_page = Post::where('id', '<' , $post->id)->max('id');
        $last_post = Post::orderBy('created_at','desc')->take(3)->get();
        $last_image = Post::orderBy('created_at','desc')->take(6)->get();
        return view('posts.show')
            ->with('article',$post)
            ->with('posts' , Post::all())
            ->with('category' , Category::all())
            ->with('tags' , Tag::all())
            ->with('last_post' , $last_post)
            ->with('last_image' , $last_image)
            ->with('next',Post::find($next_page))
            ->with('prev',Post::find($prev_page))

            ;
    }
}
