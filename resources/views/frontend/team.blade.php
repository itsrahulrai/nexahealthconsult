@extends('frontend.layouts.layout')
@section('title', 'Projects - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'Projects - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('keywords', 'Nexa Health Consult, Projects, Healthcare Consultants, Medical Consulting, Global Healthcare Leadership')
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
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="dr-sanjeev-kalra.php" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/dr-kalra.webp') }}" alt="Dr. Sanjeev Kalra">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="dr-sanjeev-kalra.php">Dr. Sanjeev Kalra</a></h2>
                            <p>Dual Master’s (Hospital Mgmt & Finance), Exec Leadership Johns Hopkins, MHA University of
                                Phoenix</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="team-item wow fadeInUp">
                    <div class="team-item-image">
                        <a href="" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ static_asset('assets/images/team/2.webp') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="team-item-body">
                        <div class="team-item-contant">
                            <h2><a href="">Shima Enal</a></h2>
                            <p>Director Healthcare Operations</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Page Team End -->


@endsection