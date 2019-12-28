<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 25/12/19
 * Time: 01:06 م
 */
?>
<aside class="left-side sidebar-offcanvas">
@guest
    <!-- sidebar: style can be found in sidebar-->
    <section class="sidebar">
        <div id="menu" role="navigation">
            <div class="nav_profile">
                <div class="media profile-left">
                    <a class="pull-left profile-thumb" href="javascript:void(0)">
                        <img src="{{asset('img/avatar1.jpg')}}" class="img-circle" alt="User Image">
                    </a>
                    <div class="content-profile">
                        <h4 class="media-heading">
                            Do3a2
                        </h4>
                        <ul class="icon-list">
                            <li>
                                <a href="/register">
                                    <i class="fa fa-fw fa-pencil-square-o"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-lock"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-settings"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/login">
                                    <i class="fa fa-fw fa-sign-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="navigation">

                <li class="menu-dropdown">
                    <a href="javascript:void(0)">
                        <i class="fa fa-fw fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>

            </ul>
            <!-- / .navigation -->
        </div>
        <!-- menu -->
    </section>
    <!-- /.sidebar -->

@else
    <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="javascript:void(0)">
                            <img src="{{asset('img/avatar1.jpg')}}" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                Addison
                            </h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">

                    @auth
                    @if(auth()->user()->hasRole('super_admin') != null )
                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="fa fa-fw fa-tasks"></i>
                            <span>Category</span> <span
                                    class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('categories')}}">
                                    <i class="fa fa-fw fa-th-list"  aria-hidden="true"></i> Category List
                                </a>
                            </li>
                            <li>
                                <a href="{{route('category.create')}}">
                                    <i class="fa fa-fw fa-pencil"></i> Add New category
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li class="menu-dropdown">
                            <a href="javascript:void(0)">
                                <i class="menu-icon ti-user"></i>
                                <span>Users</span> <span
                                        class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('users.index')}}">
                                        <i class="fa fa-fw ti-user" aria-hidden="true"></i> Users List
                                    </a>
                                </li>

                            </ul>
                        </li>

                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="menu-icon ti-tag"></i>
                            <span>Tags</span> <span
                                    class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('tags')}}">
                                    <i class="fa fa-fw ti-menu-alt" aria-hidden="true"></i> Tags List
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tag.create')}}">
                                    <i class="fa fa-fw ti-tag"></i> Add New Tag
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @endauth
                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="fa fa-fw fa-file-archive-o" ></i>
                            <span>Artical</span> <span
                                    class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('posts')}}">
                                    <i class="fa fa-fw ti-files" aria-hidden="true"></i> Post List
                                </a>
                            </li>
                            <li>
                                <a href="{{route('post.create')}}">
                                    <i class="fa fa-fw ti-file"></i> Add New Post
                                </a>
                            </li>
                            <li>
                                <a href="{{route('post.trashed')}}">
                                    <i class="fa fa-fw fa-trash-o"></i> Trashed Posts
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
    <!-- /.sidebar -->
@endguest

</aside>
