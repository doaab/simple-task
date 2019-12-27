@extends('layouts.app')

@section('page', 'Post')
@section('blank', 'Deleted Post')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Trashed</div>

                    <div class="card-body">

                        <table class="table table-striped">

                            @if($posts->count() > 0)
                                <thead>
                                    <tr>
                                        <th scope="col">Number</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Restore</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th scope="row">{{$post->id}}</th>
                                        <td>{{$post->title}}</td>
                                        <td>
                                            <img src="{{asset($post->image)}}" width="100px" height="100px" class="img-thumbnail"/>
                                        </td>
                                        <td>
                                            <a class="" href="{{route('post.restore',['id' => $post->id])}}">
                                              <i class="fa fa-repeat"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="" href="{{route('post.hdelete',['id' => $post->id])}}">
                                              <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            @else
                                No trashed posts
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection