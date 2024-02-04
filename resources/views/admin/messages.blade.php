@extends('layouts.admin.templateadmin')

@section('title')
    Manage Messages

@endsection
@push('header')
    Manage Messages

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
                            <h2>List of Messages</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
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
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Show</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($messages as $message)
                                                <tr>
                                                <td>{{$message->fullname}}</td>
                                                <td>{{$message->email}}</td>
                                                    <td><a href="{{route('messages.show',$message->id)}}" class="btn btn-link">Show</a></td>

                                                    <td>   <form action="{{route('messages.destroy', $message->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-link">Delete</button>
                                                        </form></td>
                                                </tr>
                                                @endforeach
                                            </tr>


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

