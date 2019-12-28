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
                                    @if(!empty($cat->posts))
                                    <li>
                                        <a class="btn btn-default" href="#" data-filter=".{{ $cat->category }}" style="background:#FFF;">
                                            {{ $cat->category }}
                                        </a>
                                    </li>
                                @endif
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

                    </div>
                </div>

@include('front.right-sidebar')
            </div>
        </div>
    </section>
    <!--/#blog-->
    {{-- End container area --}}
@endsection