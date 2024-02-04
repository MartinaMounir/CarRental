@extends('layouts.admin.templateadmin')

@section('title')
    Add Car
@endsection
@push('header')
    Add Car
@endpush
@section('content')
    <form action="{{ route('cars.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="right_col" role="main">
        <div class="">
            @include('includes.admin.pageHeader')

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Car</h2>
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
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">title<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="title" required="required" name="title" class="form-control ">
                                        @error('title')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="Content">Content<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="Content" required="required" name="Content" class="form-control">
                                        @error('Content')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align"> Luggage<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Luggage" class="form-control" type="number" name="Luggage" required="required" >
                                        @error('Luggage')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Doors" class="form-control" type="number" name="Doors" required="required" >
                                        @error('Doors')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Passengers" class="form-control" type="number" name="Passengers" required="required">
                                        @error('Passengers')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Price" class="form-control" type="number" name="Price" required="required"  >
                                        @error('Price')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="image" name="image" required="required" class="form-control" >
                                    </div></div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat" name="Active">
                                        </label>
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="category_id" id="category">
                                            <option value=" ">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->categoryName}}</option>

                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">

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
    </form>
@endsection



