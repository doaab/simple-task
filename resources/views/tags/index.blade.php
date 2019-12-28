@extends('layouts.app')
@section('page', 'Tag')
@section('blank', 'List')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="ti-layout-cta-left"></i> Tags
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table" id="table1">    @if($tags ->count() > 0)
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
            </div>
        </div>
    </div>
@endsection