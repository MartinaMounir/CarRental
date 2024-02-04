@extends('layouts.template')

@section('title')
    Home page
@endsection

@section('content')
    @include('includes.hero')
    @include('includes.site-section')
    @include('includes.CarListings')
    @include('includes.Features')
    @include('includes.testimonialsHome')
    @include('includes.waiting')
@endsection
