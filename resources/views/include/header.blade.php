<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 25/12/19
 * Time: 12:59 م
 */
?>

        <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Blank | Clear Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/skin-default.css')}}" type="text/css" id="skin"/>
    <link href="{{url('vendor/iCheck/css/all.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendor/bootstrap-fileinput/css/fileinput.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/formelements.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/datatable.css')}}" media="all" rel="stylesheet" type="text/css"/>

    <!-- end of global css -->
</head>

<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="/" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="{{asset('img/logo.png')}}" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="javascript:void(0)" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                        class="fa fa-fw ti-menu"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">

                <!--rightside toggle-->
                <li>
                    <a href="javascript:void(0)" class="dropdown-toggle toggle-right">
                        <i class="fa fa-fw ti-view-list black"></i>
                        <span class="label label-danger">9</span>
                    </a>
                </li>
            @guest
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="javascript:void(0)" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="{{asset('img/authors/avatar1.jpg')}}" width="35" class="img-circle img-responsive pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>Sing In | Up
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->

                        <!-- Menu Body -->
                        <li class="p-t-3">
                            <a href="/login">
                                <i class="fa fa-fw fa-sign-in"></i> Sign In
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="/register"><i class="fa fa-fw fa-pencil-square-o"></i> Sing Up
                            </a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#">
                                    <i class="fa fa-fw ti-lock"></i>
                                    Lock
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="#">
                                    <i class="fa fa-fw ti-shift-right"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

            @else
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="javascript:void(0)" class="dropdown-toggle padding-user" data-toggle="dropdown">


                            <img src="{{ asset('img/authors/avatar1.jpg') }}" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">

                        <div class="riot">
                            <div>
                                {{ Auth::user()->name }}
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">

                        <!-- Menu Body -->
                        <li class="p-t-3">
                            <a href="#">
                                <i class="fa fa-fw ti-star"></i>
                                @if(auth()->user()->hasRole('super_admin') != null )
                                   Role: Super Admin
                                    @else
                                    Role: User
                                @endif
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            @if (Route::has('password.request'))
                            <div class="pull-left">
                                <a href="{{ route('password.request') }}">
                                    <i class="fa fa-fw ti-lock"></i>
                                    Lock
                                </a>
                            </div>
                            @endif
                            <div class="pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw ti-shift-right"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>

                    @endguest
            </ul>
        </div>
    </nav>
</header>
