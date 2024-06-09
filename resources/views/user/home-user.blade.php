@extends('layouts.user-dashboard')
@section('content')
    <section id="home" class="d-flex align-items-center justify-content-center vh-100 text-white text-center bg-dark">
        <div class="container">
            <h1 class="display-3">Welcome to MyBrand</h1>
            <p class="lead">Your success starts here</p>
            <a href="#about" class="btn btn-danger btn-lg cta-button">Learn More</a>
        </div>
    </section>

    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p class="text-center">We are dedicated to providing the best service in the industry.</p>
        </div>
    </section>

    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <h3>Service 1</h3>
                    <p>Description of service 1.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Service 2</h3>
                    <p>Description of service 2.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Service 3</h3>
                    <p>Description of service 3.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <form class="mx-auto" style="max-width: 600px;">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark btn-block">Send</button>
            </form>
        </div>
    </section>
@endsection
