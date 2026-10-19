@extends('frontend.layouts.layout')
@section('title', 'Thank You - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'Thank You - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('keywords', 'Nexa Health Consult, Projects, Healthcare Consultants, Medical Consulting, Global Healthcare
    Leadership')
@section('meta-description', 'Learn about the journey and mission of Nexa Health Consult, your trusted healthcare
    consulting partners.')

@section('content')

    <!-- Page Header Section Start -->
    <div class="page-header parallaxie"
        style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">
                            Thank <span>You</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thank You</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->


    <!-- Thank You Content Start -->
    <div class="thank-you-section" style="padding:80px 0;background:#f7fbfb;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">

                    <div class="thank-you-box"
                        style="background:#fff;padding:50px;border-radius:12px;box-shadow:0 10px 30px rgba(0,0,0,0.08);">

                        <!-- Icon -->
                        <div style="font-size:60px;color:#0C6161;margin-bottom:20px;">
                            <i class="fa fa-check-circle"></i>
                        </div>

                        <!-- Title -->
                        <h2 style="font-weight:600;margin-bottom:15px;">
                            Thank You!
                        </h2>

                        <!-- Message -->
                        <p style="color:#555;font-size:16px;margin-bottom:25px;">
                            Your message has been successfully sent. Our team will get back to you shortly.
                        </p>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="{{ url('/') }}" class="btn-default">
                                Go to Home
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Thank You Content End -->

@endsection
