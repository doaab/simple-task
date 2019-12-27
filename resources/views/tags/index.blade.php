@extends('layouts.app')
@section('page', 'Tag')
@section('blank', 'List')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tags</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            @if($tags ->count() > 0)
                            <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $num = 1; ?>
                            @foreach($tags as $tag)

                                <tr>
                                    <th scope="row">{{$num}}</th>
                                    <td>{{$tag->tag}}</td>
                                    <td> <a class="" href="{{route('tag.edit',['id' => $tag->id])}}">
                                            <i class="fa fa-edit"></i>edit </a>
                                    </td>
                                    <td> <a class="" href="{{route('tag.delete',['id' => $tag->id])}}">
                                            <i class="fa fa-trash"></i> remove</a>
                                    </td>
                                </tr>
                                <?php $num++; ?>
                            @endforeach
                            </tbody>
                            @else
                                <p>No Tags</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection