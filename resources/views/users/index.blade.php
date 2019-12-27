<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 26/12/19
 * Time: 08:12 م
 */
?>
@extends('layouts.app')

@section('page', 'Users')
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
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $index=>$user)
                                <tr>
                                    <th scope="row">{{$index + 1}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            {{ $role->display_name }}
                                            {{ ($index + 1) < $user->roles->count() ? '|' : '' }}
                                        @endforeach
                                    </td>
                                    <td> <a class="" href="{{route('users.edit', $user->id)}}">
                                            <i class="fa fa-edit"></i> </a>
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
