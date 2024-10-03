<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Indian Atlantic') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    

    <style>
        /* Video Background */
        .video-background-wrapper video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            z-index: -1;
        }

        .video-background-wrapper .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Light overlay for better visibility */
            z-index: 0;
        }

        body {
            margin: 0;
            font-family: "Roboto", sans-serif;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            background-color: #f8f9fa; /* Light background color */
        }

        .container {
            position: relative;
            z-index: 2;
            padding-bottom: 50px; /* To ensure footer doesn't overlap content */
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.6); /* Dark semi-transparent background */
            backdrop-filter: blur(10px); /* Optional: adds a blur effect to the background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for better visibility */
        }

        .navbar-brand img {
            height: 110px;
            width: auto;
        }

        .navbar-nav .nav-link {
            color: #f8f9fa; /* Light color for links */
        }

        .navbar-nav .nav-link:hover {
            color: #e0e0e0; /* Slightly lighter on hover */
        }

       footer {
    background-color: rgba(0, 0, 0, 0.6); /* Transparent dark background */
    color: #f8f9fa; /* Light text color */
    padding: 10px 0; /* Reduced padding for a smaller footer */
    margin-top: 50px; /* Space above the footer */
    position: relative;
    z-index: 2;
}

footer h5 {
    margin-bottom: 10px; /* Reduced margin */
    font-size: 1.125rem; /* Slightly smaller font size */
}

footer p, footer a {
    font-size: 0.875rem; /* Slightly smaller font size */
    color: #f8f9fa; /* Light color for text */
}

footer a {
    text-decoration: none;
}

footer a:hover {
    color: #e0e0e0; /* Slightly lighter on hover */
}

footer ul {
    padding-left: 0;
    list-style: none;
}

footer ul li {
    margin-bottom: 5px; /* Reduced margin for smaller footer */
}

footer .contact-icon {
    color: #f8f9fa; /* Light color for icons */
    font-size: 18px; /* Slightly smaller icons */
    margin: 0 5px; /* Reduced margin */
    text-decoration: none;
}

footer .contact-icon:hover {
    color: #e0e0e0; /* Slightly lighter on hover */
}

footer .row {
    align-items: center; /* Center align items vertically */
}

@media (max-width: 768px) {
    footer {
        padding: 10px; /* Smaller padding for smaller screens */
    }

    footer h5 {
        font-size: 1rem; /* Smaller font size */
    }

    footer p, footer a {
        font-size: 0.8rem; /* Smaller font size */
    }

    footer .contact-icon {
        font-size: 16px; /* Smaller icons */
    }
}


        .contact-details {
            position: fixed;
            top: 6px; /* Adjust to align with the bottom of the navbar */
            right: 0;
            background-color: rgba(0, 0, 0, 0.6); /* Dark semi-transparent background */
            color: #f8f9fa; /* Light color for text */
            padding: 0px 10px;
            max-width: 500px; /* Adjust as needed */
            z-index: 11;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for better visibility */
        }

        .contact-info {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Adjust alignment as needed */
            flex-wrap: wrap;
        }

        .contact-icon {
            color: white; /* Light blue color for icons */
            font-size: 20px;
            margin: 0 10px;
            text-decoration: none;
        }

        .contact-text {
            margin: 0 0px;
            font-size: 16px;
        }

        .contact-icon i {
            margin-right: 8px;
        }

        .contact-info a:hover {
            color: #0056b3; /* Darker blue on hover */
        }

        /* Slow Down Background Video */
        #background-video {
            playbackRate: 0.5; /* Adjust playback rate (0.5 means 50% of normal speed) */
        }
        
    </style>
</head>
<body>
    <!-- Background Video Wrapper -->
    <div class="video-background-wrapper">
        <video id="background-video" src="{{ asset('videos/Bus.mp4') }}" muted loop autoplay></video>
    </div>

    <!-- Contact Details Section -->
    <div class="contact-details">
        <div class="contact-info">
            <a href="https://www.facebook.com/yourpage" target="_blank" class="contact-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/yourprofile" target="_blank" class="contact-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/yourphonenumber" target="_blank" class="contact-icon"><i class="fab fa-whatsapp"></i></a>
            <a href="mailto:your-email@example.com" class="contact-icon"><i class="fas fa-envelope"></i></a>
            <span class="contact-text">your-email@example.com</span>
            <span class="contact-text">+123 456 7890</span>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="{{ route('landing') }}">
            <img src="{{ asset('Indian1.png') }}" alt="Indian Atlantic Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('routes.index') }}">Our Routes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('booking-offices') }}">Booking Offices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="{{ route('home') }}">Book Your Ticket Here</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Scripts -->
    @yield('scripts')
    <!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p><strong>Address:</strong> 123 Main Street, Anytown, Country</p>
                <p><strong>Phone:</strong> +1-234-567-890</p>
                <p><strong>Email:</strong> contact@indianatlantic.com</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('routes.index') }}">Our Routes</a></li>
                    <li><a href="{{ route('booking-offices') }}">Booking Offices</a></li>
                    <li><a href="{{ route('home') }}">Book Your Ticket Here</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <a href="https://www.facebook.com/yourpage" target="_blank" class="contact-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/yourprofile" target="_blank" class="contact-icon"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/yourphonenumber" target="_blank" class="contact-icon"><i class="fab fa-whatsapp"></i></a>
                <a href="mailto:your-email@example.com" class="contact-icon"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p>&copy; {{ date('Y') }} Indian Atlantic. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
