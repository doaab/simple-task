@extends('layouts.app')
@section('page', 'Tag')
@section('blank', 'Create')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <i class="fa fa-fw ti-move"></i> Create Tag
                                        </h3>
                                        <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                </span>
                                    </div>
                                    <div class="panel-body">
                        @if(count($errors) > 0)

                            <ul class="navbar-nav mr-auto">
                                @foreach($errors->all() as $error)
                                    <li class="nav-item dropdown">

                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{route('tag.store')}}" method="post" enctype="multipart/form-data" autocomplete="on">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="title">Tag</label>
                                <input type="text" class="form-control" name="tag" id="tag"  placeholder="Enter Tag Name">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
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