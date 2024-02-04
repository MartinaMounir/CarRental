@extends('layouts.admin.templateadmin')

@section('title')
    Manage Testimonials

@endsection
@push('header')
    Manage Testimonials

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
                            <h2>List of Testimonials</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"  href="../testimonials/create">Add Testimonial</a>
                                     </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Published</th>
                                                <th>Show</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                @foreach($testimonials as $testimonial)
                                                <td>{{$testimonial->id}}</td>
                                                <td>{{$testimonial->Name}}</td>
                                                <td>{{$testimonial->Position}}</td>
                                                <td>{{$testimonial->published}}</td>
                                                    <td> <a href="{{route('testimonials.show',$testimonial->id)}}" class="btn btn-link">show</a></td>
                                                    <td> <a href="{{route('testimonials.edit',$testimonial->id)}}" class="btn btn-link">Edit</a></td>
                                                    <td>
                                                        <form action="{{route('testimonials.destroy', $testimonial->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                                        </form></td>              </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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


