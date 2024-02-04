@extends('layouts.template')

@section('title')
    listings page
@endsection

@push('header')
    listings
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.CarListings')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-5">


                       <span>  {{ $cars->render() }} </span>


                </div>
            </div>
        </div>
    </div>
    @include('includes.Testimonials')
    @include('includes.waiting')

@endsection

