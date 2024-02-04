@extends('layouts.admin.templateadmin')

@section('title')
    cars page
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
                            <h2>List of Cars</h2>

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"  href="../cars/create">Add Car</a>
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
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Active</th>
                                                <th>Show</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cars as $car)
                                                <tr>
                                                <td>{{$car->id}}</td>
                                                <td>{{$car->title}}</td>
                                                <td>{{$car->Price}}</td>
                                                    <td>{{$car->Active? 'Yes': 'No'}}</td>
                                                    <td><a href="{{route('cars.show',$car->id)}}" class="btn btn-link">Show</a></td>
                                                    <td> <a href="{{route('cars.edit',$car->id)}}" class="btn btn-link">Edit</a></td>
                                                  <td>   <form action="{{route('cars.destroy', $car->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                                    </form></td>
                                                </tr>
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


