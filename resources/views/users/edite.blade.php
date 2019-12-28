<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 26/12/19
 * Time: 08:12 م
 */
?>
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

                        <h4>Edit User {{$user->name}}</h4>

                        <form action="{{route('users.update',['id' => $user->id ])}}" method="post" autocomplete="on">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{$user->email}}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Roles
                                </label>
                                <br>
                                <div class="col-sm-10">
                                        <label class="checkbox-inline icheckbox">
                                            <input type="checkbox" name="roles[]" id="inlineCheckbox1" value="super_admin"
                                                    {{ $user->hasRole('super_admin') ? 'checked' : '' }}> Super admin
                                        </label>
                                </div>
                                <br>
                                <div class="col-sm-10">
                                        <label class="checkbox-inline icheckbox">
                                            <input type="checkbox" name="roles[]" id="inlineCheckbox1" value="writer"
                                                    {{ $user->hasRole('writer') ? 'checked' : '' }}> Writer
                                        </label>
                                </div>
                                <br>
                                <div class="col-sm-10">
                                        <label class="checkbox-inline icheckbox">
                                            <input type="checkbox" name="roles[]" id="inlineCheckbox1" value="user"{{ $user->hasRole('user') ? 'checked' : '' }}> User
                                        </label>
                                </div>
                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection

