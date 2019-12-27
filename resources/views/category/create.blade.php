@extends('layouts.app')
@section('page', 'Category')
@section('blank', 'Create')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Category</div>

                    <div class="card-body">
                        @if(count($errors) > 0)

                            <ul class="navbar-nav mr-auto">
                                @foreach($errors->all() as $error)
                                    <li class="nav-item dropdown">

                                       <p style="color: red">{{$error}}</p>

                                    </li>
                                @endforeach
                            </ul>
                        @endif
                            <br>
                        <form action="{{route('category.store')}}" method="post" autocomplete="on">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" name="category" id="category"  value="{{ old('category') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection