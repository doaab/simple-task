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
                        <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="#"><img src="../{{ $article->image }}" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase">
                                            <a href="#">{{ date('d', strtotime($article->created_at))  }}
                                                <br><small>{{ date('M', strtotime($article->created_at))  }}</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#">{{ $article->title }}</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>

                                        {{ $article->content }}
                                    </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-share">
                                        <span class='st_facebook_hcount'></span>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_linkedin_hcount'></span>
                                        <span class='st_pinterest_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                    <div class="author-profile padding">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="{{asset('front/images/blogdetails/1.png')}}" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h3>Do3a2</h3><i class="fa fa-heart"></i>
                                                <p>
                                                    The comment section are just a frontend and not extented to backend

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="response-area">
                                        <h2 class="bold">Comments</h2>
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="post-comment">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="{{asset('front/images/blogdetails/2.png')}}" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                        <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore ma</p>
                                                        <ul class="nav navbar-nav post-nav">
                                                            <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="parrent">
                                                    <ul class="media-list">
                                                        <li class="post-comment reply">
                                                            <a class="pull-left" href="#">
                                                                <img class="media-object" src="{{ asset('front/images/blogdetails/3.png') }}" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                                                                <ul class="nav navbar-nav post-nav">
                                                                    <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="post-comment">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="{{ asset('front/images/blogdetails/4.png') }}" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                                        <ul class="nav navbar-nav post-nav">
                                                            <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div><!--/Response-area-->
                                </div>
                            </div>
                        </div>
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