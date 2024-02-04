@extends('layouts.admin.templateadmin')

@section('title')
    Add User
@endsection
@push('header')
    Add User
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
                            <h2>Add User</h2>
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
                            <form action="{{ route('users.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="name" required="required" name="name" class="form-control ">
                                        @error('name')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">email <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="email" required="required" name="email" class="form-control ">
                                        @error('email')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="item form-group">
                                    <label for="password" class="col-form-label col-md-3 col-sm-3 label-align">password <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                    <input id="password" class="form-control "
                                                  type="password"
                                                  name="password"
                                               />
                                        <div class="alter alter-warning">
                                    <error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>    </div>

                                <!-- Confirm Password -->
                                <div class="item form-group">
                                    <label for="password_confirmation" class="col-form-label col-md-3 col-sm-3 label-align">password_confirmation <span class="required">*</span></label>
                                     <div class="col-md-6 col-sm-6 ">
                                    <input id="password_confirmation" class="form-control"
                                                  type="password"
                                                  name="password_confirmation" required autocomplete="new-password" />
                                         <div class="alter alter-warning">
                                             <error :messages="$errors->get('password_confirmation')" class="mt-2" />   </div>
                                 </div></div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat" name="Active">
                                        </label>
                                    </div>
                                </div>
                                 <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button type="submit" class="btn btn-success">Add</button>
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




