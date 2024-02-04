@extends('layouts.template')

@section('title')
    Contact page
@endsection

@push('header')
    Contact
@endpush

@section('content')
    @include('includes.pageHeader')

    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <br>
                    <h2>Contact Us Or Use This Form To Rent A Car</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5" >
                    <form action="{{ route('submit') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">

                                <input type="text" class="form-control" id="fullname" placeholder="name" name="fullname" required>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email address" id="email"  name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">

                                <input type="text" class="form-control" id="subject" placeholder="subject" name="subject" required>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">

                                <textarea name="messagecontent" id="messagecontent" class="form-control" required placeholder="Write your message." cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <button class="btn btn-block btn-primary text-white py-3 px-5" type="submit">Send Message</button>

                             </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Contact Info</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block mb-3">
                                <span class="d-block text-black">Address:</span>
                                <span>34 Street Name, City Name Here, United States</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

