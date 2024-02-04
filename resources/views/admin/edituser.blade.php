@extends('layouts.admin.templateadmin')

@section('title')
    Manage Users

@endsection
@push('header')
    Edit Users

@endpush
@section('content')
    <div class="right_col" role="main">
        <div class="">
            @include('includes.admin.pageHeader')

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit User</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Settings 1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2"   class="form-horizontal form-label-left" method="post"  action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="name"  name="name" required="required" value="{{$user->name}}" class="form-control ">
                                        @error('name')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="email"  name="email" required="required" value="{{$user->email}}" class="form-control ">
                                        @error('email')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="col-form-label col-md-3 col-sm-3 label-align">password <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="password" class="form-control "
                                               type="password"
                                               name="password"
                                        />

                                    </div>    </div>

                                <!-- Confirm Password -->


                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="Active" @checked($user->Active)>Active</label>

                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                         <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
