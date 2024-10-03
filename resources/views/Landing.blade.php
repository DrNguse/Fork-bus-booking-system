@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 200px;"> <!-- Adjusted margin-top to push content below navbar -->
        <!-- Main Header -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-12 text-center">
                <h1 class="header" style="font-size: 4em; color: white; font-family: 'Arial', sans-serif;">
                    Welcome to Indian Atlantic
                </h1>
                <p style="font-size: 2em; font-weight: bold; color: white; font-family: 'Arial', sans-serif;">
                    "Ride Smart, Travel Easy—Indian Atlantic, Your Journey Simplified!"
                </p>
            </div>
        </div>

        <!-- Features Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 text-center">
                <i class="fas fa-bus fa-3x text-white"></i>
                <h3 class="text-white mt-3">Reliable Transportation</h3>
                <p class="text-white">Enjoy a comfortable and reliable ride with Indian Atlantic. We ensure your journey is smooth and timely.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-map-marked-alt fa-3x text-white"></i>
                <h3 class="text-white mt-3">Extensive Routes</h3>
                <p class="text-white">Explore a wide range of destinations with our extensive route network across the region.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-ticket-alt fa-3x text-white"></i>
                <h3 class="text-white mt-3">Easy Booking</h3>
                <p class="text-white">Book your tickets effortlessly with our user-friendly platform and enjoy seamless travel planning.</p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                <a href="{{ route('routes.index') }}" class="btn btn-lg btn-primary">Explore Our Routes</a>
                <a href="{{ route('contact') }}" class="btn btn-lg btn-primary">Contact Us</a>
                <a href="{{ route('booking-offices') }}" class="btn btn-lg btn-primary">Our Booking Offices</a>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption">
                                <p class="text-white">"Indian Atlantic made my travel so easy! The service is excellent, and I always arrive on time."</p>
                                <h5 class="text-white">- John Doe</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <p class="text-white">"I love the convenience of booking online. Indian Atlantic has truly simplified my journeys."</p>
                                <h5 class="text-white">- Jane Smith</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <p class="text-white">"The best travel experience I've had in years! Highly recommended for anyone looking for reliable transportation."</p>
                                <h5 class="text-white">- Mark Wilson</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Safety and Hygiene Info Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: white; font-family: 'Arial', sans-serif;">Our Safety & Hygiene Measures</h2>
            <p style="color: white; font-size: 1.2em; line-height: 1.6;">
                At Indian Atlantic, your safety is our top priority. We have implemented strict hygiene protocols 
                to ensure a clean and safe travel experience for all our passengers. Our measures include:
            </p>
            <ul style="color: white; font-size: 1.1em;">
                <li>Regular sanitation of buses before and after every trip</li>
                <li>Mandatory face masks for drivers and passengers</li>
                <li>Temperature checks at boarding</li>
                <li>Hand sanitizers available at all touchpoints</li>
                <li>Social distancing guidelines followed at stations</li>
            </ul>
            <p style="color: white; font-size: 1.2em;">
                Travel with confidence, knowing that your health is our priority.
            </p>
        </div>
        <div class="col-md-6">
            <img src="BusIn.png" alt="Safety and Hygiene" class="img-fluid" style="border-radius: 10px;">
        </div>
    </div>
</div>
      </div>
    </div>
@endsection

@section('scripts')
    <!-- Add any specific scripts for the landing page here -->
@endsection
