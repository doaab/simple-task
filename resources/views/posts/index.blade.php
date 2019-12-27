@extends('layouts.app')

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            @if($posts->count() > 0)
                            <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $num = 1; ?>
                            @foreach($posts as $post)

                                <tr>
                                    <th scope="row">{{$num}}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->updated_at}}</td>
                                    <td><img src="../{{$post->image}}" class="img-thumbnail" width="100px" height="100px"/></td>
                                    <td> <a class="" href="{{route('post.edit',['id' => $post->id])}}">
                                          <i class="fa fa-edit"></i>edit </a>
                                    </td>
                                    <td> <a class="" href="{{route('posts.delete',['id' => $post->id])}}">
                                          <i class="fa fa-trash"></i> remove</a>
                                    </td>
                                </tr>
                                <?php $num++; ?>
                            @endforeach
                            </tbody>
                            @else
                                <p>No data</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection