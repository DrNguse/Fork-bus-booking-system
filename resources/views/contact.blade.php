@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 200px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mt-4 text-white text-center">Contact Us</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: rgba(0, 0, 0, 0.7); border: none;">
                    <div class="card-header text-white">
                        Contact Details
                    </div>
                    <div class="card-body text-white">
                        <p><strong>Phone:</strong> +1-234-567-890</p>
                        <p><strong>Email:</strong> contact@indianatlantic.com</p>
                        <p><strong>Address:</strong> 123 Main Street, Anytown, Country</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h2 class="text-white text-center">About Us</h2>
                <div class="card" style="background-color: rgba(0, 0, 0, 0.7); border: none;">
                    <div class="card-header text-white">
                        About Indian Atlantic
                    </div>
                    <div class="card-body text-white">
                        <p><strong>Company Overview:</strong> Indian Atlantic is dedicated to providing top-notch transportation services with a focus on customer satisfaction and innovative solutions.</p>
                        <p><strong>Mission:</strong> Our mission is to deliver reliable and comfortable travel experiences, making every journey with us memorable and hassle-free.</p>
                        <p><strong>Values:</strong> Integrity, Excellence, Customer-Centricity, and Innovation are at the core of everything we do.</p>
                        <p><strong>Vision:</strong> To be the leading provider of transportation solutions, recognized for our commitment to quality and customer care.</p>
                        <div class="text-center">
                            <img src="{{ asset('Indian1.png') }}" alt="Company" class="img-fluid rounded mb-10" style="max-width: 60%; height: 60%;">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
