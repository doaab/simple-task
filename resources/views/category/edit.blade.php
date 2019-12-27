@extends('layouts.app')
@section('page', 'Category')
@section('blank', 'Edit')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Category {{$category->category}}</div>

                    <div class="card-body">

                        <form action="{{route('category.update',['id' => $category->id ])}}" method="post" autocomplete="on">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" name="category" id="name"  value="{{$category->category}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection