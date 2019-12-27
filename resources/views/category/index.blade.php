@extends('layouts.app')

@section('page', 'Category')
@section('blank', 'List')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->category}}</td>
                                    <td> <a class="" href="{{route('category.edit',['id' => $category->id])}}">
                                          <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td> <a class="" href="{{route('category.delete',['id' => $category->id])}}">
                                          <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection