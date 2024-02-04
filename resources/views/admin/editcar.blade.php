@extends('layouts.admin.templateadmin')

@section('title')
    Edit Car
@endsection
@push('header')
    Manage Cars
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
                            <h2>Edit Car</h2>
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

                            <form id="demo-form2"   class="form-horizontal form-label-left" method="post"  action="{{route('cars.update',$car->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="title"  name="title" required="required" value="{{$car->title}}" class="form-control ">
                                        @error('title')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="Content">Content <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Content" name="Content" required="required" class="form-control"  value="{{$car->Content}}">
                                        @error('Content')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Luggage" class="form-control" type="number" name="Luggage" required="required"  value="{{$car->Luggage}}">
                                        @error('Luggage')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Doors" class="form-control" type="number" name="Doors" required="required"  value="{{$car->Doors}}">
                                        @error('Doors')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Passengers" class="form-control" type="number" name="Passengers" required="required"  value="{{$car->Passengers}}">
                                        @error('Passengers')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Price" class="form-control" type="number" name="Price" required="required"  value="{{$car->Price}}">
                                        @error('Price')
                                        <div class="alter alter-warning">
                                            {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="Active" @checked($car->Active)>Active</label>

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="image" name="image" value="{{old('image')}}"  class="form-control">
                                        <img src="{{asset('assets/image/'.$car->image)}}" width="200px">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="category_id" id="category">
                                            <option value=" ">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @selected($car->category_id == $category->id)>{{$category->categoryName}}</option>
                                            @endforeach
                                        </select>
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





