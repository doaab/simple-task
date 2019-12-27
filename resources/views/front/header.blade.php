<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 27/12/19
 * Time: 03:21 م
 */
?>
{{-- Satrt header--}}
<header id="header">
    {{-- Start Social menu --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- End Social menu--}}

    {{-- Satrt Main menu--}}
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/">
                    <h1><img src="{{ asset('front/images/logo.png') }}" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li class="dropdown"><a href="#">Category <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            @foreach($category as $cat)
                                <li><a href="">{{ $cat->category }}</a></li>
                            @endforeach
                        </ul>
                    </li>


                    <li class="dropdown active"><a href="">Tag <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            @foreach($tags as $ta )
                                <li><a class="" href="blog.html">{{ $ta->tag }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{ route('login') }}">Admin panel</a>

                    </li>
                    <li><a href="{{ route('category.show') }}">All Categories</a></li>
                </ul>
            </div>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Does not work ">
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Main menu--}}
</header>
<!--/#header-->
{{-- End header--}}
