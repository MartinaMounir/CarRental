
@extends('layouts.admin.templateadmin')

@section('title')
    Testimonial Details
@endsection
@push('header')
    Testimonial Details
@endpush
@section('content')
    <div class="right_col" role="main">
        <div class="">
            @include('includes.admin.pageHeader')

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <h2>testimonial Name: {{  $testimonial->Name }}</h2>
                        <br>
                        <h2>testimonial Position: {{  $testimonial->Position }}</h2>
                        <br>
                        <h2>testimonial Content: </h2>
                        <p> {{  $testimonial->Content }}</p>
                        <br>
                        <h2>testimonial image: </h2>
                        <img class="img-fluid" src="{{asset('../assets/image/' .$testimonial->image)}}" alt="cars">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


