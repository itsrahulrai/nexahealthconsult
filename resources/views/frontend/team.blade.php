@extends('frontend.layouts.layout')
@section('title', 'Our Team - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'Our Team - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('keywords', 'Nexa Health Consult, Our Team, Healthcare Consultants, Medical Consulting, Global Healthcare Leadership')
@section('meta-description', 'Learn about the journey and mission of Nexa Health Consult, your trusted healthcare consulting partners.')

@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie"
    style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque"
                        style="visibility: visible; animation-name: fadeInUp;">Our <span>Team</span></h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->


<!-- Page Team Start -->
<div class="page-team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="{{route('about-us')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/sanjeev-kalra.jpg') }}" alt="Dr. Sanjeev Kalra">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="{{route('about-us')}}">Dr. Sanjeev Kalra</a></h2>
                            <p>CEO/Founder</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="#" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/2.webp') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="#">Shima Enal</a></h2>
                            <p>Director Healthcare Operations</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="{{route('raghav-gupta')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/raghav-gupta.jpg') }}" alt="Dr. Sanjeev Kalra">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="{{route('raghav-gupta')}}">Raghav Gupta </a></h2>
                            <p> Director for Project Management</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="{{route('shubham-garg')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/shubham-garg.jpg') }}" alt="Shubham Garg, CE">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="{{route('shubham-garg')}}">Shubham Garg, CE</a></h2>
                            <p>Senior Technical Manager</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="{{route('nitya-ahuja')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/nitya-ahuja.png') }}" alt="Nitya Ahuja">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="{{route('nitya-ahuja')}}">Nitya Ahuja</a></h2>
                            <p>Director – Hospital Operations Management (India)</p>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="col-xl-3 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="{{route('dr-t-j-hemnani')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/dr-t-j-hemnani.webp') }}" alt="Dr. T J Hemnani ">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="{{route('dr-t-j-hemnani')}}">Dr. T J Hemnani </a></h2>
                            <p> Senior Advisor, Medical College Establishment | Nexa Health Consult</p>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-xl-3 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="{{route('sujeet-katiyar')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/sujeet-katiyar.jpeg') }}" alt="Mr. Sujeet Katiyar" style="object-position: top center;">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="{{route('sujeet-katiyar')}}">Mr. Sujeet Katiyar </a></h2>
                            <p> Senior Advisor – Digital Health Transformation | Nexa Health Consult</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Page Team End -->


@endsection