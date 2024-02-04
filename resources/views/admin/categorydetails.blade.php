
@extends('layouts.admin.templateadmin')

@section('title')
    category Details
@endsection
@push('header')
    category Details
@endpush
@section('content')
    <div class="right_col" role="main">
        <div class="">
            @include('includes.admin.pageHeader')

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <h2>category Name: {{  $category->categoryName }}</h2>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


