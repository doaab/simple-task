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
            <div class="col-md-9 col-sm-7">
                <div class="row">

                    {{-- Start Last Posts--}}
                    <div class="col-sm-12 col-md-12">
                        @if($posts->count() > 0)
                            @foreach($posts as $post)
                                <div class="single-blog single-column">
                                    <div class="post-thumb" style="height: 400px;">
                                        <a href="{{route('post.show',['slug' => $post->slug])}}"><img src="{{$post->image}}" height="75%" class="img-responsive img-thumbnail" alt=""></a>
                                        <div class="post-overlay">
                                            <span class="uppercase">
                                                <a href="#">{{ date('d', strtotime($post->created_at))  }}
                                                    <br>
                                                    <small>{{ date('M', strtotime($post->created_at)) }} </small>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="{{route('post.show',['slug' => $post->slug])}}">{{ $post->title }}</a></h2>
                                        <h3 class="post-author"><a href="#">{{$post->created_at->diffForHumans()}}</a></h3>
                                        <p> {{ substr($post->content , 0 , 150) }}[...]</p>
                                        <a href="{{route('post.show',['slug' => $post->slug])}}" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            <ul class="nav navbar-nav post-nav">
                                                <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                                <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    {{-- End Lasts Posts--}}
                </div>
                <div class="blog-pagination">
                    <ul class="pagination">
                        <li><a href="#">left</a></li>
                        <li class="pull-left"><a href="#"><i class="fa fa-chevron-left"></i> Prev</a></li>
                        <li class="pull-right"><a href="#"> Next <i class="fa fa-chevron-right"></i></a></li>
                        <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>

            {{-- Start Right Sidebar --}}
            @include('front.right-sidebar')
            {{-- End Right Sidebar--}}
        </div>
    </div>
</section>
<!--/#blog-->
{{-- End container area --}}
@endsection