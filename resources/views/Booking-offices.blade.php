@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 200px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mt-4 text-white text-center">Our Booking Offices</h1>
                <p class="text-white text-center">We have booking offices located in various cities to assist you with your travel needs. Please find the contact details and addresses below:</p>

                <div class="card mt-4" style="background-color: rgba(0, 0, 0, 0.7); border: none;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Office 1</h5>
                        <p class="card-text">
                            <strong>Address:</strong> 123 Main Street, Cityname<br>
                            <strong>Phone:</strong> (123) 456-7890<br>
                            <strong>Email:</strong> office1@example.com
                        </p>
                    </div>
                </div>

                <div class="card mt-4" style="background-color: rgba(0, 0, 0, 0.7); border: none;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Office 2</h5>
                        <p class="card-text">
                            <strong>Address:</strong> 456 Another Street, AnotherCity<br>
                            <strong>Phone:</strong> (987) 654-3210<br>
                            <strong>Email:</strong> office2@example.com
                        </p>
                    </div>
                </div>

                <!-- Add more offices as needed -->
            </div>
        </div>
    </div>
@endsection
