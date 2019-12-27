@extends('layouts.app')
@section('page', 'Tag')
@section('blank', 'Edit')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Tag (( {{$tag->tag}} ))</div>

                    <div class="card-body">
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
                                    <input type="text" class="form-control" name="tag" id="tag"  value="{{$tag->tag}}">
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection