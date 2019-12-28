<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 28/12/19
 * Time: 12:27 م
 */
?>
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
                    <div class="row">
                        <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Category : {{ $single }}</h1>
                        <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">All post in this category . <br>
                            please Add more 4 posts to this category  </p>
                        <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    @foreach($single_post->posts as $cat)
                                        {{--{{ dd($cat->image) }}--}}

                                    <div class="col-sm-3 col-xs-6">
                                        <div class="team-single-wrapper">
                                            <div class="team-single">
                                                <div class="person-thumb">
                                                    <img src="{{asset($cat->image)}}" class="img-responsive" alt="">
                                                </div>
                                                <div class="social-profile">
                                                    <ul class="nav nav-pills">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="person-info">
                                                <h2>John Doe</h2>
                                                <p>CEO &amp; Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                            <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
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
