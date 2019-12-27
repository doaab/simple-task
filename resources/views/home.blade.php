@extends('layouts.app')
@section('page', 'Users')
@section('blank', 'Add New User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <i class="fa fa-fw ti-move"></i> Create Post
                                        </h3>
                                        <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">
                                            {{ csrf_field()}}

                                            <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="title" class="form-control" id="title"
                                                           placeholder="Input title">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label m-t-ng-8">Checkbox</label>
                                                <div class="col-sm-10">
                                                    <div>
                                                        <label>
                                                            <input type="checkbox" name="c1" id="c1" value=""> Checkbox 1
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="checkbox" name="c1" id="c2" value=""> Checkbox 2
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="checkbox" name="c1" id="c3" value=""> Checkbox 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">
                                                    Inline Checkbox
                                                </label>
                                                <div class="col-sm-10">
                                                    <label class="checkbox-inline icheckbox">
                                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Inline checkbox
                                                        1
                                                    </label>
                                                    <label class="checkbox-inline icheckbox">
                                                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Inline checkbox
                                                        2
                                                    </label>
                                                    <label class="checkbox-inline icheckbox">
                                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Inline checkbox
                                                        3
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">
                                                    Content
                                                </label>
                                                <div class="col-sm-10 col-md-10">
                                        <textarea rows="4" class="form-control resize_vertical"
                                                  placeholder="Basic"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-5 col-md-offset-2">
                                                    <button class="btn btn-primary btn-block">Create</button>
                                                </div>
                                                <div class="col-sm-2"></div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
