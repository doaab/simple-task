@extends('layouts.app')
@section('page', 'Post')
@section('blank', 'Add New Post')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(count($errors) > 0)

                            <ul class="navbar-nav mr-auto">
                                @foreach($errors->all() as $error)
                                    <li class="nav-item dropdown">

                                        <p style="color: red">{{$error}}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <i class="fa fa-fw ti-move"></i> Edit Post (( {{$posts->title}} ))
                                        </h3>
                                        <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                 </span>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form"  action="{{route('post.update', ['id' => $posts->id])}}" method="post" enctype="multipart/form-data" autocomplete="on">
                                            {{ csrf_field()}}

                                            <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="title" class="form-control" id="title"
                                                           value="{{$posts->title}}"    placeholder="Input title">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">
                                                    Categories
                                                </label>
                                                <div class="col-sm-10">

                                                    @foreach($category as $cat)
                                                        <label class="checkbox-inline icheckbox">
                                                            <input type="checkbox"
                                                                   @foreach($posts->categories as $ta)
                                                                   @if($cat->id == $ta->id)
                                                                   checked
                                                                   @endif
                                                                   @endforeach
                                                                   name="category[]" id="inlineCheckbox1" value="{{$cat->id}}">
                                                            {{$cat->category}}

                                                        </label>

                                                    @endforeach
                                                </div>

                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">
                                                    Tags
                                                </label>
                                                <div class="col-sm-10">

                                                    @foreach($tags as $tag)
                                                        <label class="checkbox-inline icheckbox">
                                                            <input type="checkbox"
                                                                   @foreach($posts->tags as $ta)
                                                                   @if($tag->id == $ta->id)
                                                                   checked
                                                                   @endif
                                                                   @endforeach
                                                                   name="tags[]" id="inlineCheckbox1" value="{{$tag->id}}">
                                                            {{$tag->tag}}

                                                        </label>

                                                    @endforeach
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">
                                                    Select File
                                                </label>
                                                <div class="col-sm-10">
                                                    <input id="input-21" type="file" name="image" accept="image/*" class="file-loading">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">
                                                    Content
                                                </label>
                                                <div class="col-sm-10 col-md-10">
                                        <textarea rows="4" class="form-control resize_vertical"
                                                  name="content"  placeholder="">{{$posts->content}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-5 col-md-offset-2">
                                                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                                                </div>
                                                <div class="col-sm-2"></div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
