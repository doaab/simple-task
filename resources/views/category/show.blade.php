@extends('front.app')
@section('content')
    @include('front.header')
    {{-- Start breadcrumb--}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog Name</h1>
                            <p>Welcome !!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
    {{-- End breadcrumb --}}

    {{-- Start container area--}}
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">@if($category->count() > 0)

                        <ul class="portfolio-filter text-center">
                            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                            @foreach($category as $cat)
                            <li><a class="btn btn-default" href="#" data-filter=".{{ $cat->category }}">{{ $cat->category }}</a></li>
                            @endforeach
                        </ul><!--/#portfolio-filter-->

                        @endif
                        <div class="portfolio-items">
                            @foreach($category as $cat)
                                @foreach($cat->posts as $image)
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item {{ $cat->category }} ">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ $image->image }}" class="img-responsive" alt="">

                                        </div>
                                        {{--{{ dd($cat->posts) }}--}}
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{route('post.show',['slug' => $image->slug])}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{ $image->image }}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>{{ $image->title }}</h2>
                                    </div>
                                </div>
                            </div>

                                    @endforeach
                            @endforeach
                        </div>
                        <div class="portfolio-pagination">
                            <ul class="pagination">
                                <li><a href="#">left</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">right</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


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
                                            <a href="#">
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
            </div>
        </div>
    </section>
    <!--/#blog-->
    {{-- End container area --}}
@endsection