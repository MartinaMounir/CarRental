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
                        <h2>Full Name: {{  $messages->fullname }}</h2>
                        <br>
                        <h2>Email: {{  $messages->email }}</h2>
                        <br>
                        <h2>Message Content:</h2>
                        <p> {{  $messages->messagecontent }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


