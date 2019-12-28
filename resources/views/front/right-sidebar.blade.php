<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 28/12/19
 * Time: 01:33 م
 */
?>

{{-- Start Right Sidebar --}}
<div class="col-md-3 col-sm-4 padding-top">
    <div class="sidebar blog-sidebar">
        <div class="sidebar-item  recent">
            <h3>All Posts ( {{ $posts->count() }} )</h3>
            @if($posts->count() > 0)
                @foreach($last_post as $post)
                    <div class="media">
                        <div class="pull-left">
                            <a href="{{route('post.show',['slug' => $post->slug])}}"><img src="{{ asset($post->image) }}" width="50px" height="50px" alt=""></a>
                        </div>
                        <div class="media-body">
                            <h4><a href="{{route('post.show',['slug' => $post->slug])}}">{{ $post->title }}</a></h4>
                            <p>{{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>

        @if($category->count() > 0)
            <div class="sidebar-item categories">
                <h3>Categories ( {{ $category->count() }} )</h3>
                <ul class="nav navbar-stacked">
                    @foreach($category as $category)
                        <li class="active">
                            <a href="{{route('category.single',['id' => $category->id])}}">
                                {{ $category->category }}
                                <span class="pull-right">
                                                {{ $category->posts()->count() }}
                                            </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($tags->count() > 0)
            <div class="sidebar-item tag-cloud">
                <h3>Tag Cloud ( {{ $tags->count() }} )</h3>
                <ul class="nav nav-pills">
                    @foreach($tags as $tag)
                        <li><a href="#">{{ $tag->tag }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if($last_post->count() > 0)
            <div class="sidebar-item popular">
                <h3>Latest Photos</h3>
                <ul class="gallery">
                    @foreach($last_image as $post)
                        <li><a href="#"><img src="{{ $post->image }}" alt=""></a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
{{-- End Right Sidebar--}}
