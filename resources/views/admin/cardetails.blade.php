@extends('layouts.admin.templateadmin')
@section('title')
    Car Details
@endsection
@push('header')
    Car Details
@endpush
@section('content')
    <div class="right_col" role="main">
        <div class="">
            @include('includes.admin.pageHeader')

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <h2>cars title: {{  $cars->title }}</h2>

                        <br>
                        <h2>cars Content:</h2>
                        <p> {{  $cars->Content }}</p>
                        <br>
                        <h2>cars Luggage: {{  $cars->Luggage }}</h2>
                        <br>
                        <h2>cars Doors: {{  $cars->Doors }}</h2>
                        <br>
                        <h2>cars Passengers: {{  $cars->Passengers }}</h2>
                        <br>
                        <h2>cars Price: {{  $cars->Price }}</h2>
                        <br>
                        <h2>category: {{  $cars->category->categoryName }}</h2>
                        <br>
                        <h2>cars image:</h2>
                        <img class="img-fluid" src="{{asset('../assets/image/' .$cars->image)}}" alt="cars">


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


